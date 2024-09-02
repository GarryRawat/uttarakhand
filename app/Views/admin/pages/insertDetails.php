<style>
  .form-label{
    color: black;
    font-weight: 700px;
  }
</style>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <h1 class="mb-3">Add AllPages Details</h1>
      <form action="<?= base_url('addpageData') ?>" method="POST" enctype="multipart/form-data">
        <div class="row g-3">

          <div class="col-md-6">
            <label for="your-surname" class="form-label">City</label>
            <select class="form-control" id="" name="city_name">
              <?php foreach ($cities as $city_name) { ?>
                <option class="form-control" value="<?= $city_name['id'] ?>"><?= $city_name['city_name'] ?></option>
              <?php } ?>
            </select>


          </div>
          <div class="col-md-6">
            <label for="your-name" class="form-label">Place</label>
            <input type="text" class="form-control" id="" name="place" required>
          </div>
          <div class="col-md-6">
            <label for="your-surname" class="form-label">Title</label>
            <input type="text" class="form-control" id="" name="title" required>
          </div>

        

          <div class="col-md-6">
            <label for="your-subject" class="form-label">About Title</label>
            <input type="text" class="form-control" id="" name="about_title">
          </div>

          <div class="col-12 mt-5">
            <label for="your-message" class="form-label">Short Destination</label>
            <textarea  class="mytextarea" name="short_description"></textarea>
          </div>

          <div class="col-12 mt-4" >
            <label for="your-message" class="form-label">Long Destination</label>
            <textarea  class="mytextarea" name="long_description"></textarea>
          </div>
          <div class="col-md-6 mt-4">
            <label for="your-surname" class="form-label">Meta Title</label>
            <input type="text" class="form-control" id="" name="meta_title" required>
          </div>
          <div class="col-md-6 mt-4">
            <label for="your-surname" class="form-label">Meta Keywords</label>
            <input type="text" class="form-control" id="" name="meta_keywords" required>
          </div>
          <div class="col-12">
            <label for="your-message" class="form-label">Meta Description</label>
            <input type="text" class="form-control" id="" name="meta_description" required>
          </div>
          <div class="col-12 mt-2" >
            <div class="row" style="justify-content:center">
              <div class="col-md-4 mt-2">
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
      selector: '.mytextarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker', // List of plugins
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat', // Toolbar configuration
      tinycomments_mode: 'embedded', 
      tinycomments_author: 'Author name', 
      mergetags_list: [ 
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

  $(".js-example-placeholder-single").select2({
    placeholder: "Select",
    allowClear: true
});
</script>