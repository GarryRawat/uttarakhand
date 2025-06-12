<style>
    .my-multi-lines-item {
        font-size: 14px;
        white-space: initial;
        display: flex;
        height: 60px;
        line-height: normal;
    }

    .my-multi-lines-text {
        margin-top: auto;
        margin-bottom: auto;
    }

    /* Dropzone custom styling */
.dropzone {
    border: 2px dashed #6c757d;
    border-radius: 10px;
    background: #f9f9f9;
    padding: 40px;
    text-align: center;
    transition: background 0.3s ease;
}

.dropzone:hover {
    background: #e6e6e6;
}

.dropzone .dz-message {
    font-size: 20px;
    color: #6c757d;
    font-weight: 500;
}

.dropzone .dz-preview .dz-image img {
    width: 100%;
    border-radius: 8px;
}
</style>
<div class="main-pannel container">
    <div class="content-wrapper">
        <div class="page-header">
        <h1 class="page-title">Add All Pages Photos</h1>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url('addimageData') ?>" class="dropzone" id="my-dropzone" method="POST" enctype="multipart/form-data">
                                <div class="row g-3">
                                    <div class="col-md-6 mt-4">
                                        
                                        <select class="form-control" id="options" onchange="checkRadio(this)">
                                            <option value="city">city</option>
                                            <option value="place">place</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6  hidden" id="placeDropdown" style="display: none;">
                                        <label for="your-surname" class="form-label">place</label>
                                        <select class="js-example-placeholder-single js-states form-control" name="place_id">
                                            <?php foreach ($pages as $place_deatils) { ?>
                                                <option class="form-control" value="<?= $place_deatils['id'] ?>"><?= $place_deatils['place'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="col-md-6  hidden" id="cityDropdown" style="display: none;">
                                        <label for="your-surname" class="form-label">City</label>
                                        <select class="js-example-placeholder-single js-states form-control" name="city_id">
                                            <?php foreach ($city as $city_deatils) { ?>
                                                <option class="form-control" value="<?= $city_deatils['id'] ?>"><?= $city_deatils['city_name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-3 mt-2">
                                                <button id="submit-button" type="button" class="btn btn-dark w-100 fw-bold ">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>


<script>
    Dropzone.autoDiscover = false;
    var formData = new FormData();
    var myDropzone = new Dropzone("#my-dropzone", {
        url: "<?= base_url('') ?>",
        autoProcessQueue: false,
        maxFilesize: 100, // Set the maximum file size to 2 MB
        acceptedFiles: ".jpeg,.jpg,.png,.gif,.WEBP,.avif",
        addRemoveLinks: true
    });


    $(document).ready(function() {
        $('#cityDropdown').show();
    });

    $("#submit-button").on("click", function(e) {
        e.preventDefault();
        $("#my-dropzone").find(":input[name]").each(function() {
            formData.append($(this).attr("name"), $(this).val());
        });
        formData.append('option', $('#options').val());



        myDropzone.getAcceptedFiles().forEach(function(file) {
            formData.append("file[]", file);
        });



        $.ajax({
            url: "<?= base_url('addimageData') ?>",
            type: "POST",
            dataType: 'json',
            data: formData,
            processData: false,
            contentType: false,
            
            success: function(response) {
                if (response.status == "success") {
                    Swal.fire({
                        title: "Success!",
                        text: response.message,
                        icon: "success"
                    }).then(function() {
                        window.location.reload();
                    });
                } else {
                    Swal.fire({
                        title: "Error!",
                        text: response.message,
                        icon: "error"
                    });
                }
            },
            error: function(xhr, status, error) {
              
            }
        });

    });
</script>
<script>

document.addEventListener("DOMContentLoaded", function () {
    checkRadio(); // Call when DOM is fully loaded
});

function checkRadio(el = null) {
    const selectedOption = el ? el.value : document.getElementById("options").value;

    const cityDropdown = document.getElementById("cityDropdown");
    const placeDropdown = document.getElementById("placeDropdown");

    if (selectedOption === 'city') {
        cityDropdown.style.display = "block";
        placeDropdown.style.display = "none";
    } else if (selectedOption === 'place') {
        cityDropdown.style.display = "none";
        placeDropdown.style.display = "block";
    }
}
</script>