<section class="hero ftco-section services-section">
  <div class="hero__item">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 p-0">
          <div id="blogCarousel" class="carousel-fade" data-ride="carousel" data-interval="2500">
            <div class="carousel-inner">
              <?php $active = 'active'; ?>
              <?php foreach ($random_img as $randomblogs) {
                   $date = new DateTime($randomblogs['created_at']);
                   $day = $date->format('d');
                   $month = $date->format('M'); 
                
                ?>
                <div class="carousel-item <?= $active ?>">
                  <div class="hero__inside__item hero__inside__item--wide set-bg" style="background-image: url(<?= base_url('uploads/' . $randomblogs['blog_image']) ?>);">
                    <div class="hero__inside__item__text">
                      <div class="hero__inside__item--meta">
                        <span><?= $day ?></span>
                        <p><?= $month ?></p>
                      </div>
                      <div class="hero__inside__item--text">
                        <ul class="label">
                          <li>Vegan</li>
                          <li>Desserts</li>
                        </ul>
                        <h4><a href="<?= base_url('/blogdetails/' . $randomblogs['slug']); ?>"><?= $randomblogs['blog_title']?></a></h4>
                        <ul class="widget ms-2  ">
                          <li>by <span><?= $randomblogs['author']?></span></li>
                          <li>3 min read</li>
                          <li>20 Comment</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <?php $active = ''; ?>
              <?php } ?>
            </div>


          </div>
        </div>



        <!-- start endCarousel -->
        <div class="col-lg-3 col-md-6 p-0">
          <div id="blogCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
              <?php $active = 'active'; ?>
              <?php foreach ($allblogs as $randomblogs) {
                
                $date = new DateTime($randomblogs['created_at']);
                $day = $date->format('d');
                $month = $date->format('M'); 
                ?>
                <div class="carousel-item <?= $active ?>">
                  <div class="hero__inside__item hero__inside__item--small set-bg" style="background-image: url(<?= base_url('uploads/' . $randomblogs['blog_image']) ?>);">
                    <div class="hero__inside__item__text">
                      <div class="hero__inside__item--meta">
                        <span><?= $day?></span>
                        <p><?= $month?></p>
                      </div>
                      <div class="hero__inside__item--text">
                        <ul class="label">
                          <li>Vegan</li>
                          <li>Desserts</li>
                        </ul>
                        <h5><a href="<?= base_url('/blogdetails/' . $randomblogs['slug']); ?>"><?= $randomblogs['blog_title']?></a></h5>
                      </div>
                    </div>
                  </div>
                </div>
                <?php $active = ''; ?>
              <?php } ?>
            </div>

          </div>
          <div id="blogCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000">
            <div class="carousel-inner">
              <?php $active = 'active'; ?>
              <?php foreach ($random_img as $randomblogs) {
                 $date = new DateTime($randomblogs['created_at']);
                 $day = $date->format('d');
                 $month = $date->format('M'); 
                
                ?>
                <div class="carousel-item <?= $active ?>">
                  <div class="hero__inside__item hero__inside__item--small set-bg" style="background-image: url(<?= base_url('uploads/' . $randomblogs['blog_image']) ?>);">
                    <div class="hero__inside__item__text">
                      <div class="hero__inside__item--meta">
                        <span><?= $day?></span>
                        <p><?= $month?></p>
                      </div>
                      <div class="hero__inside__item--text">
                        <ul class="label">
                          <li>Vegan</li>
                          <li>Desserts</li>
                        </ul>
                        <h5><a href="<?= base_url('/blogdetails/' . $randomblogs['slug']); ?>"><?= $randomblogs['blog_title']?></a></h5>
                      </div>
                    </div>
                  </div>
                </div>
                <?php $active = ''; ?>
              <?php } ?>
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-md-6 p-0">
          <div id="blogCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
            <div class="carousel-inner">
              <?php $active = 'active'; ?>
              <?php foreach ($random_img as $randomblogs) {
                 $date = new DateTime($randomblogs['created_at']);
                 $day = $date->format('d');
                 $month = $date->format('M'); 
                
                ?>
                <div class="carousel-item <?= $active ?>">
                  <div class="hero__inside__item hero__inside__item--wide set-bg" style="background-image: url(<?= base_url('uploads/' . $randomblogs['blog_image']) ?>);">
                    <div class="hero__inside__item__text">
                      <div class="hero__inside__item--meta">
                        <span><?= $day?></span>
                        <p><?= $month?></p>
                      </div>
                      <div class="hero__inside__item--text3">
                        <ul class="label">
                          <li>Vegan</li>
                          <li>Desserts</li>
                        </ul>
                        <h4><a href="<?= base_url('/blogdetails/' . $randomblogs['slug']); ?>"><?= $randomblogs['blog_title']?></a></h4>
                        <ul class="widget5">
                          <li>by <span>Admin</span></li>
                          <li>3 min read</li>
                          <li>20 Comment</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <?php $active = ''; ?>
              <?php } ?>
            </div>

            <!-- Controls (Optional) -->



          </div>
        </div>

      </div>
    </div>
  </div>





</section>

<!-- END nav -->
<section class="blog-section">
  <h2 class="text-center">Explore Our Adventures</h2>
  <div class="container mt-5">
    <div class="row d-flex">
      <?php foreach ($limitblog as $blogs) { ?>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <a href="<?= base_url('/blogdetails/' . $blogs['slug']); ?>" class="block-20"
              style="background-image: url('<?= base_url('uploads/' . $blogs['blog_image']) ?>');">
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
              <h3 class="heading"><a
                  href="<?= base_url('/blogdetails/' . $blogs['slug']); ?>"><?= substr($blogs['blog_title'], 0, 32) ?>...</a>
              </h3>
              <p><?= substr($blogs['short_description'], 0, 93) ?>...</p>
              <p><a href="<?= base_url('/blogdetails/' . $blogs['slug']); ?>" class="btn btn-primary">Read more</a></p>
            </div>
          </div>
        </div>
      <?php } ?>
     
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul class="">
            <?php if ($currentPage > 1): ?>
              <li><a href="?page=<?= $currentPage - 1 ?>">&lt;</a></li>
            <?php else: ?>
              <li class="disabled"><span>&lt;</span></li>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
              <?php if ($i == $currentPage): ?>
                <li class="active"><span><?= $i ?></span></li>
              <?php else: ?>
                <li><a href="?page=<?= $i ?>"><?= $i ?></a></li>
              <?php endif; ?>
            <?php endfor; ?>

            <?php if ($currentPage < $totalPages): ?>
              <li><a href="?page=<?= $currentPage + 1 ?>">&gt;</a></li>
            <?php else: ?>
              <li class="disabled"><span>&gt;</span></li>
            <?php endif; ?>
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