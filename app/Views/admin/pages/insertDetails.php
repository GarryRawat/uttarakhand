<style>
  .form-label{
    color: black;
    font-weight: 700px;
  }
</style>
<div class="main-pannel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1 class="page-title">Add AllPages Details</h1>
        </div>

        <div class="row ">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('addpageData') ?>" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">

                                <!-- City -->
                                <div class="col-md-6">
                                    <label for="city_name" class="form-label">City</label>
                                    <select class="form-control" id="city_name" name="city_name" required>
                                        <option value="">Select City</option>
                                        <?php foreach ($cities as $city_name) : ?>
                                            <option value="<?= $city_name['id'] ?>"><?= $city_name['city_name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!-- Place -->
                                <div class="col-md-6">
                                    <label for="place" class="form-label">Place</label>
                                    <input type="text" class="form-control" id="place" name="place" required>
                                </div>

                                <!-- Title -->
                                <div class="col-md-6 mt-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>

                                <!-- About Title -->
                                <div class="col-md-6 mt-3">
                                    <label for="about_title" class="form-label">About Title</label>
                                    <input type="text" class="form-control" id="about_title" name="about_title">
                                </div>

                                <!-- Page Type -->
                                <div class="col-md-6 mt-3">
                                    <label for="page_type" class="form-label">Page Type</label>
                                    <select name="page_type" class="form-control" id="page_type" required>
                                        <option value="">Select Page Type</option>
                                        <option value="adventure">Adventure</option>
                                        <option value="nature">Nature</option>
                                        <option value="beach">Beach</option>
                                        <option value="camping">Camping</option>
                                        <option value="party">Party</option>
                                    </select>
                                </div>

                                <!-- Short Description -->
                                <div class="col-12 mt-4">
                                    <label for="short_description" class="form-label">Short Destination</label>
                                    <textarea class="mytextarea" name="short_description" id="short_description" rows="4"></textarea>
                                </div>

                                <!-- Long Description -->
                                <div class="col-12 mt-4">
                                    <label for="long_description" class="form-label">Long Destination</label>
                                    <textarea class="mytextarea" name="long_description" id="long_description" rows="6"></textarea>
                                </div>

                                <!-- Meta Title -->
                                <div class="col-md-6 mt-4">
                                    <label for="meta_title" class="form-label">Meta Title</label>
                                    <input type="text" class="form-control" id="meta_title" name="meta_title" required>
                                </div>

                                <!-- Meta Keywords -->
                                <div class="col-md-6 mt-4">
                                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" required>
                                </div>

                                <!-- Meta Description -->
                                <div class="col-12 mt-4">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <input type="text" class="form-control" id="meta_description" name="meta_description" required>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 mt-4">
                                    <div class="row justify-content-center">
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-dark w-100 fw-bold">Add</button>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- row g-3 -->
                        </form>
                    </div> <!-- card-body -->
                </div> <!-- card -->
            </div> <!-- col-lg-9 -->
        </div> <!-- row -->
    </div> <!-- content-wrapper -->




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