<div class="hero-wrap js-fullheight">
	<video autoplay muted loop class="hero-video">
		<source src="<?= base_url() ?>/public/frontend/images/homebackground2.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>

	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
			<div class="col-md-7 ftco-animate">
				<span class="subheading">Welcome to Uttarakhand</span>
				<h1 class="mb-4"><?= lang('main.home_title') ?></h1>
				<p class="caps">Travel to the any corner of the world, without going around in circles</p>
			</div>
		</div>
	</div>
</div>
<?= view('section/topTravelPlaces'); ?>

<section class="ftco-intro ftco-section ftco-no-pt mt-5">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-6">
				<div class="span-svg d-flex">
				   <svg xmlns="http://www.w3.org/2000/svg" width="39" height="20" viewBox="0 0 39 20" fill="none"><path d="M3.26269 11.4756L1.71051 12.1186C1.26198 12.3044 0.936624 12.6809 0.817951 13.1517C0.699277 13.6224 0.80723 14.1082 1.114 14.4844C1.62539 15.1115 2.29239 15.5814 3.03352 15.8601L2.50269 17.4545C2.39497 17.7782 2.48673 18.1375 2.73644 18.3699C2.90092 18.5231 3.1154 18.6039 3.33273 18.6039C3.44533 18.6039 3.55868 18.5822 3.66619 18.5377L5.2965 17.8624C5.83057 17.6412 6.26179 17.232 6.51075 16.7104L6.82955 16.0424L10.3699 15.8564C11.5668 15.7935 12.735 15.5291 13.8421 15.0705L16.2364 14.0788L14.6859 18.7361C14.5658 19.097 14.6641 19.4821 14.9425 19.7413C15.125 19.9112 15.356 20 15.5925 20C15.7167 20 15.8424 19.9755 15.9633 19.9254L19.6324 18.4056C20.2463 18.1513 20.742 17.681 21.0283 17.0813L22.9285 13.0996C24.0022 13.0639 25.0499 12.8378 26.0436 12.4263L27.1662 11.9612C27.7919 11.7021 28.0901 10.9822 27.831 10.3564L27.449 9.43434L37.3077 5.35073C37.8382 5.131 38.2514 4.71789 38.471 4.18742C38.6908 3.65695 38.6907 3.0727 38.471 2.54226C38.0669 1.56656 37.0224 1.04603 36.0253 1.26486C34.2338 -0.0747746 31.8771 -0.376893 29.7938 0.486094L24.3447 2.74319L17.1084 0.193346C16.4816 -0.0275451 15.7986 -0.00857832 15.1851 0.246461L11.518 1.77111C11.1668 1.91715 10.9405 2.24397 10.9275 2.62405C10.9144 3.00417 11.1178 3.34576 11.4581 3.51549L16.4586 6.00972L9.43576 8.91866L4.91417 5.21493C4.21218 4.64 3.25544 4.49861 2.41746 4.84579L0.758802 5.53283C0.406979 5.67856 0.146842 5.97266 0.0451866 6.33966C-0.0564692 6.7067 0.0151997 7.09271 0.241976 7.3988L3.26269 11.4756ZM5.40228 16.1813C5.28421 16.4287 5.0797 16.6227 4.82646 16.7276L3.91336 17.1058L4.844 14.3105L6.65267 13.5614L5.40228 16.1813ZM19.9198 16.5522C19.7645 16.8776 19.4955 17.1329 19.1623 17.2709L16.0373 18.5653L18.1649 12.1748C18.1792 12.1319 18.2113 12.0974 18.253 12.0801L22.9906 10.1177L19.9198 16.5522ZM25.5735 11.2915C24.9185 11.5628 24.2363 11.7406 23.5377 11.8232L24.6045 9.58785C24.6297 9.53514 24.6483 9.48083 24.6611 9.42588L25.903 8.91146L26.6962 10.8265L25.5735 11.2915ZM30.2638 1.62088C30.8994 1.35759 31.5664 1.22876 32.2284 1.22876C33.052 1.22876 33.8674 1.4289 34.6049 1.81701L31.1942 3.22979C30.8809 3.3596 30.7321 3.71884 30.8619 4.0322C30.9598 4.26873 31.1885 4.41146 31.4295 4.41146C31.5078 4.41146 31.5874 4.3964 31.6643 4.36457L36.1326 2.5137C36.602 2.31935 37.1418 2.54301 37.3363 3.01235C37.4305 3.23965 37.4305 3.49004 37.3363 3.71738C37.2421 3.94472 37.0651 4.12179 36.8377 4.21595L26.9691 8.30364C26.6674 7.77386 26.0105 7.53744 25.4329 7.77664L23.6048 8.53389L23.6047 8.53392L17.783 10.9454C17.412 11.099 17.1264 11.4057 16.9995 11.7868L16.7499 12.5366L13.3721 13.9357C12.3943 14.3408 11.3625 14.5743 10.3055 14.6299L7.43165 14.7808L8.27818 13.0071C8.4162 12.7177 8.36275 12.3805 8.14212 12.148C7.92141 11.9155 7.58758 11.8446 7.29154 11.9673L4.37388 13.1758C4.0447 13.3122 3.79123 13.5844 3.67856 13.9226L3.4217 14.6941C2.89886 14.4891 2.42859 14.1529 2.06586 13.7081C1.98512 13.6091 1.99554 13.5051 2.00896 13.4519C2.02238 13.3987 2.06248 13.3022 2.18056 13.2533L30.2638 1.62088ZM12.5333 2.67919L15.6566 1.38064C15.9895 1.24222 16.3603 1.23195 16.7002 1.35182L22.6458 3.44687L17.9619 5.387L12.5333 2.67919ZM2.8875 5.98057C3.03954 5.9176 3.19929 5.88678 3.358 5.88678C3.6368 5.88678 3.91223 5.98196 4.13586 6.16514L8.14842 9.4519L7.47997 9.72877L4.43235 10.9911L1.22885 6.66757L2.8875 5.98057Z" fill="url(#paint0_linear_84_1583)"/><path d="M26.6408 6.27903C26.7387 6.51555 26.9674 6.65829 27.2083 6.65829C27.2867 6.65829 27.3663 6.64322 27.4431 6.6114C27.7565 6.48159 27.9053 6.12235 27.7755 5.80898L27.1879 4.39049C27.0582 4.07708 26.6988 3.92839 26.3855 4.05812C26.0721 4.18792 25.9233 4.54717 26.0532 4.86053L26.6408 6.27903Z" fill="url(#paint1_linear_84_1583)"/><path d="M11.8294 12.2481C12.1428 12.1183 12.2916 11.7591 12.1618 11.4457C12.032 11.1323 11.6727 10.9835 11.3593 11.1133C11.046 11.2431 10.8971 11.6024 11.027 11.9157C11.1568 12.2291 11.516 12.3779 11.8294 12.2481Z" fill="url(#paint2_linear_84_1583)"/><path d="M13.6735 11.4845C13.9869 11.3547 14.1357 10.9954 14.0059 10.682C13.8761 10.3687 13.5168 10.2198 13.2034 10.3496C12.8901 10.4794 12.7413 10.8387 12.8711 11.1521C13.0009 11.4654 13.3601 11.6143 13.6735 11.4845Z" fill="url(#paint3_linear_84_1583)"/><path d="M15.5176 10.7203C15.8309 10.5905 15.9797 10.2312 15.8499 9.91786C15.7201 9.60449 15.3609 9.45568 15.0475 9.58548C14.7341 9.71529 14.5853 10.0745 14.7151 10.3879C14.8449 10.7013 15.2042 10.8501 15.5176 10.7203Z" fill="url(#paint4_linear_84_1583)"/><path d="M17.3616 9.95662C17.675 9.82682 17.8238 9.46756 17.694 9.15419C17.5642 8.84082 17.2049 8.69201 16.8916 8.82181C16.5782 8.95161 16.4294 9.31088 16.5592 9.62425C16.689 9.93761 17.0482 10.0864 17.3616 9.95662Z" fill="url(#paint5_linear_84_1583)"/><path d="M19.2057 9.19246C19.519 9.06266 19.6678 8.7034 19.5381 8.39003C19.4082 8.07666 19.049 7.92785 18.7356 8.05765C18.4222 8.18745 18.2734 8.54672 18.4032 8.86009C18.533 9.17345 18.8923 9.32226 19.2057 9.19246Z" fill="url(#paint6_linear_84_1583)"/><path d="M21.0498 8.42879C21.3632 8.29899 21.512 7.93973 21.3822 7.62636C21.2524 7.31299 20.8931 7.16418 20.5797 7.29398C20.2664 7.42378 20.1175 7.78304 20.2474 8.09641C20.3772 8.40978 20.7364 8.5586 21.0498 8.42879Z" fill="url(#paint7_linear_84_1583)"/><path d="M22.8938 7.66512C23.2072 7.53532 23.356 7.17606 23.2262 6.86269C23.0964 6.54932 22.7371 6.40051 22.4238 6.53031C22.1104 6.66011 21.9616 7.01937 22.0914 7.33274C22.2212 7.64611 22.5805 7.79492 22.8938 7.66512Z" fill="url(#paint8_linear_84_1583)"/><path d="M24.7379 6.90096C25.0513 6.77116 25.2001 6.4119 25.0703 6.09853C24.9405 5.78516 24.5812 5.63635 24.2678 5.76615C23.9545 5.89595 23.8057 6.25521 23.9355 6.56858C24.0653 6.88195 24.4245 7.03076 24.7379 6.90096Z" fill="url(#paint9_linear_84_1583)"/><defs><linearGradient id="paint0_linear_84_1583" x1="0" y1="10" x2="38.6358" y2="10" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint1_linear_84_1583" x1="26.0062" y1="5.33476" x2="27.8224" y2="5.33476" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint2_linear_84_1583" x1="10.98" y1="11.6807" x2="12.2087" y2="11.6807" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint3_linear_84_1583" x1="12.8242" y1="10.917" x2="14.0528" y2="10.917" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint4_linear_84_1583" x1="14.6682" y1="10.1529" x2="15.8968" y2="10.1529" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint5_linear_84_1583" x1="16.5123" y1="9.38922" x2="17.7409" y2="9.38922" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint6_linear_84_1583" x1="18.3563" y1="8.62506" x2="19.585" y2="8.62506" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint7_linear_84_1583" x1="20.2004" y1="7.86139" x2="21.4291" y2="7.86139" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint8_linear_84_1583" x1="22.0445" y1="7.09772" x2="23.2731" y2="7.09772" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint9_linear_84_1583" x1="23.8885" y1="6.33356" x2="25.1172" y2="6.33356" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient></defs>
				</svg>
				 <h4 class>Travel Cities</h4>
					 <svg xmlns="http://www.w3.org/2000/svg" width="39" height="20" viewBox="0 0 39 20" fill="none"><path d="M3.26269 11.4756L1.71051 12.1186C1.26198 12.3044 0.936624 12.6809 0.817951 13.1517C0.699277 13.6224 0.80723 14.1082 1.114 14.4844C1.62539 15.1115 2.29239 15.5814 3.03352 15.8601L2.50269 17.4545C2.39497 17.7782 2.48673 18.1375 2.73644 18.3699C2.90092 18.5231 3.1154 18.6039 3.33273 18.6039C3.44533 18.6039 3.55868 18.5822 3.66619 18.5377L5.2965 17.8624C5.83057 17.6412 6.26179 17.232 6.51075 16.7104L6.82955 16.0424L10.3699 15.8564C11.5668 15.7935 12.735 15.5291 13.8421 15.0705L16.2364 14.0788L14.6859 18.7361C14.5658 19.097 14.6641 19.4821 14.9425 19.7413C15.125 19.9112 15.356 20 15.5925 20C15.7167 20 15.8424 19.9755 15.9633 19.9254L19.6324 18.4056C20.2463 18.1513 20.742 17.681 21.0283 17.0813L22.9285 13.0996C24.0022 13.0639 25.0499 12.8378 26.0436 12.4263L27.1662 11.9612C27.7919 11.7021 28.0901 10.9822 27.831 10.3564L27.449 9.43434L37.3077 5.35073C37.8382 5.131 38.2514 4.71789 38.471 4.18742C38.6908 3.65695 38.6907 3.0727 38.471 2.54226C38.0669 1.56656 37.0224 1.04603 36.0253 1.26486C34.2338 -0.0747746 31.8771 -0.376893 29.7938 0.486094L24.3447 2.74319L17.1084 0.193346C16.4816 -0.0275451 15.7986 -0.00857832 15.1851 0.246461L11.518 1.77111C11.1668 1.91715 10.9405 2.24397 10.9275 2.62405C10.9144 3.00417 11.1178 3.34576 11.4581 3.51549L16.4586 6.00972L9.43576 8.91866L4.91417 5.21493C4.21218 4.64 3.25544 4.49861 2.41746 4.84579L0.758802 5.53283C0.406979 5.67856 0.146842 5.97266 0.0451866 6.33966C-0.0564692 6.7067 0.0151997 7.09271 0.241976 7.3988L3.26269 11.4756ZM5.40228 16.1813C5.28421 16.4287 5.0797 16.6227 4.82646 16.7276L3.91336 17.1058L4.844 14.3105L6.65267 13.5614L5.40228 16.1813ZM19.9198 16.5522C19.7645 16.8776 19.4955 17.1329 19.1623 17.2709L16.0373 18.5653L18.1649 12.1748C18.1792 12.1319 18.2113 12.0974 18.253 12.0801L22.9906 10.1177L19.9198 16.5522ZM25.5735 11.2915C24.9185 11.5628 24.2363 11.7406 23.5377 11.8232L24.6045 9.58785C24.6297 9.53514 24.6483 9.48083 24.6611 9.42588L25.903 8.91146L26.6962 10.8265L25.5735 11.2915ZM30.2638 1.62088C30.8994 1.35759 31.5664 1.22876 32.2284 1.22876C33.052 1.22876 33.8674 1.4289 34.6049 1.81701L31.1942 3.22979C30.8809 3.3596 30.7321 3.71884 30.8619 4.0322C30.9598 4.26873 31.1885 4.41146 31.4295 4.41146C31.5078 4.41146 31.5874 4.3964 31.6643 4.36457L36.1326 2.5137C36.602 2.31935 37.1418 2.54301 37.3363 3.01235C37.4305 3.23965 37.4305 3.49004 37.3363 3.71738C37.2421 3.94472 37.0651 4.12179 36.8377 4.21595L26.9691 8.30364C26.6674 7.77386 26.0105 7.53744 25.4329 7.77664L23.6048 8.53389L23.6047 8.53392L17.783 10.9454C17.412 11.099 17.1264 11.4057 16.9995 11.7868L16.7499 12.5366L13.3721 13.9357C12.3943 14.3408 11.3625 14.5743 10.3055 14.6299L7.43165 14.7808L8.27818 13.0071C8.4162 12.7177 8.36275 12.3805 8.14212 12.148C7.92141 11.9155 7.58758 11.8446 7.29154 11.9673L4.37388 13.1758C4.0447 13.3122 3.79123 13.5844 3.67856 13.9226L3.4217 14.6941C2.89886 14.4891 2.42859 14.1529 2.06586 13.7081C1.98512 13.6091 1.99554 13.5051 2.00896 13.4519C2.02238 13.3987 2.06248 13.3022 2.18056 13.2533L30.2638 1.62088ZM12.5333 2.67919L15.6566 1.38064C15.9895 1.24222 16.3603 1.23195 16.7002 1.35182L22.6458 3.44687L17.9619 5.387L12.5333 2.67919ZM2.8875 5.98057C3.03954 5.9176 3.19929 5.88678 3.358 5.88678C3.6368 5.88678 3.91223 5.98196 4.13586 6.16514L8.14842 9.4519L7.47997 9.72877L4.43235 10.9911L1.22885 6.66757L2.8875 5.98057Z" fill="url(#paint0_linear_84_1583)"/><path d="M26.6408 6.27903C26.7387 6.51555 26.9674 6.65829 27.2083 6.65829C27.2867 6.65829 27.3663 6.64322 27.4431 6.6114C27.7565 6.48159 27.9053 6.12235 27.7755 5.80898L27.1879 4.39049C27.0582 4.07708 26.6988 3.92839 26.3855 4.05812C26.0721 4.18792 25.9233 4.54717 26.0532 4.86053L26.6408 6.27903Z" fill="url(#paint1_linear_84_1583)"/><path d="M11.8294 12.2481C12.1428 12.1183 12.2916 11.7591 12.1618 11.4457C12.032 11.1323 11.6727 10.9835 11.3593 11.1133C11.046 11.2431 10.8971 11.6024 11.027 11.9157C11.1568 12.2291 11.516 12.3779 11.8294 12.2481Z" fill="url(#paint2_linear_84_1583)"/><path d="M13.6735 11.4845C13.9869 11.3547 14.1357 10.9954 14.0059 10.682C13.8761 10.3687 13.5168 10.2198 13.2034 10.3496C12.8901 10.4794 12.7413 10.8387 12.8711 11.1521C13.0009 11.4654 13.3601 11.6143 13.6735 11.4845Z" fill="url(#paint3_linear_84_1583)"/><path d="M15.5176 10.7203C15.8309 10.5905 15.9797 10.2312 15.8499 9.91786C15.7201 9.60449 15.3609 9.45568 15.0475 9.58548C14.7341 9.71529 14.5853 10.0745 14.7151 10.3879C14.8449 10.7013 15.2042 10.8501 15.5176 10.7203Z" fill="url(#paint4_linear_84_1583)"/><path d="M17.3616 9.95662C17.675 9.82682 17.8238 9.46756 17.694 9.15419C17.5642 8.84082 17.2049 8.69201 16.8916 8.82181C16.5782 8.95161 16.4294 9.31088 16.5592 9.62425C16.689 9.93761 17.0482 10.0864 17.3616 9.95662Z" fill="url(#paint5_linear_84_1583)"/><path d="M19.2057 9.19246C19.519 9.06266 19.6678 8.7034 19.5381 8.39003C19.4082 8.07666 19.049 7.92785 18.7356 8.05765C18.4222 8.18745 18.2734 8.54672 18.4032 8.86009C18.533 9.17345 18.8923 9.32226 19.2057 9.19246Z" fill="url(#paint6_linear_84_1583)"/><path d="M21.0498 8.42879C21.3632 8.29899 21.512 7.93973 21.3822 7.62636C21.2524 7.31299 20.8931 7.16418 20.5797 7.29398C20.2664 7.42378 20.1175 7.78304 20.2474 8.09641C20.3772 8.40978 20.7364 8.5586 21.0498 8.42879Z" fill="url(#paint7_linear_84_1583)"/><path d="M22.8938 7.66512C23.2072 7.53532 23.356 7.17606 23.2262 6.86269C23.0964 6.54932 22.7371 6.40051 22.4238 6.53031C22.1104 6.66011 21.9616 7.01937 22.0914 7.33274C22.2212 7.64611 22.5805 7.79492 22.8938 7.66512Z" fill="url(#paint8_linear_84_1583)"/><path d="M24.7379 6.90096C25.0513 6.77116 25.2001 6.4119 25.0703 6.09853C24.9405 5.78516 24.5812 5.63635 24.2678 5.76615C23.9545 5.89595 23.8057 6.25521 23.9355 6.56858C24.0653 6.88195 24.4245 7.03076 24.7379 6.90096Z" fill="url(#paint9_linear_84_1583)"/><defs><linearGradient id="paint0_linear_84_1583" x1="0" y1="10" x2="38.6358" y2="10" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint1_linear_84_1583" x1="26.0062" y1="5.33476" x2="27.8224" y2="5.33476" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint2_linear_84_1583" x1="10.98" y1="11.6807" x2="12.2087" y2="11.6807" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint3_linear_84_1583" x1="12.8242" y1="10.917" x2="14.0528" y2="10.917" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint4_linear_84_1583" x1="14.6682" y1="10.1529" x2="15.8968" y2="10.1529" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint5_linear_84_1583" x1="16.5123" y1="9.38922" x2="17.7409" y2="9.38922" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint6_linear_84_1583" x1="18.3563" y1="8.62506" x2="19.585" y2="8.62506" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint7_linear_84_1583" x1="20.2004" y1="7.86139" x2="21.4291" y2="7.86139" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint8_linear_84_1583" x1="22.0445" y1="7.09772" x2="23.2731" y2="7.09772" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient><linearGradient id="paint9_linear_84_1583" x1="23.8885" y1="6.33356" x2="25.1172" y2="6.33356" gradientUnits="userSpaceOnUse"><stop stop-color="#4400E7"/><stop offset="1" stop-color="#7B00FE"/></linearGradient></defs>
				  </svg>
				</div>
				<div class="cities_title-sub-heading">
					<h3>Captured Your Fev Cities</h3>
				</div>
			</div>
			<div class="col-md-6">
				<div class="sub-para-places">
					<h2>Stay informed and inspired by subscribing to our newsletter for the latest news and insightful blog posts – your gateway to a world of updates.</h2>
				</div>
			</div>
		</div>
		<div class="gt-blog-content-4 mt-4">
			<div class="row">
				<?php foreach ($random_city as $cities) {?>
				<div class="col-md-4  wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms"
					style="visibility: visible; animation-duration: 1000ms; animation-delay: 400ms; animation-name: fadeInUp;">
					<div class="gt-blog-item-4 position-relative">
						<div class="blog-img">
							<img loading="lazy" decoding="async" width="100%" height="490"
								src="<?= base_url('uploads/' . $cities['city_image']) ?>"
								class="attachment-goyto-img-size-5 size-goyto-img-size-5 wp-post-image" alt="">
						</div>
						<div class="blog-text headline">
							<a class="read_more position-absolute"
								href="https://themexriver.com/wp/goyto/2024/03/18/hello-world/">Read more</a>
							<h3 class="blog_title"><a
									href=""><?=$cities['meta_title']?></a></h3>
							<div class="blog-meta">
								<a class="author-meta" href="#"><?=$cities['city']?></a>
								<a class="date-meta" href="#">September 5, 2024</a>
							</div>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
</section>


<?= view('section/uttrakhandMap'); ?>

<section class="ftco-section ftco-about img">
	<video autoplay muted loop class="section-video">
		<source src="<?= base_url() ?>/public/frontend/images/homebackground2.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>
	<div class="overlay"></div>
	<div class="container py-md-5">
		<div class="row py-md-5">
			<div class="col-md d-flex align-items-center justify-content-center">
			</div>
		</div>
	</div>
</section>


<section class="ftco-section testimony-section bg-bottom"
	style="background-image: url('<?= base_url() ?>/public/frontend/images/bg_1.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
				<span class="subheading">Testimonial</span>
				<h2 class="mb-4">Tourist Feedback</h2>
			</div>
		</div>
		<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel">
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<p class="star">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</p>
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img"
										style="background-image: url('<?= base_url() ?>/public/frontend/images/person_1.jpg)">
									</div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<p class="star">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</p>
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img"
										style="background-image: url('<?= base_url() ?>/public/frontend/images/person_2.jpg)">
									</div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<p class="star">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</p>
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img"
										style="background-image: url('<?= base_url() ?>/public/frontend/images/person_3.jpg)">
									</div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<p class="star">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</p>
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img"
										style="background-image: url('<?= base_url() ?>/public/frontend/images/person_1.jpg)">
									</div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<p class="star">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</p>
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img"
										style="background-image: url('<?= base_url() ?>/public/frontend/images/person_2.jpg)">
									</div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?= view('section/currentblog'); ?>


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