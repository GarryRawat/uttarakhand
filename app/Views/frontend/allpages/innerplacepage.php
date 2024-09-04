<div class="hero-wrap js-fullheight">
	<video autoplay muted loop class="hero-video">
		<source src="<?= base_url() ?>/public/frontend/images/background5.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>

	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
			<div class="col-md-7 ftco-animate">
				<span class="subheading">Welcome to <?= $slugdetails['place']; ?> </span>
				<h1 class="mb-4">Explore <?= $slugdetails['place']; ?> Cultural Heritage</h1>
				<p class="caps">Embark on a journey of discovery and adventure to <?= $slugdetails['place']; ?>
					picturesque destinations</p>
			</div>
			<!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
					<span class="fa fa-play"></span>
				</a> -->
		</div>
	</div>
</div>



<section class="ftco-section services-section">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
				<div class="w-100">
					<span class="subheading">Welcome to <?= $slugdetails['place']; ?></span>
					<!-- <h2 class="mb-4">It's time to start your adventure</h2> -->
					<h2 class="mb-4"><?= $slugdetails['title']; ?></h2>
					<p><?= $slugdetails['short_description']; ?></p>
					<p>यहाँ का नैनीताल, मसूरी, और रानीखेत जैसे हिल स्टेशन पर्यटकों के बीच बेहद लोकप्रिय हैं। राज्य का
						प्रमुख नगर देहरादून है, जो उत्तराखंड की राजधानी भी है। ऋषिकेश और हरिद्वार योग और अध्यात्म के
						केंद्र के रूप में विश्व प्रसिद्ध हैं।</p>
					<p><a class="btn btn-primary Searchbtn py-3 px-4">Search Destination</a></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate"> -->
						<div class="services services-1 color-1 d-block img"
							style="background-image: url(<?= base_url() ?>/public/frontend/images/services-1.jpg);">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-paragliding"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Activities</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary</p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
						<div class="services services-1 color-2 d-block img"
							style="background-image: url(<?= base_url() ?>/public/frontend/images/services-2.jpg);">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-route"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Travel Arrangements</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary</p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
						<div class="services services-1 color-3 d-block img"
							style="background-image: url(<?= base_url() ?>/public/frontend/images/services-3.jpg);">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-tour-guide"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Private Guide</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary</p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
						<div class="services services-1 color-4 d-block img"
							style="background-image: url(<?= base_url() ?>/public/frontend/images/services-4.jpg);">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-map"></span></div>
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
<section class="fico-section rounded-cards">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<span class="subheading">Destination</span>
				<h2 class="mb-4">Best Places In <?= $slugdetails['place']; ?></h2>
			</div>
		</div>
		<div class="row">
			<?php foreach ($images as $image) { ?>
				<div class="col-lg-4 mt-4">
					<div class="imagesection">
						<a href="<?= base_url() ?>uploads/<?= $image['image'] ?>" class="">
							<img width="" height="" src="<?= base_url() ?>uploads/<?= $image['image'] ?>"
								class="glightbox page_img" data-effect="zoomOut" data-zoomable="true"
								data-draggable="true" />
						</a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

<section class="fico-section rounded-cards mt-5">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<span class="subheading">Foods</span>
				<h2 class="mb-4">Best Food in <?= $slugdetails['place']; ?> </h2>
			</div>
		</div>
		<div class="row">
			<?php foreach ($allfoodimg as $topFood => $images): ?>
				<?php if (!empty($images)): ?>
					<div class="col-lg-4" onclick="ShowImage(<?= htmlspecialchars(json_encode($images)) ?>)">
						<div class="food-cards">
							<div class="food-card">
								<img class="food-card__image" class="glightbox2"
									src="<?= base_url('uploads/') . htmlspecialchars($images[0]['food_images']); ?>"
									alt="<?= htmlspecialchars($images[0]['top_foods']); ?>"  data-glightbox="title: My title; description: .custom-desc1">
								<div class="food-card__content">
									<div class="food-card__header">
										<h4 class="food-card__title"><?= htmlspecialchars($images[0]['top_foods']); ?></h4>
										<span class="food-card__price">$10.50</span>
									</div>
									<p class="food-card__text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</p>

									<div class="cllick-btn-phots">
										<button class="btn btn-success">clickMe</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<section class="ftco-section ftco-about mt-5 img">
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
						<div class="img d-flex w-100 align-items-center justify-content-center">
							<img src="<?= base_url('/public/frontend/images/about-1.jpg') ?>" height="640px;">
						</div>
					</div>
					<div class="col-md-6 pl-md-5 py-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate">
								<span class="subheading">About Us</span>
								<h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and
									Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
									at the coast of the Semantics, a large language ocean.</p>
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
								<p>Far far away, behind the word mountains, far from the countries Vokalia and
									Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
									at the coast of the Semantics, a large language ocean.</p>
								<p><a href="#" class="btn btn-primary">Book Your Destination</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<div class="img d-flex w-100 align-items-center justify-content-center"
							style="background-image:url(<?= base_url() ?>/public/frontend/images/about-1.jpg);">
						</div>
					</div>

				</div>
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
					<p class="mb-0"><a href="#" class="btn btn-primary Searchbtn px-4 py-3">Ask For A Quote</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	const lightbox = GLightbox({
		touchNavigation: true,

		loop: true,
		autoplayVideos: true,
		openEffect: 'zoom',
		closeEffect: 'fade',
		cssEfects: {
			fade: {
				in: 'fadeIn',
				out: 'fadeOut'
			},
			zoom: {
				in: 'zoomIn',
				out: 'zoomOut'
			}
		}
	});
	const glightbox = GLightbox({
	});

	function ShowImage(images) {
		let imageArr = [];
		$.each(images, function (key, value) {

			imageArr.push({
				href: '<?php echo base_url("uploads/") ?>' + value.food_images
			});
		});
		console.log(images);
		console.log(imageArr);
		const myGallery = GLightbox({
			elements: imageArr,
			autoplayVideos: true,
			touchNavigation: true,
			loop: true
		});
		myGallery.open();
	}
</script>