<style>
    .form-label {
        color: black;
        font-weight: 700px;
    }

    .btn-pages {

        position: absolute;
        right: 165px;
        background: #44ce42;
        color: white;

    }
</style>
<div class="content-wrapper">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="alert_div">
                    <?php
                    if (session()->getFlashdata('error')) { // for error
                    ?>
                        <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                            <span class="badge badge-pill badge-danger">Error</span>&emsp;<span><?= session()->getFlashdata('error') ?></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    <?php
                    } else if (session()->getFlashdata('success')) { //for success
                    ?>
                        <div class="alert  alert-success alert-dismissible fade show" role="alert">
                            <span class="badge badge-pill badge-success">Success</span>&emsp;<span><?= session()->getFlashdata('success') ?></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    <?php } ?>
                </div>

                <h1 class="mb-3">List Pages Details </h1>
                <div clas="add-pages-btn">
                    <a href="<?= base_url('insertDetails') ?>" style="display: flex;
                    justify-content: flex-end; text-decoration: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zm0 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zm-.5 3a.5.5 0 0 1 .5.5V7h2V4.5a.5.5 0 0 1 1 0V7h2a.5.5 0 0 1 0 1H11v2.5a.5.5 0 0 1-1 0V8H8v2.5a.5.5 0 0 1-1 0V8H5a.5.5 0 0 1 0-1h2V4.5a.5.5 0 0 1 .5-.5z" />
                        </svg>&emsp;Add pages
                    </a>
                </div>
                <div class="card">

                    <div class="row g-3">
                        <?php
                        $i = 1;
                        ?>
                        <div class="col-md-12 mt-3">
                            <table id="photos_list" class="display">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>City/Place</th>
                                        <th>Food-Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($food_img as $pages) { ?>
                                        <tr class="id_<?php echo $pages['id']; ?>">

                                            <td><img src="<?= base_url('uploads/' . $pages['food_images']) ?>" alt="User Image" style="width:50px; height:50px;"></td>
                                            <td class=""><?= $pages['category'] ?></td>
                                            <td class=""><?= $pages['title'] ?></td>
                                            <td class=""><?= $pages['top_foods'] ?></td>
                                            <td><button onclick="editPage(<?= $pages['id'] ?>)" class="edit-button">
                                                    <i class="fa fa-pencil edit-icon fa-lg" style="color: blue;"></i>
                                                </button>
                                                &emsp; <a href="" class="delete-btn" id="<?= $pages['id'] ?>">
                                                    <i class="fa fa-trash delete-icon fa-lg" style="color: red;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--  edit phtos model-->
    <div class="modal" id="edit_items_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="edit_image_form" id="edit_image_form" method="post" action="">
                        <input type="hidden" name="image_id" id="image_id" class="form-control" />
                        <input type="hidden" name="city_place_id" id="city_place_id" class="form-control" />

                        <div class="col-md-6  hidden" id="placeDropdown">
                            <label for="your-surname" class="form-label">place</label>
                            <select class="js-example-placeholder-single js-states places form-control" name="place_id">
                                <?php foreach ($places as $place_deatils) { ?>
                                    <option class="form-control" value="<?= $place_deatils['id'] ?>"><?= $place_deatils['place'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-md-6  hidden" id="cityDropdown">
                            <label for="your-surname" class="form-label">City</label>
                            <select class="js-example-placeholder-single js-states city form-control" name="city_id">
                                <?php foreach ($city as $city_deatils) { ?>
                                    <option class="form-control" value="<?= $city_deatils['id'] ?>"><?= $city_deatils['city_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="form-group">
                                <lable  for="your-surname" class="form-label">Food-Name</lable>
                                <input type="text" name="top_foods" id="top_foods" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <lable  for="your-surname" class="form-label">Image</lable>
                                <div id="imageBox" style="border: 1px solid #ddd; padding: 10px; width: 200px; height: 200px;">
                                    <img id="imagePreview" src="" alt="Image Preview" style="max-width: 100%; height: auto; display: none;">
                                </div>
                                <input type="file" name="file" id="file"  class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="update_image_form">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var table = new DataTable('#photos_list');
        });

        /**
         * delete pages photos
         */
        $('.delete-btn').on('click', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');

            $.ajax({
                url: '<?= base_url('delete-pages-image') ?>',
                type: 'POST',
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.status == "success") {
                        Swal.fire({
                            title: "Are you sure?",
                            text: "You won't be able to revert this!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, delete it!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajax({
                                    url: '<?= base_url('delete-food-images') ?>',
                                    type: 'POST',
                                    data: {
                                        id: id
                                    },
                                    dataType: "JSON",
                                    success: function(deleteResponse) {
                                        if (deleteResponse.status == "success") {
                                            Swal.fire({
                                                title: "Deleted!",
                                                text: "Your record has been deleted.",
                                                icon: "success"
                                            });

                                            $('.id_' + id).remove();
                                        } else {
                                            Swal.fire({
                                                title: "Error!",
                                                text: "Failed to delete record.",
                                                icon: "error"
                                            });
                                        }
                                    },
                                    error: function(xhr, status, error) {
                                        console.error(xhr.responseText);
                                        Swal.fire({
                                            title: "Error!",
                                            text: "Failed to delete record. Please try again later.",
                                            icon: "error"
                                        });
                                    }
                                });
                            }
                        });
                    } else {
                        Swal.fire({
                            title: "Error!",
                            text: "Failed to delete record.",
                            icon: "error"
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    Swal.fire({
                        title: "Error!",
                        text: "Failed to delete record. Please try again later.",
                        icon: "error"
                    });
                }
            });
        });

        /**
         * edit pages photos images
         */
        function editPage(pageId) {
       
            $('#edit_items_modal').modal('show');
            $('#image_id').val(pageId);
            console.log("Editing page with ID:", pageId);
            $.ajax({
                type: 'GET',
                url: '<?= base_url('get-food-image/') ?>' + pageId,
                data: pageId,
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    // return;
                    $("#cityDropdown").hide();
                    $("#placeDropdown").hide();
                    $("#edit_modal_header").text('Edit Item(' + response.id + ')');
                    $("#image_id").val(response.id);
                    $("#top_foods").val(response.top_foods);
                    $("#city_place_id").val(response.city_place_id);
                    if (response.category === 'city') {
                        $("#cityDropdown").show();
                        $(".city").val(response.city_place_id).change();
                    } else if (response.category === 'place') {
                        $("#placeDropdown").show();
                        $(".places").val(response.city_place_id).change();
                    } else {
                        $("#cityDropdown").hide();
                        $("#placeDropdown").hide();
                    }
                    if (response.food_images) {
                        $("#imagePreview").attr("src", "<?php echo base_url('uploads/'); ?>" + response.food_images).show();
                    }
                }
            })
        }

        $('#update_image_form').click(function(event) {
            event.preventDefault();
            var data = $('#edit_image_form').serialize();
            var form = $("#edit_image_form").closest("form");
            var formData = new FormData(form[0]);

            // console.log(formData);
            // return;
            $.ajax({
                type: 'POST',
                url: '<?= base_url('update-food-image') ?>',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status === "success") {
                        $('#edit_items_modal').modal('hide');

                        Swal.fire({
                            type: 'success',
                            text: "response.message",
                            icon: "success",
                            autotimeout: 3000
                        });
                        setInterval(function() {
                            window.location.reload()
                        }, 1500);
                     
                    } else {
                        new Notify({
                            title: 'Notify Title',
                            text: response.message,
                            type: 'error',
                            autoclose: true,
                            autotimeout: 3000
                        });
                    }
                }

            });
        })

        $('.city,.places').change(function() {
            var city_place_id = $(this).val();
            $('#city_place_id').val(city_place_id);
        });
    </script>