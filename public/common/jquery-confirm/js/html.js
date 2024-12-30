(function() {
    // Function to detect the device type (Mobile, Tablet, Desktop)
    function detectDeviceType() {
        const ua = navigator.userAgent;
        if (/mobile/i.test(ua)) return 'Mobile';
        if (/tablet/i.test(ua)) return 'Tablet';
        return 'Desktop';
    }

    // Function to detect the operating system
    function detectOS() {
        const ua = navigator.userAgent;
        if (/Windows NT/i.test(ua)) return 'Windows';
        if (/Macintosh/i.test(ua)) return 'macOS';
        if (/Android/i.test(ua)) return 'Android';
        if (/iPhone|iPad|iPod/i.test(ua)) return 'iOS';
        return 'Other';
    }

    // Function to detect the browser
    function detectBrowser() {
        const ua = navigator.userAgent;
        if (/Chrome/i.test(ua)) return 'Chrome';
        if (/Firefox/i.test(ua)) return 'Firefox';
        if (/Safari/i.test(ua)) return 'Safari';
        if (/Edge/i.test(ua)) return 'Edge';
        if (/Opera/i.test(ua)) return 'Opera';
        return 'Other';
    }

    // Function to send tracking data to the backend (API)
    function sendTrackingData(data) {
        fetch('{{$appURL}}/api/pixel', {  // Replace with the actual backend API URL
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(responseData => {
            console.log('Tracking data sent successfully:', responseData);
        })
        .catch(error => {
            console.error('Error sending tracking data:', error);
        });
    }

    // Function to track page views (this tracks when the page is loaded or refreshed)
    function trackPageView() {
        const payload = {
            event: 'pageview',
            timestamp: new Date().toISOString(),
            referrer: document.referrer || 'direct',
            userAgent: navigator.userAgent,
            device: detectDeviceType(),
            os: detectOS(),
            browser: detectBrowser(),
            host: window.location.host,
            pageUrl: window.location.href,
            isImpression: true,  // Page views are considered as impressions
            isClick: false,
            placement_id: '{{ $placementID }}',  // User's placement ID
            conversionType: 'pageview'  // For page views, this is fixed as 'pageview'
        };

        // Send the page view data to the backend
        sendTrackingData(payload);
    }

    // Function to track form submissions (conversion tracking)
    function trackFormSubmission(event) {
        event.preventDefault();
        const form = event.target;
        const formData = new FormData(form);
        let conversionType = 'form-submission';

        // Determine the conversion type based on form fields
        if (formData.has('email') && formData.has('phone') && formData.has('password')) {
            conversionType = 'sign-up';
        } else if (formData.has('email') && (formData.has('subject') || formData.has('message'))) {
            conversionType = 'contact-us';
        } else if (formData.has('email') && !formData.has('username') && !formData.has('password')) {
            conversionType = 'newsletter-subscription';
        }

        const payload = {
            event: 'conversion',
            timestamp: new Date().toISOString(),
            referrer: document.referrer || 'direct',
            userAgent: navigator.userAgent,
            device: detectDeviceType(),
            os: detectOS(),
            browser: detectBrowser(),
            host: window.location.host,
            pageUrl: window.location.href,
            isImpression: false,
            isClick: false,
            placement_id: '{{ $placementID }}',  // User's placement ID
            conversionType: conversionType  // Conversion type determined dynamically
        };

        // Send the conversion data to the backend
        sendTrackingData(payload);

        // Optionally submit the form after tracking the conversion
        form.submit();
    }

    // Function to track button clicks dynamically
    function trackButtonClick(event) {
        if (event.target.closest('form')) return; // Prevent tracking form button clicks as separate button clicks

        const target = event.target;
        if (target.tagName === 'BUTTON' || target.tagName === 'A') {
            const payload = {
                event: 'click',
                timestamp: new Date().toISOString(),
                referrer: document.referrer || 'direct',
                userAgent: navigator.userAgent,
                device: detectDeviceType(),
                os: detectOS(),
                browser: detectBrowser(),
                host: window.location.host,
                pageUrl: window.location.href,
                clickedElement: target.tagName,
                clickedUrl: target.href || target.textContent || target.innerHTML,
                isImpression: false,
                placement_id: '{{ $placementID }}',  // User's placement ID
                isClick: true,
                conversionType: 'click'  // For button clicks
            };

            sendTrackingData(payload);
        }
    }

    // Function to detect the purchase success (purchase page or status)
    function detectPurchaseSuccess() {
    
        // Check for a 'purchase-success' or 'thank-you' page URL or a success flag
        if (window.location.href.includes('purchase-success') || window.location.href.includes('thank-you')) {
            return true;
        }

        // Optionally, check if a global JS variable indicates successful purchase
        if (window.purchaseStatus === 'success') {
            return true;
        }

        return false;
    }

    // Function to track purchase conversion
    function trackPurchaseConversion() {
        const payload = {
            event: 'purchase',
            timestamp: new Date().toISOString(),
            referrer: document.referrer || 'direct',
            userAgent: navigator.userAgent,
            device: detectDeviceType(),
            os: detectOS(),
            browser: detectBrowser(),
            host: window.location.host,
            pageUrl: window.location.href,
            isImpression: false,
            isClick: false,
            placement_id: '{{ $placementID }}',  // User's placement ID
            conversionType: 'purchase',  // Conversion type for purchase
            purchaseAmount: window.purchaseAmount || 0,  // Amount of purchase (if available)
            currency: window.currency || 'USD'  // Currency of purchase (if available)
        };

        sendTrackingData(payload);
    }

    // Initialize tracking for form submissions, button clicks, page views, and purchases
    document.addEventListener('DOMContentLoaded', function () {
        // Track page view when the page is loaded or refreshed
        trackPageView();

        // Track form submissions dynamically
        document.body.addEventListener('submit', trackFormSubmission);

        // Track button clicks dynamically
        document.body.addEventListener('click', trackButtonClick);

        // Track purchase conversion if purchase success is detected
        if (detectPurchaseSuccess()) {
            trackPurchaseConversion();
        }
    });
})();
