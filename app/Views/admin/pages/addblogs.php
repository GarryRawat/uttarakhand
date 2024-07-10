<style>
  .form-label {
    color: black;
    font-weight: 700px;
  }
</style>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <h1 class="mb-3">Add Blogs Data</h1>
      <form action="<?= base_url('addblogData') ?>" method="POST" enctype="multipart/form-data">
        <div class="row g-3">

          <div class="col-md-6">
            <label for="your-surname" class="form-label">Blog_category</label>
            <select class="form-control" id="" name="blog_category">
              <?php foreach ($blog_category as $blogcat) { ?>
                <option class="form-control" value="<?= $blogcat['id'] ?>"><?= $blogcat['blog_categories'] ?></option>
              <?php } ?>

            </select>


          </div>
          <div class="col-md-6">
            <label for="your-name" class="form-label">blog_title</label>
            <input type="text" class="form-control" id="" name="blog_title" required>
          </div>



          <div class="col-md-6">
            <label for="your-subject" class="form-label">author</label>
            <input type="text" class="form-control" id="" name="author">
          </div>

          <!-- <div class="col-md-6">
            <label for="your-subject" class="form-label">Add Image</label>
            <input type="file" class="form-control" id="" name="file-image">
          </div>  -->

          <div class="col-12 mt-5">
            <label for="your-message" class="form-label">Short Destination</label>
            <textarea class="mytextarea" name="short_description"></textarea>
          </div>

          <div class="col-12 mt-4">
            <label for="your-message" class="form-label">Long Destination</label>
            <textarea class="mytextarea" name="long_description"></textarea>

          </div>

          <div class="col-md-6">
            <label for="your-subject" class="form-label">Blog-Image</label>
            <input type="file" class="form-control" id="" name="blog_image">
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

  $(".js-example-placeholder-single").select2({
    placeholder: "Select",
    allowClear: true
  });
</script>