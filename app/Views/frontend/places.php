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
		<div class="gt-heading"></div>
		<div class="gt-blog-content-4">
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
									href="https://themexriver.com/wp/goyto/2024/03/18/hello-world/">Beach Days, Long
									Hikes, And</a></h3>
							<div class="blog-meta">
								<a class="author-meta" href="#">Emma Mark</a>
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