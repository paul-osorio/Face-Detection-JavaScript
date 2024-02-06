<?php
include('../common/header.php');
include('../common/sidebar.php');
?>
<style>
    #video-container {
        margin: 0;
        padding: 0;
        width: 720px;
        height: 560px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }
</style>

<div class="w-100 vh-100">

    <div class="p-3">
        <div class="d-flex" style="gap:10px">
            <div class="">
                <div class="" id="video-container">
                    <video id="video" class="bg-light rounded-3 border-2 border" style="height: auto; width: 100%;" autoplay muted></video>
                    <div class="videoplaceholder w-100 h-100">
                        <div class="bg-light rounded-3 flex-column border-2 border d-flex justify-content-center align-items-center  w-100 h-100">
                            <i class="fa-duotone fa-video fa-10x"></i>
                            <p class="text-muted">No video available</p>
                        </div>
                    </div>
                </div>
                <br>
                <button type="button" class="btn btn-primary w-100" id="startbtn">
                    <i class="fa-duotone fa-camera"></i>
                    START VIDEO
                </button>
                <button type="button" class="btn btn-danger w-100" id="endbtn">
                    <i class="fa-duotone fa-camera"></i>
                    END VIDEO
                </button>
            </div>
            <div class="border p-2 rounded-3 w-100">


            </div>
        </div>
    </div>

</div>

<script defer src="../assets/js/face-api.min.js"></script>
<script defer src="../assets/js/script.js"></script>

<script>
    $('#video').hide();
    $('#endbtn').hide();
    $(document).ready(function() {
        $('#startbtn').click(function() {

            $('#video').show();
            $('.videoplaceholder').hide();
            startFaceDetection();

            $('#startbtn').hide();
            $('#endbtn').show();

        })
    })

    $('#endbtn').click(function() {
        $('#video').hide();
        $('.videoplaceholder').show();
        stopFaceDetection();
        $('#startbtn').show();
        $('#endbtn').hide();
    })
</script>



<?php
include('../common/footer.php');
?>