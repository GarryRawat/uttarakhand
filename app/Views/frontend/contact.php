<!-- END nav -->

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?= base_url() ?>/public/frontend/images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Contact us</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pb contact-section mb-4">
  <div class="container">
    <div class="row d-flex contact-info">
      <div class="col-md-3 d-flex">
        <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-map-marker"></span>
          </div>
          <h3 class="mb-2">Address</h3>
          <p>198 West 21th Street, Suite 721 New York NY 10016</p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-phone"></span>
          </div>
          <h3 class="mb-2">Contact Number</h3>
          <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-paper-plane"></span>
          </div>
          <h3 class="mb-2">Email Address</h3>
          <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-globe"></span>
          </div>
          <h3 class="mb-2">Website</h3>
          <p><a href="#">yoursite.com</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section ftco-no-pt">
  <div class="container">
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form action="<?= base_url('insertContactPage') ?>" method="POST" id="mycontactForm" enctype="multipart/form-data" class="bg-light p-5 contact-form">
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Your Email" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary send-msg-btn py-3 px-5">
            <input type="hidden" name="act" value="send-message">
          </div>
        </form>

        <!-- <form action="http://192.168.30.99:8000/api/save-leads/52/VktNPTo6MnkTCCwkywXNSF69FPSWPQ%3D%3D?first_name&email"  method="get"  enctype="multipart/form-data" class="bg-light p-5 contact-form">
          <div class="form-group">
            <input type="text" class="form-control" name="first_name" placeholder="Your Name" >
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="last_name" placeholder="Your Name" required>
          </div>
         <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Your Email" >
          </div> 
          <div class="form-group">
            <input type="text" class="form-control" name="address_1" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="address_2" placeholder="Subject" required>
          </div> 
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary send-msg-btn py-3 px-5">
            <input type="hidden" name="act" value="send-message"> -->
          
        

      </div>

      <div class="col-md-6 d-flex">
      <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Aman%20Vihar,%20Dehradun,%20Danda%20Dhoran,%20Uttarakhand%20248013+(travling)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps vehicle tracker</a></iframe></div>
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
  $(document).ready(function() {

    $('#mycontactForm').submit(function(event) {

      event.preventDefault();

      var form = $(this).closest('form');
      var formData = form.serialize();


      $.ajax({
        url: 'insertContactPage',
        type: 'POST',
        data: formData,
        dataType: 'JSON',
        beforeSend: function() {
          $('.send-msg-btn').val('Please Wait...');
        },
        success: function(res) {
          if (res.status == 'success') {

            new Notify({
              title: 'Notify Title',
              text: res.message,
              type: 'success',
              autoclose: true,
              autotimeout: 3000
            })
         

            $('#mycontactForm')[0].reset();
            $('.send-msg-btn').val('Send Message');



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
        error: function(err) {
          console.log(err);
        }
      })
    });

  })
</script>