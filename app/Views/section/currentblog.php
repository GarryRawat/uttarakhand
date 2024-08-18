<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<span class="subheading">Our Blog</span>
				<h2 class="mb-4">Recent Post</h2>
			</div>
		</div>
		<div class="row d-flex">
		<?php foreach ($recentBlogs as $blogs) {?>
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
					<a href="<?= base_url('/blogdetails/' . $blogs['slug']); ?>" class="block-20" style="background-image: url('<?= base_url('uploads/' . $blogs['blog_image']) ?>');">
					</a>
					<div class="text">
              <?php

              $blogDate = strtotime($blogs['created_at']);
              $blogYear = date('Y', $blogDate);
              $blogMonth = date('F', $blogDate);
              ?>
              <div class="d-flex align-items-center mb-4 topp">
                <div class="one">
                  <span class="day"><?= date('d', $blogDate) ?></span>
                </div>
                <div class="two">
                  <span class="yr"><?= $blogYear ?></span>
                  <span class="mos"><?= $blogMonth ?></span>
                </div>
              </div>
              <h3 class="heading"><a href="<?= base_url('/blogdetails/' . $blogs['slug']); ?>"><?= substr($blogs['blog_title'], 0, 32) ?>...</a></h3>
              <p><?= substr($blogs['short_description'], 0, 93) ?>...</p>
              <p><a href="<?= base_url('/blogdetails/' . $blogs['slug']); ?>" class="btn btn-primary">Read more</a></p>
            </div>
				</div>
			</div>
			<?php
		}
			?>
			
		</div>
	</div>
</section>
