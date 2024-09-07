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

<section class="ftco-section services-section">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
				<div class="w-100">
					<span class="subheading">Welcome to Uttarakhand</span>
					<h2 class="mb-4">It's time to start your adventure</h2>
					<p>उत्तराखंड, जिसे देवभूमि के नाम से भी जाना जाता है, भारत का एक सुंदर राज्य है जो हिमालय की गोद में बसा हुआ है। यह राज्य अपनी प्राकृतिक सुंदरता, बर्फ से ढकी चोटियों, हरे-भरे वनस्पतियों और पवित्र नदियों के लिए प्रसिद्ध है। उत्तराखंड में कई महत्वपूर्ण तीर्थस्थल हैं, जिनमें बद्रीनाथ, केदारनाथ, गंगोत्री और यमुनोत्री शामिल हैं, जो चार धाम यात्रा के रूप में जाने जाते हैं।</p>
					<p>यहाँ का नैनीताल, मसूरी, और रानीखेत जैसे हिल स्टेशन पर्यटकों के बीच बेहद लोकप्रिय हैं। राज्य का प्रमुख नगर देहरादून है, जो उत्तराखंड की राजधानी भी है। ऋषिकेश और हरिद्वार योग और अध्यात्म के केंद्र के रूप में विश्व प्रसिद्ध हैं।</p>
					<p><a  class="btn btn-primary Searchbtn py-3 px-4">Search Destination</a></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
						<div class="services services-1 color-1 d-block img" style="background-image: url(<?= base_url() ?>/public/frontend/images/services-1.jpg);">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-paragliding"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Activities</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary</p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
						<div class="services services-1 color-2 d-block img" style="background-image: url(<?= base_url() ?>/public/frontend/images/services-2.jpg);">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Travel Arrangements</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary</p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
						<div class="services services-1 color-3 d-block img" style="background-image: url(<?= base_url() ?>/public/frontend/images/services-3.jpg);">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tour-guide"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Private Guide</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary</p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
						<div class="services services-1 color-4 d-block img" style="background-image: url(<?= base_url() ?>/public/frontend/images/services-4.jpg);">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-map"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Location Manager</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?= view('section/uttrakhandMap'); ?>
<?= view('section/topTravelPlaces'); ?>


<section class="ftco-section" style="padding-top:45px">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<span class="subheading">Destination</span>
				<h2 class="mb-4">Tour Destination</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(<?= base_url() ?>/public/frontend/images/destination-1.jpg);">
						<span class="price">$550/person</span>
					</a>
					<div class="text p-4">
						<span class="days">8 Days Tour</span>
						<h3><a href="#">Banaue Rice Terraces</a></h3>
						<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-mountains"></span>Near Mountain</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(<?= base_url() ?>/public/frontend/images/destination-2.jpg);">
						<span class="price">$550/person</span>
					</a>
					<div class="text p-4">
						<span class="days">10 Days Tour</span>
						<h3><a href="#">Banaue Rice Terraces</a></h3>
						<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(<?= base_url() ?>/public/frontend/images/destination-3.jpg);">
						<span class="price">$550/person</span>
					</a>
					<div class="text p-4">
						<span class="days">7 Days Tour</span>
						<h3><a href="#">Banaue Rice Terraces</a></h3>
						<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(<?= base_url() ?>/public/frontend/images/destination-4.jpg);">
						<span class="price">$550/person</span>
					</a>
					<div class="text p-4">
						<span class="days">8 Days Tour</span>
						<h3><a href="#">Banaue Rice Terraces</a></h3>
						<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url(<?= base_url() ?>/public/frontend/images/destination-5.jpg);">
						<span class="price">$550/person</span>
					</a>
					<div class="text p-4">
						<span class="days">10 Days Tour</span>
						<h3><a href="#">Banaue Rice Terraces</a></h3>
						<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="#" class="img" style="background-image: url('<?= base_url() ?>/public/frontend/images/destination-6.jpg);">
						<span class="price">$550/person</span>
					</a>
					<div class="text p-4">
						<span class="days">7 Days Tour</span>
						<h3><a href="#">Banaue Rice Terraces</a></h3>
						<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section class="ftco-section ftco-about img"style="background-image: url('<?= base_url() ?>/public/frontend/images/bg_4.jpg);">
			<div class="overlay"></div>
			<div class="container py-md-5">
				<div class="row py-md-5">
					<div class="col-md d-flex align-items-center justify-content-center">
						<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
							<span class="fa fa-play"></span>
						</a>
					</div>
				</div>
			</div>
		</section> -->
<section class="ftco-section ftco-about img">
	<video autoplay muted loop class="section-video">
		<source src="<?= base_url() ?>/public/frontend/images/homebackground2.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>
	<div class="overlay"></div>
	<div class="container py-md-5">
		<div class="row py-md-5">
			<div class="col-md d-flex align-items-center justify-content-center">
				<!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                    <span class="fa fa-play"></span>
                </a> -->
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-about ftco-no-pt img">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-12 about-intro">
				<div class="row">
					<div class="col-md-6 d-flex align-items-stretch">
						<div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url(<?= base_url() ?>/public/frontend/images/about-1.jpg);">
						</div>
					</div>
					<div class="col-md-6 pl-md-5 py-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate">
								<span class="subheading">About Us</span>
								<h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								<p><a href="#" class="btn btn-primary">Book Your Destination</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-about ftco-no-pt img">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-12 about-intro">
				<div class="row">
					<div class="col-md-6 pl-md-5 py-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate">
								<span class="subheading">About Us</span>
								<h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								<p><a href="#" class="btn btn-primary">Book Your Destination</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url(<?= base_url() ?>/public/frontend/images/about-1.jpg);">
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section testimony-section bg-bottom" style="background-image: url('<?= base_url() ?>/public/frontend/images/bg_1.jpg);">
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
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url('<?= base_url() ?>/public/frontend/images/person_1.jpg)"></div>
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
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url('<?= base_url() ?>/public/frontend/images/person_2.jpg)"></div>
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
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url('<?= base_url() ?>/public/frontend/images/person_3.jpg)"></div>
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
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url('<?= base_url() ?>/public/frontend/images/person_1.jpg)"></div>
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
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url('<?= base_url() ?>/public/frontend/images/person_2.jpg)"></div>
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