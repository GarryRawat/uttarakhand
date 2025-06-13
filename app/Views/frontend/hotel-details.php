

<section class="hero ftco-section services-section">
  <div class="hero__item">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 p-0">
         <?php
                $image_url = base_url('uploads/' . $hotalDetails['image']);
                $fallback_url = "https://images.unsplash.com/photo-1530629013299-6cb10d168419?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=335&h=200&q=80";
                $final_image = !empty($hotalDetails['image']) ? $image_url : $fallback_url;
              ?>
              <picture>
                <source media="(max-width: 320px)" srcset="<?= $final_image ?>">
                <source media="(min-width: 538px)" srcset="<?= $final_image ?>">
                <img src="<?= $final_image ?>" alt="hotel image" style="width: 100%;height: 445px;object-fit: cover;">
              </picture>
        </div>



        <!-- start endCarousel -->
     

      </div>
    </div>
  </div>





</section>
<!-- END nav -->
<section class="blog-section">
  <h2 class="text-center">Book Hotel</h2>
  <div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7 product-details rd-page">
					<div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 500.922px;"><div class="bxslider" style="width: auto; position: relative;">
						<div class="slider-content" aria-hidden="true" style="float: none; list-style: none; position: absolute; width: 776px; z-index: 0; display: none;">
							<figure class="image-box"><a href="<?= $final_image ?>" class="lightbox-image" data-fancybox="gallery"><img src="<?= $final_image ?>" alt=""></a></figure>
							<div class="slider-pager">
								<ul class="thumb-box">
									<li class="mb-0"><a class="" data-slide-index="0" href="#"><figure><img src="images/resource/room-1.jpg" alt=""></figure></a></li>
									<li class="mb-0"><a data-slide-index="1" href="#" class=""><figure><img src="images/resource/room-2.jpg" alt=""></figure></a></li>
									<li class="mb-0"><a data-slide-index="2" href="#" class=""><figure><img src="images/resource/room-4.jpg" alt=""></figure></a></li>
									<li class="mb-0"><a data-slide-index="3" href="#" class="active"><figure><img src="images/resource/room-2.jpg" alt=""></figure></a></li>
								</ul>
							</div>
						</div>
						<div class="slider-content" aria-hidden="true" style="float: none; list-style: none; position: absolute; width: 776px; z-index: 0; display: none;">
							<figure class="image-box"><a href="<?= $final_image ?>" class="lightbox-image" data-fancybox="gallery"><img src="<?= $final_image ?>" alt=""></a></figure>
							<div class="slider-pager">
								<ul class="thumb-box">
									<li class="mb-0"><a class="" data-slide-index="0" href="#"><figure><img src="<?= $final_image ?>" alt=""></figure></a></li>
									<li class="mb-0"><a data-slide-index="1" href="#" class=""><figure><img src="<?= $final_image ?>" alt=""></figure></a></li>
									<li class="mb-0"><a data-slide-index="2" href="#" class=""><figure><img src="<?= $final_image ?>" alt=""></figure></a></li>
									<li class="mb-0"><a data-slide-index="3" href="#" class="active"><figure><img src="<?= $final_image ?>" alt=""></figure></a></li>
								</ul>
							</div>
						</div>
						<div class="slider-content" aria-hidden="true" style="float: none; list-style: none; position: absolute; width: 776px; z-index: 0; display: none;">
							<figure class="image-box"><a href="<?= $final_image ?>" class="lightbox-image" data-fancybox="gallery"><img src="<?= $final_image ?>" alt=""></a></figure>
							<div class="slider-pager">
								<ul class="thumb-box">
									<li class="mb-0"><a class="" data-slide-index="0" href="#"><figure><img src="<?= $final_image ?>" alt=""></figure></a></li>
									<li class="mb-0"><a data-slide-index="1" href="#" class=""><figure><img src="<?= $final_image ?>" alt=""></figure></a></li>
									<li class="mb-0"><a data-slide-index="2" href="#" class=""><figure><img src="<?= $final_image ?>" alt=""></figure></a></li>
									<li class="mb-0"><a data-slide-index="3" href="#" class="active"><figure><img src="<?= $final_image ?>" alt=""></figure></a></li>
								</ul>
							</div>
						</div>
						<div class="slider-content" aria-hidden="false" style="float: none; list-style: none; position: absolute; width: 776px; z-index: 50;">
							<figure class="image-box"><a href="<?= $final_image ?>" class="lightbox-image" data-fancybox="gallery"><img src="<?= $final_image ?>" alt=""></a></figure>
							<div class="slider-pager">
								<ul class="thumb-box">
									<li class="mb-0"><a class="" data-slide-index="0" href="#"><figure><img src="<?= $final_image ?>" alt=""></figure></a></li>
									<li class="mb-0"><a data-slide-index="1" href="#" class=""><figure><img src="<?= $final_image ?>" alt=""></figure></a></li>
									<li class="mb-0"><a data-slide-index="2" href="#" class=""><figure><img src="<?= $final_image ?>" alt=""></figure></a></li>
									<li class="mb-0"><a data-slide-index="3" href="#" class="active"><figure><img src="<?= $final_image ?>" alt=""></figure></a></li>
								</ul>
							</div>
						</div>
					</div></div><div class="bx-controls"></div></div>
					  <div class="room-details__left">
              <div class="wrapper">
                <h3>Description of Room</h3>
                <p class="text">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>
                <div class="row justify-content-center">
                  <div class="col-xl-12">
                    <div class="room-details__content-right mb-40 mt-20">
                      <div class="room-details__details-box">
                        <div class="row">
                          <div class="col-6 col-md-3">
                            <p class="text mb-0">Room Size</p>
                            <h6>600Sq</h6>
                          </div>
                          <div class="col-6 col-md-3">
                            <p class="text mb-0">Rooms Bed</p>
                            <h6>2 Single Bed</h6>
                          </div>
                          <div class="col-6 col-md-3">
                            <p class="text mb-0">Occupancy</p>
                            <h6>Three Persons</h6>
                          </div>
                          <div class="col-6 col-md-3">
                            <p class="text mb-0">View</p>
                            <h6>Sea View</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="text">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>
              </div>
              <div class="mt-40">
                <h4>Room Facilities</h4>
                <div class="row room-facility-list mb-40">
                  <div class="col-sm-6 col-xl-4">
                    <div class="list-one d-flex align-items-center me-sm-4 mb-3">
                      <div class="icon text-theme-color1 mr-10 flex-shrink-0"><i class="far fa-air-conditioner"></i></div>
                      <h6 class="title m-0">Air Conditionar</h6>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="list-one d-flex align-items-center me-sm-4 mb-3">
                      <div class="icon text-theme-color1 mr-10 flex-shrink-0"><i class="fas fa-swimming-pool"></i></div>
                      <h6 class="title m-0">Swiming Pool</h6>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="list-one d-flex align-items-center me-sm-4 mb-3">
                      <div class="icon text-theme-color1 mr-10 flex-shrink-0"><i class="fas fa-dumbbell"></i></div>
                      <h6 class="title m-0">Gymnasium</h6>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="list-one d-flex align-items-center me-sm-4 mb-3">
                      <div class="icon text-theme-color1 mr-10 flex-shrink-0"><i class="fas fa-parking-circle"></i></div>
                      <h6 class="title m-0">Parking</h6>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="list-one d-flex align-items-center me-sm-4 mb-3">
                      <div class="icon text-theme-color1 mr-10 flex-shrink-0"><i class="fas fa-shield-check"></i></div>
                      <h6 class="title m-0">Security</h6>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="list-one d-flex align-items-center me-sm-4">
                      <div class="icon text-theme-color1 mr-10 flex-shrink-0"><i class="fas fa-child"></i></div>
                      <h6 class="title m-0">Playground</h6>
                    </div>
                  </div>
                </div>
              </div>

              <!-- choose category -->
            	<div class="mt-40">
						  	<h4>Choose Rooms Category</h4>
                <div class="row room-facility-list mb-40">

                  <?php foreach($room_category as $category) { ?>
                    <div class="col-sm-6 col-xl-4">
                        <div class="list-one d-flex align-items-center me-sm-4 mb-3">
                          <div class="icon text-theme-color1 mr-10 flex-shrink-0 choose_category" data-id="<?= $category['id'] ?>">
                            <i class="fas fa-fan"></i>
                          </div>
                          <h6 class="choose_category title m-3" style="cursor: pointer;"  data-id="<?= $category['id'] ?>">
            
                            <?= $category['category_name'] ?>
                          </h6>
                        </div>
                      </div>

                  <?php }?>
                </div>
						  </div>
              <!-- form category booking -->  
              
					  </div>
				</div>
				<div class="col-xl-4 col-lg-5">
					<div class="sidebar">
						
						<div class="sidebar__single sidebar__post mt-5">
							<h3 class="sidebar__title">Compare Room</h3>
							<ul class="sidebar__post-list list-unstyled">
								<li>
									<div class="sidebar__post-image"> <img src="images/resource/news-info-1.jpg" alt=""> </div>
									<div class="sidebar__post-content">
										<h3> <span class="sidebar__post-content-meta"><i class="fas fa-door-open"></i>Economy Room</span> <a href="">$175/Night</a>
										</h3>
									</div>
								</li>
								<li>
									<div class="sidebar__post-image"> <img src="images/resource/news-info-2.jpg" alt=""> </div>
									<div class="sidebar__post-content">
										<h3> <span class="sidebar__post-content-meta"><i class="fas fa-door-open"></i>Deluxe Room</span> <a href="">$250</a> </h3>
									</div>
								</li>
								<li>
									<div class="sidebar__post-image"> <img src="images/resource/news-info-1.jpg" alt=""> </div>
									<div class="sidebar__post-content">
										<h3> <span class="sidebar__post-content-meta"><i class="fas fa-door-open"></i>Super Deluxe Room</span> <a href="">$320</a> </h3>
									</div>
								</li>
							</ul>
						</div>
            <form id=""  name="booking-form" class="" action="<?=base_url('store-booking')?>" method="post">
              <div class="sidebar__post mt-5" id="booking-form" style="display:none">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="mb-3">
                        <label class="form-label">how Many Room Do you Book</label>
                        <input name="total_room" class="form-control bg-white room_requied" type="text" placeholder="Name">
                      </div>
                      <div id="room_details_container"></div>
                    </div>
                  </div>
              </div>
              <div class="sidebar__single sidebar__post mt-5 Room_price_card" style="display:none">
                <h3 class="sidebar__title">Room Amount</h3>
                <ul class="sidebar__post-list list-unstyled">
                  <li>
                    <div class="sidebar__post-image"> <img src="images/resource/news-info-1.jpg" alt=""> </div>
                    <div class="sidebar__post-content">
                      <h3 class="total_room_price"  style="display:none"> <span class="sidebar__post-content-meta"><i class="fas fa-door-open"></i> </span> 
                      </h3>
                      <h3 class="final_price"> <span class="sidebar__post-content-meta"><i class="fas fa-door-open"></i> </span> 
                      </h3>

                      <input type="hidden" name="subtotal" class="final_price">
                      <input type="hidden" name="hotal_id" value="<?=$hotalDetails['id']?>">
                    </div>
                  </li>
                  <li>
                    <div class="sidebar__post-image"> <img src="images/resource/news-info-1.jpg" alt=""> </div>
                    <div class="sidebar__post-content">
                      <div class="mb-3">
                    <button type="submit" class="btn btn-primary px-4 py-3" data-loading-text="Please wait..."><span class="btn-title">Book Now</span></button>
                  </div>
                    </div>
                  </li>
                </ul>
              </div>
            </form>
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
$(document).ready(function(){



  $(document).on('click', '.choose_category', function(){
    let category_id = $(this).data('id');
    console.log(category_id);
    $.ajax({
      url: "<?= base_url('get-room-category') ?>", 
      method :"POST",
      data: { category_id: category_id },
      dataType: "json",
      success: function(response) {
        console.log("Server Response:", response);
        if (response.status === 'success'  && response.data.length > 0 ) {
        $('#booking-form').show(); 
        $('.Room_price_card').show();
         let roomData = response.data[0];
         let price = roomData.price_per_night;
          $('.total_room_price').text("₹ " + price);
        } 
      
      },
      error: function(xhr, status, error) {
        console.log("Error:", error);
        alert("Something went wrong!");
      }
    });
  });

  function calculateTotalPrice() {
  let total_rooms = parseInt($('.room_requied').val()) || 0;
  let price_per_room = parseFloat($('.total_room_price').text().replace(/[^\d.]/g, '')) || 0;

  let total_price = total_rooms * price_per_room;

  $('.final_price').val("₹ " + total_price);

  // return if needed
  return total_price;
}

  $(document).on('change','.room_requied',function(){
   let total_count_room = parseInt($(this).val()) || 0;
      let container = $('#room_details_container');
      container.empty(); 

      for (let i = 1; i <= total_count_room; i++) {
        let row = `
          <div class="room-block mb-4 p-3 border rounded position-relative">
          <button type="button" class="remove-room" 
            style="position:absolute; top:10px; right:10px; background:none; border:none; font-size:20px; color:red; cursor:pointer;">×</button>
            <h6>Room ${i}</h6>
               
            <div class="mb-3">
              <label class="form-label">Persons</label>
              <input name="persons[]" class="form-control bg-white" type="number" placeholder="No. of persons" />
            </div>
            <div class="mb-3">
              <label class="form-label">Duration (Days)</label>
              <input name="duration[]" class="form-control bg-white" type="number" placeholder="Duration in days" />
            </div>
          </div>
        `;

         container.append(row);
         calculateTotalPrice(); 
      }
  })
  $(document).on('click', '.remove-room', function () {
      $(this).closest('.room-block').remove();
      let current = parseInt($('.room_requied').val()) || 0;
      $('.room_requied').val(current - 1);

      calculateTotalPrice(); 
    });




});
</script>

