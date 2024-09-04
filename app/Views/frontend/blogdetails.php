<div class="hero-wrap5 js-fullheight">
	<div class="blog-banner">
		<img src=<?= base_url('uploads/' . $blogsbyslug['blog_image']) ?> class="blog-banner" alt="blog_banner" />
	</div>

	<div class="overlay2">
		<div class="container">
			<div class="row no-gutters slider-text2 js-fullheight align-items-center" data-scrollax-parent="true">
				<div class="col-md-7 ftco-animate">
					<span class="subheading2"></span>
					<h1 class="mb-4"></h1>
					<p class="caps"></p>
				</div>
				<!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
					<span class="fa fa-play"></span>
				</a> -->
			</div>
		</div>
	</div>
</div>

<section class="blog-banner-section">
	<div class="container">
		<div class="col-12 blog-column mt-4
		">
			<h3 class="text-center">Stories by Uttarakhand & and her City</h3>
			<div class="blog-detail-heading">
				<h2 class="mt-2"><?= $blogsbyslug['blog_title'] ?></h2>
				<div class="py-2">
					<?php

					$blogDate = strtotime($blogsbyslug['created_at']);
					$formattedDate = date('d M Y', $blogDate);
					?>
					<div class="d-flex justify-content-center">
						<div class="date">
							<h4><?= $formattedDate ?></h4>
						</div>&emsp;
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
							<li class="ftco-animate fadeInUp ftco-animated"><a href=""><span
										class="fa fa-twitter"></span></a></li>
							<li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span
										class="fa fa-facebook"></span></a></li>
							<li class="ftco-animate fadeInUp ftco-animated"><a
									href="https://www.instagram.com/garryrt_/"><span class="fa fa-instagram"></span></a>
							</li>

						</ul>
					</div>
					<div class="views-icon">
						<span><i class="fa fa-eye fa-lg"></i></span>&emsp13;<span
							class="m-r-0"><?= $blogsbyslug['views'] ?></span>
						&emsp;&emsp;<span class="fa fa-comment fa-lg"> <?php $cmtcount = getcommencount($id);
						if (isset($cmtcount)) {
							echo $cmtcount;
						} else {
							echo 0;
						} ?></span>
						&emsp;&emsp;&emsp;
						<div class='control-group'>
							<input class='red-heart-checkbox' id='red-check2-<?= $blogsbyslug['id'] ?>' type='checkbox'
								<?php if (isset($is_blog_liked) && $is_blog_liked == 1): ?>checked<?php endif; ?>>
							<label for='red-check2-<?= $blogsbyslug['id'] ?>'>
								<?= $likes_count ?>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="blogConetentDetails">
					<div class="short-description">
						<p><?= $blogsbyslug['short_description'] ?></p>
					</div>

					<div class="long-description">
						<p><?= $blogsbyslug['long_description'] ?></p>
					</div>
				</div>
			</div>
		</div>

		<!-- commnet section blog -->

		<div class="container mt-4">
			<div class="row">
				<div class="col-md-6">
					<h4 class="text-center">Leave a comment</h4>
					<form action="#" method="POST" id="myForm" enctype="multipart/form-data"
						class="bg-light contact-form">
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="Your Name" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="email" placeholder="Your Email">
						</div>

						<div class="form-group">
							<textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"
								required></textarea>
						</div>
						<input type="hidden" name="act" value="user_comment">
						<div class="form-group">
							<input type="submit" value="comment" class="btn btn-primary comment py-3 px-5">
							<input type="hidden" name="act" value="comment">
							<input type="hidden" name="blog_id" value="<?= $blogsbyslug['id'] ?>">
						</div>
					</form>

				</div>

				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12 mt-5">
							<div class="card text-body" id="comment-box">
								<?php if (!empty($all_comment)) { ?>
									<div class="headibf-and-para">
										<h4 class="mb-0">Recent comments</h4>
										<p class="fw-light">Latest Comments section by users</p>
									</div>
									<hr>
									<div id="comment-carousel " class="owl-carousel owl-theme">
										<?php
										foreach ($all_comment as $comment) {
											?>
											<div class="item commentbox-card-body">
												<div class="comment-boxex-cmt-img">
													<img class="rounded-circle shadow-1-strong me-3"
														src="<?= htmlspecialchars(base_url() . '/public/frontend/images/verticalshotriver.jpg', ENT_QUOTES, 'UTF-8') ?>"
														alt="avatar" width="70" height="70" />
													<div class="comment-date-time">
														<h6 class="fw-bold mb-1">
															<?= htmlspecialchars($comment['name'], ENT_QUOTES, 'UTF-8') ?>
														</h6>
														<div class="d-flex align-items-center mb-3">
															<p class="mb-0 comment-dateandtime">
																<?= htmlspecialchars($comment['created_at'], ENT_QUOTES, 'UTF-8') ?>
																<span class="badge bg-primary">Pending</span>
															</p>
															<a href="#!" class="link-muted"><i
																	class="fas fa-pencil-alt ms-2"></i></a>
															<a href="#!" class="link-muted"><i
																	class="fas fa-redo-alt ms-2"></i></a>
															<a href="#!" class="link-muted"><i
																	class="fas fa-heart ms-2"></i></a>
														</div>
														<p class="comment-para mb-0">
															<?= htmlspecialchars($comment['comment'], ENT_QUOTES, 'UTF-8') ?>
														</p>
													</div>
												</div>
											</div>
										<?php } ?>

									</div>
								</div>
							<?php } else {
									echo '<div class="p-2"><h4>No Comments this POST</h4></div>';
								} ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?= view('section/currentblog'); ?>


<script>
	$(document).ready(function () {
		$(".red-heart-checkbox").on("change", function (event) {
			event.preventDefault();
			let checkboxId = $(this).attr('id');
			let blog_id = checkboxId.split('-').pop();
			let like = $(this).is(':checked') ? 1 : 0;
			
			let userlikes = {
				blog_id: blog_id,
				like: like
			};

			$.ajax({
				url: '<?= base_url('adduserlike') ?>',
				type: 'POST',
				data: userlikes,
				dataType: 'JSON',
				success: function (res) {
					if (res.status == 'success') {
						new Notify({
							title: 'Notify Title',
							text: res.message,
							type: 'success',
							autoclose: true,
							autotimeout: 3000
						})
						$('#myForm')[0].reset();
					
					} else {
						new Notify({
							title: 'Notify Title',
							text: res.message,
							type: 'error',
							autoclose: true,
							autotimeout: 3000
						})
					}
				},
			})
		})
		$('#myForm').submit(function (event) {
			event.preventDefault();
			var form = $(this).closest('form');
			var formData = form.serialize();
			$.ajax({
				url: '<?= base_url('addusercommnets') ?>',
				type: 'POST',
				data: formData,
				dataType: 'JSON',
				success: function (res) {
					if (res.status == 'success') {
						new Notify({
							title: 'Notify Title',
							text: res.message,
							type: 'success',
							autoclose: true,
							autotimeout: 3000
						})
						$('#myForm')[0].reset();
						setTimeout(function() {
							window.location.reload()
                     }, 3000);
					
					} else {
						new Notify({
							title: 'Notify Title',
							text: res.message,
							type: 'error',
							autoclose: true,
							autotimeout: 3000
						})
					}
				},
				error: function (err) {
					console.log(err);
				}
			})
		});

	})

	$(document).ready(function () {
		$(".owl-carousel").owlCarousel({

			loop: false,
			margin: 10,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplayHoverPause: true,

			dots: false,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 1
				},
				1000: {
					items: 1
				}
			}
		});
	});
</script>


<!-- <section class="ftco-section services-section">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
				<div class="w-100">
					<span class="subheading">Welcome to Uttarakhand</span>
					<h2 class="mb-4">It's time to start your adventure</h2>
					<p>उत्तराखंड, जिसे देवभूमि के नाम से भी जाना जाता है, भारत का एक सुंदर राज्य है जो हिमालय की गोद में बसा हुआ है। यह राज्य अपनी प्राकृतिक सुंदरता, बर्फ से ढकी चोटियों, हरे-भरे वनस्पतियों और पवित्र नदियों के लिए प्रसिद्ध है। उत्तराखंड में कई महत्वपूर्ण तीर्थस्थल हैं, जिनमें बद्रीनाथ, केदारनाथ, गंगोत्री और यमुनोत्री शामिल हैं, जो चार धाम यात्रा के रूप में जाने जाते हैं।</p>
					<p>यहाँ का नैनीताल, मसूरी, और रानीखेत जैसे हिल स्टेशन पर्यटकों के बीच बेहद लोकप्रिय हैं। राज्य का प्रमुख नगर देहरादून है, जो उत्तराखंड की राजधानी भी है। ऋषिकेश और हरिद्वार योग और अध्यात्म के केंद्र के रूप में विश्व प्रसिद्ध हैं।</p>
					<p><a href="#" class="btn btn-primary py-3 px-4">Search Destination</a></p>
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
</section> -->