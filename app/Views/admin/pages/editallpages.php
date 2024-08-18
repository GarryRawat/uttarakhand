<style>
  .form-label {
    color: black;
    font-weight: 700px;
  }
</style>

<div id="flash-message"></div>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <h1 class="mb-3">Edit AllPages Details</h1>
      <form id="updatepagesform" method="POST" enctype="multipart/form-data">
        <div class="row g-3">

          <div class="col-md-6">
            <label for="your-surname" class="form-label">City</label>
            <select class="form-control" id="" name="city_name">
              <?php foreach ($cities as $city_name) { ?>
                <option class="form-control" value="<?= $city_name['id'] ?>"
                  <?= ($city_name['id'] == $pagedata['city_id']) ? 'selected' : '' ?>>
                  <?= $city_name['city_name'] ?>
                </option>

              <?php } ?>
            </select>


          </div>
          <div class="col-md-6">
            <label for="your-name" class="form-label">Place</label>
            <input type="text" class="form-control" id="" value="<?= $pagedata['place'] ?>" name="place" required>
            <input type="hidden" name="id" value="<?= $pagedata['id'] ?>">
          </div>
          <div class="col-md-6">
            <label for="your-surname" class="form-label">Title</label>
            <input type="text" class="form-control" id="" value="<?= $pagedata['title'] ?>" name="title" required>
          </div>


          <div class="col-md-6">
            <label for="your-subject" class="form-label">About Title</label>
            <input type="text" class="form-control" id="" value="<?= $pagedata['about_title'] ?>" name="about_title">
          </div>

          <!-- <div class="col-md-6">
            <label for="your-subject" class="form-label">Add Image</label>
            <input type="file" class="form-control" id="" name="file-image">
          </div>  -->

          <div class="col-12 mt-5">
            <label for="your-message" class="form-label">Short Destination</label>
            <textarea class="mytextarea" value="" name="short_description"><?= $pagedata['short_description'] ?></textarea>
          </div>

          <div class="col-12 mt-4">
            <label for="your-message" class="form-label">Long Destination</label>
            <textarea class="mytextarea" value="" name="long_description"><?= $pagedata['long_description'] ?></textarea>

          </div>


          <div class="col-12 ">
            <div class="row">
              <div class="col-md-6 mt-2">
                <button data-res="" type="submit" class="btn btn-dark w-100 fw-bold">Add</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<script>
  tinymce.init({
    selector: '.mytextarea', // Select the textarea to initialize TinyMCE
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker', // List of plugins
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat', // Toolbar configuration
    tinycomments_mode: 'embedded', // Commenting mode
    tinycomments_author: 'Author name', // Author name for comments
    mergetags_list: [ // List of merge tags
      {
        value: 'First.Name',
        title: 'First Name'
      },
      {
        value: 'Email',
        title: 'Email'
      },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")), // Placeholder for AI Assistant implementation
  });

  // $(".js-example-placeholder-single").select2({
  //   placeholder: "Select",
  //   allowClear: true
  // });



  $(document).ready(function() {
    $('#updatepagesform').on('submit', function(event) {
      event.preventDefault();

      var form = $(this);
      var formData = new FormData(form[0]);

      // console.log(formData); // Make sure to spell "console" correctly

      $.ajax({
        url: '<?= base_url('updateallpages') ?>',
        type: 'POST',
        data: formData,
        dataType: 'JSON',
        contentType: false,
        processData: false,
        success: function(res) {
          if (res.status == 'success') {
            Swal.fire({
              icon: 'success',
              title: 'Success',
              text: 'Data Updated Successfully',
              timer: 3000,
              showConfirmButton: false,
            });

            setTimeout(function() {
              window.location.href = "<?= base_url('/listpagedetails') ?>";
            }, 1500);

          } else {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: res.message,
            });
          }
        },
        error: function(err) {
          console.log(err);
        }
      });
    });
  });
</script>