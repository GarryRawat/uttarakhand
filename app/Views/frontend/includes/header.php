<!DOCTYPE html>
<html lang="en">

<head>
	<title>Explore Uttarakhand</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?= base_url() ?>/public/frontend/css/animate.css">

	<link rel="stylesheet" href="<?= base_url() ?>/public/frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/public/frontend/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/public/frontend/css/magnific-popup.css">

	<link rel="stylesheet" href="<?= base_url() ?>/public/frontend/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?= base_url() ?>/public/frontend/css/jquery.timepicker.css">


	<link rel="stylesheet" href="<?= base_url() ?>/public/frontend/css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url() ?>/public/frontend/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
	
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">TRavel<span>Uttrakhand</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="<?= base_url('home') ?>" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="<?= base_url('about') ?>" class="nav-link">About</a></li>
					<li class="nav-item"><a href="<?= base_url('destination') ?>" class="nav-link">Destination</a></li>
					<li class="nav-item"><a href="<?= base_url('hotel') ?>" class="nav-link">Hotel</a></li>
					<li class="nav-item">
						<a href="<?= base_url('places') ?>" class="nav-link">Places</a>
						<div class="dropdown-menu">
							<div class="mega-menu">
								<ul class="first-ul">
									<li>
										<ul class="">
											<?php foreach ($cities as $city) { ?>
												<li class="mega-item" onmouseover="Getcity(<?= $city['id'] ?>)"><i class="bi bi-arrow-right"></i><a href="<?= base_url(). $city['city_name']?>" class="mx-4"><?= $city['city_name'] ?></a>

												</li>
											<?php } ?>
											<li>
										</ul>
									</li>
									<li>
										<ul class="menu2">

										</ul>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="nav-item"><a href="<?= base_url('blog') ?>" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="<?= base_url('contact') ?>" class="nav-link">Contact</a></li>
				</ul>

			</div>
		</div>
	</nav>



	<script>
		function mtlist() {
			// alert('calling');
			var submenu = document.querySelector('.menu2');
		}

		function Getcity(id) {

			$.ajax({
				url: '<?= base_url('getpages') ?>',
				method: 'POST',
				data: {
					id: id
				},
				success: function(response) {
					console.log(response);
					// return;
					let html = '';
					$.each(response.cityDetails, function(key, value) {
						html += `<li class="mega-item-inner"><a href="<?=base_url()?>${value.city_name}/${value.slug}">${value.place}</a></li>`;
					});

					// console.log(html);
					$('.menu2').html(html);
				},
				error: function(xhr, status, error) {
					// Handle errors here
					console.error(error);
				}
			});
		}
	</script>