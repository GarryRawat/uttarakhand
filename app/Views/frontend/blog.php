<!-- END nav -->

<div class="hero-wrap js-fullheight">
	<video autoplay muted loop class="hero-video">
		<source src="<?= base_url() ?>/public/frontend/images/homebackground2.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>

	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
			<div class="col-md-7 ftco-animate">
				<span class="subheading"></span>
				<h1 class="mb-4">Discover The new Blogs to our Blogs</h1>
				<p class="caps"></p>
			</div>
			<!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
					<span class="fa fa-play"></span>
				</a> -->
		</div>
	</div>
</div>

<section class="ftco-section">
  <div class="container">
    <div class="row d-flex">
      <?php foreach($allblogs as $blogs) {?>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
          <a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url('uploads/' . $blogs['blog_image']) ?>');">
          </a>
          <div class="text">
            <div class="d-flex align-items-center mb-4 topp">
              <div class="one">
                <span class="day">11</span>
              </div>
              <div class="two">
                <span class="yr">2020</span>
                <span class="mos">September</span>
              </div>
            </div>
            <h3 class="heading"><a href="#"><?= substr($blogs['blog_title'], 0, 32)?>...</a></h3>
            <p><?=substr($blogs['short_description'], 0, 93)?>...</p>
            <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
        </div>
      </div>
      <?php }?>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
          <a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url() ?>/public/frontend/images/image_2.jpg');">
          </a>
          <div class="text">
            <div class="d-flex align-items-center mb-4 topp">
              <div class="one">
                <span class="day">11</span>
              </div>
              <div class="two">
                <span class="yr">2020</span>
                <span class="mos">September</span>
              </div>
            </div>
            <h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url() ?>/public/frontend/images/image_3.jpg');">
          </a>
          <div class="text">
            <div class="d-flex align-items-center mb-4 topp">
              <div class="one">
                <span class="day">11</span>
              </div>
              <div class="two">
                <span class="yr">2020</span>
                <span class="mos">September</span>
              </div>
            </div>
            <h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url() ?>/public/frontend/images/image_4.jpg');">
          </a>
          <div class="text">
            <div class="d-flex align-items-center mb-4 topp">
              <div class="one">
                <span class="day">11</span>
              </div>
              <div class="two">
                <span class="yr">2020</span>
                <span class="mos">September</span>
              </div>
            </div>
            <h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url() ?>/public/frontend/images/image_5.jpg');">
          </a>
          <div class="text">
            <div class="d-flex align-items-center mb-4 topp">
              <div class="one">
                <span class="day">11</span>
              </div>
              <div class="two">
                <span class="yr">2020</span>
                <span class="mos">September</span>
              </div>
            </div>
            <h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20" style="background-image: url('<?= base_url() ?>/public/frontend/images/image_6.jpg');">
          </a>
          <div class="text">
            <div class="d-flex align-items-center mb-4 topp">
              <div class="one">
                <span class="day">11</span>
              </div>
              <div class="two">
                <span class="yr">2020</span>
                <span class="mos">September</span>
              </div>
            </div>
            <h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
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