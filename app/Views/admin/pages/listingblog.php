<style>
    .form-label {
        color: black;
        font-weight: 700px;
    }
</style>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <h1 class="mb-3"> Blogs listing page </h1>
            <form action="<?= base_url('addblogData') ?>" method="POST" enctype="multipart/form-data">
                <div class="row g-3">

                    <div class="col-md-12">

                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>Blog Title</th>
                                    <th>Short Description</th>
                                    <th>Author</th>
                                    <th>Blog Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($allblogs as $blogs) { ?>
                                    <tr class="id_<?php echo $blogs['id']; ?>">
                                        <td><?= $blogs['blog_title'] ?></td>
                                        <td><?=substr( $blogs['short_description'],0,74.) ?>..</td>
                                        <td><?= $blogs['author'] ?></td>
                                        <td><img src="<?= base_url('uploads/' . $blogs['blog_image']) ?>" alt="User Image" style="width:100px; height:50px;"></td>
                                        <td><a href="<?= base_url() ?>/editblogs/<?= $blogs['id'] ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                            &emsp; <a href="" class="btn btn-md rounded-circle bg-light border delete-btn" id="<?= $blogs['id'] ?>">
                                                <i class="fa fa-times text-danger"></i>
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
            console.log(id);


            $.ajax({
                url: '<?= base_url('itemDelete') ?>',
                type: 'POST',
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {

                    if (response.status == "success") {
                  

                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1500
                        });
                        $('.id_' + id).remove();

                    } else {
                 
                    }
                    console.log(response);

                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);

                }
            });

        });
    </script>