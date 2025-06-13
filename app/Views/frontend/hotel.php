<style>
ul {
  list-style: none;
  display: flex;
  justify-content: flex-end;
}

.top__header {
  position: relative;
  height: 45px;
  padding: 10px;
  background: #51d6fb;
  color: #ffffff;
  font-size: 12px;
  font-family: "Roboto", sans-serif;
  text-align: center;
  overflow: hidden;
}
.top__header .icon__menu .menu__mobile {
  text-align: left;
  margin-top: -5px;
}
.top__header .icon__menu .menu__desktop {
  display: none;
}
.top__header h3 {
  position: absolute;
  bottom: 10px;
  width: 100%;
  text-align: center;
}
.top__header:before {
  content: "";
  width: 100%;
  border-radius: 10px 10px 0 0;
  background: #1fcafa;
  height: 100%;
  display: block;
  position: absolute;
  top: 32px;
  left: 0;
}

.hotel-card {
  margin-top: 1rem;
  padding: 10px;
  display: grid;
  grid-gap: 20px;
  font-family: "Roboto", sans-serif;
}
.hotel-card .card {
  position: relative;
  max-height: 407px;
  padding: 10px;
  border-radius: 8px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.4);
  display: grid;
  grid-gap: 10px;
  grid-template-columns: repeat(auto-fit, minmax(auto, 1fr));
}
.hotel-card .card__img {
  max-height: 200px;
  border-radius: 10px;
  overflow: hidden;
}
.hotel-card .card__details {
  position: relative;
  top: -36px;
  width: 90%;
  padding: 10px;
  margin: 0 auto;
  background: white;
  border-radius: 10px;
  box-shadow: 0 4px 8px 0 rgba(3, 6, 31, 0.15);
  display: grid;
  grid-gap: 5px;
}
.hotel-card .card__details h3 {
  font-size: 22px;
  font-weight: 400;
}
.hotel-card .card__details .address {
  color: #777777;
  font-size: 12px;
}
.hotel-card .card__details .price {
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.hotel-card .card__details .price .price__l {
  width: 100%;
  text-align: right;
    color:#000000;
}
.hotel-card .card__details .price .price__l .price__label {
  font-weight: 600;
  text-align: right;
  color:#000000;
}
.hotel-card .card__details .price .star img {
  width: 14px;
}
.hotel-card .card__details a {
  cursor: pointer;
  width: 100%;
  padding: 15px;
  text-align: center;
  border: none;
  border-radius: 5px;
  background: #4400E7;
  color: #ffffff;
}
.hotel-card .card__details a:focus {
  outline: none;
}
.hotel-card .card .credit-img {
  position: absolute;
  right: 0;
  bottom: 0;
  padding: 10px;
  font-size: 10px;
  text-align: right;
}

@media (max-width: 347px) {
  .hotel-card .card__details .price {
    align-items: baseline;
  }
  .hotel-card .card__details .price .price__l {
    font-size: 12px;
  }
}
@media (min-width: 425px) {
  .top__header .icon__menu .menu__mobile {
    display: none;
  }
  .top__header .icon__menu .menu__desktop {
    display: block;
  }
  .top__header .icon__menu .menu__desktop ul.desktop__menu li {
    cursor: pointer;
    margin: 0 1rem;
    padding: 2px 10px;
  }
  .top__header .icon__menu .menu__desktop ul.desktop__menu li.promo {
    background: #d7493a;
    border-radius: 5px;
  }
  .top__header .icon__menu .menu__desktop ul.desktop__menu li.promo:hover {
    background: #b93425;
  }
}
@media (min-width: 768px) and (max-width: 1024px) {
  .hotel-card .card {
    grid-template-columns: 1fr 1fr;
  }
  .hotel-card .card__details {
    top: 0;
    align-items: flex-start;
    align-content: center;
    grid-gap: 10px;
  }
  .hotel-card .card__details .price {
    grid-template-columns: auto 1fr;
    font-size: 15px;
  }
  .hotel-card .card__details .address {
    margin-top: -7px;
  }
  .hotel-card .card .credit-img {
    padding: 15px 25px;
  }
}
@media (min-width: 481px) and (max-width: 767px) {
  .hotel-card .card {
    grid-template-columns: 1fr 1fr;
  }
  .hotel-card .card__details {
    top: 0;
    align-items: flex-start;
    align-content: center;
    grid-gap: 10px;
  }
  .hotel-card .card__details .price {
    grid-template-columns: auto 1fr;
    font-size: 15px;
  }
  .hotel-card .card__details .address {
    margin-top: -7px;
  }
  .hotel-card .card .credit-img {
    padding: 15px 25px;
  }
}
@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
  .hotel-card {
    grid-template-columns: 1fr 1fr;
  }
  .hotel-card .credit-img {
    font-size: 8px !important;
  }
}
@media (min-width: 1025px) and (max-width: 1199px){
  .hotel-wrapper {
    width: 960px;
    margin: auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
  }
  .hotel-wrapper .hotel-card {
    grid-template-columns: 1fr 1fr 1fr;
  }
  .hotel-wrapper .hotel-card .card__details h3 {
    font-size: 18px;
  }
}
@media (min-width: 1200px){
  .hotel-wrapper {
    width: 1200px;
    margin: auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
  }
  .hotel-wrapper .hotel-card {
    grid-template-columns: 1fr 1fr 1fr;
  }
  .hotel-wrapper .hotel-card .card__details h3 {
    font-size: 18px;
  }
}
</style>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo base_url()?>/public/frontend/images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
         <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Tour List <i class="fa fa-chevron-right"></i></span></p>
         <h1 class="mb-0 bread">Hotel</h1>
     </div>
 </div>
</div>
</section>

<section class="ftco-section ftco-no-pb">
   <div class="container">
      <div class="row">
       <div class="col-md-12">
          <div class="search-wrap-1 ftco-animate">
             <form action="#" class="search-property-1">
                <div class="row no-gutters">
                   <div class="col-lg d-flex">
                      <div class="form-group p-4 border-0">
                         <label for="#">Hotel</label>
                         <div class="form-field">
                           <div class="icon"><span class="fa fa-search"></span></div>
                           <input type="text" class="form-control" placeholder="Search place">
                       </div>
                   </div>
               </div>
               <div class="col-lg d-flex">
                  <div class="form-group p-4">
                     <label for="#">Check-in date</label>
                     <div class="form-field">
                       <div class="icon"><span class="fa fa-calendar"></span></div>
                       <input type="text" class="form-control checkin_date" placeholder="Check In Date">
                   </div>
               </div>
           </div>
           <div class="col-lg d-flex">
              <div class="form-group p-4">
                 <label for="#">Check-out date</label>
                 <div class="form-field">
                   <div class="icon"><span class="fa fa-calendar"></span></div>
                   <input type="text" class="form-control checkout_date" placeholder="Check Out Date">
               </div>
           </div>
       </div>
       <div class="col-lg d-flex">
          <div class="form-group p-4">
             <label for="#">Price Limit</label>
             <div class="form-field">
               <div class="select-wrap">
                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                <select name="" id="" class="form-control">
                  <option value="">$5,000</option>
                  <option value="">$10,000</option>
                  <option value="">$50,000</option>
                  <option value="">$100,000</option>
                  <option value="">$200,000</option>
                  <option value="">$300,000</option>
                  <option value="">$400,000</option>
                  <option value="">$500,000</option>
                  <option value="">$600,000</option>
                  <option value="">$700,000</option>
                  <option value="">$800,000</option>
                  <option value="">$900,000</option>
                  <option value="">$1,000,000</option>
                  <option value="">$2,000,000</option>
              </select>
          </div>
      </div>
  </div>
   </div>
</section>
<section class="ftco-intro ftco-section ftco-no-pt mt-5">
  <div class="hotel-wrapper">
    <div class="hotel-card">
      <?php foreach ($allHotels as $hotel) { ?>
        <div class="card">
          <div class="card__img">
              <?php
                $image_url = base_url('uploads/' . $hotel['image']);
                $fallback_url = "https://images.unsplash.com/photo-1530629013299-6cb10d168419?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=335&h=200&q=80";
                $final_image = !empty($hotel['image']) ? $image_url : $fallback_url;
              ?>
              <picture>
                <source media="(max-width: 320px)" srcset="<?= $final_image ?>">
                <source media="(min-width: 538px)" srcset="<?= $final_image ?>">
                <img src="<?= $final_image ?>" alt="hotel image">
              </picture>
          </div>
          <div class="card__details">
            <h3 for="cozyroom">Room Capacity <?=$hotel['room_capacity']?></h3>
            <div class="address"><?=$hotel['name']?></div>
            <div class="price">
              <div class="star">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700" viewBox="0 0 24 24">
                  <path d="M12 .587l3.668 7.568L24 9.75l-6 5.86L19.335 24 12 19.897 4.665 24 6 15.61 0 9.75l8.332-1.595z"/>
                </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700" viewBox="0 0 24 24">
                  <path d="M12 .587l3.668 7.568L24 9.75l-6 5.86L19.335 24 12 19.897 4.665 24 6 15.61 0 9.75l8.332-1.595z"/>
                </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700" viewBox="0 0 24 24">
                  <path d="M12 .587l3.668 7.568L24 9.75l-6 5.86L19.335 24 12 19.897 4.665 24 6 15.61 0 9.75l8.332-1.595z"/>
                </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700" viewBox="0 0 24 24">
                  <path d="M12 .587l3.668 7.568L24 9.75l-6 5.86L19.335 24 12 19.897 4.665 24 6 15.61 0 9.75l8.332-1.595z"/>
                </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFD700" viewBox="0 0 24 24">
                  <path d="M12 .587l3.668 7.568L24 9.75l-6 5.86L19.335 24 12 19.897 4.665 24 6 15.61 0 9.75l8.332-1.595z"/>
                </svg>
              </div>
              <div class="price__l">
                <span class="price__label"><?=$hotel['location']?></span>
                <!-- <span class="measure__label">night</span> -->
                <input type="hidden" name="product_id" id="product_id" <?=$hotel['id']?>>
              </div>
            </div>
           <a href="<?= base_url('hotel-details/' . $hotel['id']) ?>">Details</a>


          </div>
       
        </div>
      <?php }?>
    </div>
  </div>
</section>



