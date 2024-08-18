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
</style>



<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <h1 class="mb-3">Add All Pages Photos</h1>
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

<script>
    Dropzone.autoDiscover = false;
    var formData = new FormData();
    var myDropzone = new Dropzone("#my-dropzone", {
        url: "<?= base_url('') ?>",
        autoProcessQueue: false,
        maxFilesize: 100, // Set the maximum file size to 2 MB
        acceptedFiles: ".jpeg,.jpg,.png,.gif,.WEBP",
        addRemoveLinks: true
    });


    $(document).ready(function() {
        $('#cityDropdown').show();
    });

    $("#submit-button").on("click", function(e) {
        // alert('aa');
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
    function checkRadio(el) {

        window.onload = function() {
            if (!window.location.hash) {
                window.location = window.location + '#cityDropdown';
                window.location.reload();
            }
        }
        var cityDropdown = document.getElementById("cityDropdown");
        var placeDropdown = document.getElementById("placeDropdown");

        var option = el.value;

        if (option == 'city') {
            cityDropdown.style.display = "block";
            placeDropdown.style.display = "none";
        } else if (option == 'place') {
            cityDropdown.style.display = "none";
            placeDropdown.style.display = "block";
        }



    }
</script>