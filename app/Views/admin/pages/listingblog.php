<style>
    .form-label {
        color: black;
        font-weight: 700px;
    }

    .btn-blogs{
        
        position: absolute;
        right: 165px;
        background: #44ce42;
        color: white;

    }
</style>

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
            <h1 class="mb-3"> Blogs listing page </h1>
            <div clas="add-pages-btn">
                <a href="<?= base_url('addblogs') ?>" style="display: flex;
                    justify-content: flex-end; text-decoration: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zm0 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zm-.5 3a.5.5 0 0 1 .5.5V7h2V4.5a.5.5 0 0 1 1 0V7h2a.5.5 0 0 1 0 1H11v2.5a.5.5 0 0 1-1 0V8H8v2.5a.5.5 0 0 1-1 0V8H5a.5.5 0 0 1 0-1h2V4.5a.5.5 0 0 1 .5-.5z" />
                    </svg>&emsp;Add Blogs
                </a>
            </div>
         
                <div class="row g-3">
                   <?php
                   $i=1;
                   ?>
                    <div class="col-md-12">

                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>Sr.no</th>
                                    <th>Blog Image</th>
                                    <th>Blog Title</th>
                                    <th>views</th>
                                    <th>Like</th>
                                    <th>Comment</th>
                                
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($allblogs as $blogs) { ?>
                                    <tr class="id_<?php echo $blogs['id']; ?>">
                                        <td class="text-center"><?php echo $i++?></td>
                                        <td><img src="<?= base_url('uploads/' . $blogs['blog_image']) ?>" alt="User Image" style="width:50px; height:50px;"></td>
                                        <td><?= $blogs['blog_title'] ?></td>
                                        <td class="text-center"><?= $blogs['views']?></td>
                                        <td class="text-center"><?= $blogs['like_count']?></td>
                                        <td class="text-center"><i class="fa fa-eye fa-sm eye-btn" style="cursor: pointer;" aria-hidden="true"></i><?= $blogs['comment_count'] ?></td>
                                    
                                        <td><a href="<?= base_url() ?>/editblogs/<?= $blogs['id'] ?>"> <i class="fa fa-pencil edit-icon fa-lg" style="color: blue;"></i></a>
                                            &emsp; <a href="" class=" delete-btn" id="<?= $blogs['id'] ?>">
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var table = new DataTable('#myTable');
        });


        $('.delete-btn').on('click', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');

            $.ajax({
                url: '<?= base_url('itemDelete') ?>',
                type: 'POST',
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.status == "success") {
                        // Show confirmation dialog
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
                                // User confirmed, proceed with deletion
                                $.ajax({
                                    url: '<?= base_url('itemDelete') ?>', // Adjust URL if needed
                                    type: 'POST',
                                    data: {
                                        id: id
                                    },
                                    dataType: "JSON",
                                    success: function(deleteResponse) {
                                        if (deleteResponse.status == "success") {
                                            // Show success message
                                            Swal.fire({
                                                title: "Deleted!",
                                                text: "Your record has been deleted.",
                                                icon: "success"
                                            });
                                            // Optionally remove the deleted item from the DOM
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


        $('.eye-btn').on('click', function(event) {

            $.confirm({
    title: 'Confirm!',
    content: 'Simple confirm!',
    buttons: {
        confirm: function () {
            $.alert('Confirmed!');
        },
        cancel: function () {
            $.alert('Canceled!');
        },
        somethingElse: {
            text: 'Something else',
            btnClass: 'btn-blue',
            keys: ['enter', 'shift'],
            action: function(){
                $.alert('Something else?');
            }
        }
    }
});

        })
    </script>