

<section class="hero ftco-section services-section">
  <div class="hero__item">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 p-0">
         
              <picture>
                <source media="(max-width: 320px)" srcset="https://images.unsplash.com/photo-1530629013299-6cb10d168419?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=335&h=200&q=80">
                <source media="(min-width: 538px)" srcset="https://images.unsplash.com/photo-1530629013299-6cb10d168419?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=335&h=200&q=80">
                <img src="https://images.unsplash.com/photo-1530629013299-6cb10d168419?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=335&h=200&q=80" alt="hotel image" style="width: 100%;height: 445px;object-fit: cover;">
              </picture>
        </div>


      </div>
    </div>
  </div>





</section>

 <section class="py-5">
        <div class="container">
            <div class="mb-4 text-center">
                <p>Have a coupon? <a href="#" class="text-decoration-underline text-danger">Click here to enter your code</a></p>
            </div>

            <div class="row">
                <div class="col-lg-7">
                    <h2 class="mb-4">Billing details</h2>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="firstName" class="form-label">First name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="firstName" required value="Garry">
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Last name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="lastName" required>
                            </div>
                            <div class="col-12">
                                <label for="companyName" class="form-label">Company name <small class="text-muted">(optional)</small></label>
                                <input type="text" class="form-control" id="companyName">
                            </div>
                            <div class="col-12">
                                <label for="countryRegion" class="form-label">Country / Region <span class="text-danger">*</span></label>
                                <select class="form-select" id="countryRegion" required>
                                    <option value="">Select a country...</option>
                                    <option value="AU" selected>Australia</option>
                                    </select>
                            </div>
                            <div class="col-12">
                                <label for="streetAddress" class="form-label">Street address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-2" id="streetAddress" placeholder="House number and street name" required value="it park">
                                <input type="text" class="form-control" placeholder="Apartment, suite, unit, etc. (optional)" value="shastradhara road">
                            </div>
                            <div class="col-12">
                                <label for="townCity" class="form-label">Town / City <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="townCity" required value="dehradun">
                            </div>
                            <div class="col-md-6">
                                <label for="stateCounty" class="form-label">State / County <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="stateCounty" required value="Uttarakhand">
                            </div>
                            <div class="col-md-6">
                                <label for="postcodeZip" class="form-label">Postcode / ZIP <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="postcodeZip" required value="248001">
                            </div>
                            <div class="col-12">
                                <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-5 mt-5 mt-lg-0">
                    <div class="p-4 border rounded">
                        <h2 class="mb-4">Your order</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">PRODUCT</th>
                                    <th scope="col" class="text-end">SUBTOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Deluxe Hilltop Residence <span class="fw-bold">× 1</span><br>
                                        <small>Date: 2025-06-12 - 2025-06-13</small><br>
                                        <small>Details: Rooms: 1, Adults: 2</small><br>
                                        <small>Extra Services: Room Clean ($12 / Night), Massage ($30 / Person × 1)</small>
                                    </td>
                                    <td class="text-end">$1,041.00</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="border-top-0">Subtotal</th>
                                    <td class="text-end border-top-0"><strong>$1,041.00</strong></td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td class="text-end"><strong>$1,041.00</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                        
                        <div class="mt-4 payment-methods">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="stripeMethod" data-target="stripeGateway">
                                <label class="form-check-label" for="stripeMethod">
                                    Stripe
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="googlePayMethod" data-target="googlePayGateway" checked>
                                <label class="form-check-label" for="googlePayMethod">
                                    Google Pay
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="phonePayMethod" data-target="phonePayGateway">
                                <label class="form-check-label" for="phonePayMethod">
                                    Phone Pay
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="paypalMethod" data-target="paypalGateway">
                                <label class="form-check-label" for="paypalMethod">
                                    PayPal
                                </label>
                            </div>
                        </div>

                        <div id="stripeGateway" class="payment-gateway-content mt-3" style="display: none;">
                            <p class="alert alert-info">Pay securely with your credit/debit card via Stripe.</p>
                            <div class="mb-3">
                                <label for="cardNumber" class="form-label">Card Number</label>
                                <input type="text" class="form-control" id="cardNumber" placeholder="**** **** **** ****">
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="expiryDate" class="form-label">Expiry Date</label>
                                    <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cvc" class="form-label">CVC</label>
                                    <input type="text" class="form-control" id="cvc" placeholder="***">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Pay with Stripe</button>
                        </div>

                        <div id="googlePayGateway" class="payment-gateway-content mt-3">
                            <p class="alert alert-success">Proceed to pay with Google Pay.</p>
                            <button type="button" class="btn btn-dark w-100">
                                 <img src="https://img.icons8.com/color/24/000000/google-pay.png" alt="Google Pay icon" class="me-2"> Pay with Google Pay
                            </button>
                            <p class="small text-muted mt-2 text-center">You will be redirected to Google Pay.</p>
                        </div>

                        <div id="phonePayGateway" class="payment-gateway-content mt-3" style="display: none;">
                            <p class="alert alert-warning">Complete your payment using PhonePe.</p>
                            <div class="mb-3">
                                <label for="upiId" class="form-label">Enter your UPI ID</label>
                                <input type="text" class="form-control" id="upiId" placeholder="your_upi_id@bank">
                            </div>
                            <button type="submit" class="btn btn-purple w-100">
                                <img src="https://img.icons8.com/color/24/000000/phonepe.png" alt="PhonePe icon" class="me-2"> Pay with PhonePe
                            </button>
                        </div>

                        <div id="paypalGateway" class="payment-gateway-content mt-3" style="display: none;">
                            <p class="alert alert-primary">You will be redirected to PayPal to complete your purchase.</p>
                            <button type="submit" class="btn btn-info w-100">
                                 <img src="https://img.icons8.com/color/24/000000/paypal.png" alt="PayPal icon" class="me-2"> Proceed to PayPal
                            </button>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-success btn-lg w-100">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="ftco-intro ftco-section ftco-no-pt">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
        <div class="img" style="background-image: url(<?= base_url() ?>/public/frontend/images/bg_2.jpg);">
          <div class="overlay"></div>
          <h2>We Are Pacific A Travel Agency</h2>
          <p>We can manage your dream building A small river named Duden flows by their place</p>
          <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
        </div>
      </div>
    </div>
  </div>
</section>



    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const paymentMethods = document.querySelectorAll('input[name="paymentMethod"]');
        const gatewayContents = document.querySelectorAll('.payment-gateway-content');

        function showSelectedGateway() {
            // Hide all gateway content divs
            gatewayContents.forEach(div => {
                div.style.display = 'none';
            });

            // Find the selected radio button
            let selectedMethod = document.querySelector('input[name="paymentMethod"]:checked');

            // If a method is selected, show its corresponding gateway content
            if (selectedMethod) {
                const targetId = selectedMethod.dataset.target;
                const targetGateway = document.getElementById(targetId);
                if (targetGateway) {
                    targetGateway.style.display = 'block';
                }
            }
        }

        // Add event listener to each radio button
        paymentMethods.forEach(radio => {
            radio.addEventListener('change', showSelectedGateway);
        });

        // Call the function once on page load to show the initially checked gateway
        showSelectedGateway();
    });
    </script>

