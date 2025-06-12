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
<div class="main-pannel container">
    <div class="content-wrapper">
        <div class="page-header">
            <h1 class="page-title">List Pages Details</h1>
            <div class="add-pages-btn" style="display: flex; justify-content: flex-end;">
                  <a href="<?= base_url('insertDetails') ?>" class="btn btn-dark btn-lg btn-block" >
                  Add Pages    
                </a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">

                <!-- Flash Message Section -->
                <div class="alert_div">
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="badge badge-pill badge-danger">Error</span>&emsp;
                            <span><?= session()->getFlashdata('error') ?></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    <?php elseif (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="badge badge-pill badge-success">Success</span>&emsp;
                            <span><?= session()->getFlashdata('success') ?></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Data Table Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-12 mt-3">
                                <table id="myTable" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr.no</th>
                                            <th>City</th>
                                            <th>Place</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach ($listing as $pages): ?>
                                            <tr class="id_<?= $pages['id']; ?>">
                                                <td class="text-center"><?= $i++ ?></td>
                                                <td><?= $pages['city_name'] ?></td>
                                                <td><?= $pages['place'] ?></td>
                                                <td><?= $pages['title'] ?></td>
                                                <td>
                                                    <a href="<?= base_url('/editallpages/' . $pages['id']) ?>">
                                                        <i class="fa fa-pencil edit-icon fa-lg" style="color: blue;"></i>
                                                    </a>
                                                    &emsp;
                                                    <a href="#" class="delete-btn" id="<?= $pages['id'] ?>">
                                                        <i class="fa fa-trash delete-icon fa-lg" style="color: red;"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- End of Card -->

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
                url: '<?= base_url('deletepages') ?>',
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
                                    url: '<?= base_url('deletepages') ?>', 
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
    </script>