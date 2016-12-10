<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CROP THE PROFILE PHOTO</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/progressbar.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/progress-wizard.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/dist/cropper.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/main.css') ?>" rel="stylesheet">

</head>
<body>
<br>

<ul class="progress-indicator">
    <li class="completed">
        <span class="bubble"></span>
        <a href="<?php echo base_url('') ?>" style="text-decoration:none;"><h4 class="finishlink">Login</h4></a>
    </li>
    <li class="completed">
        <span class="bubble"></span>
        <a href="<?php echo base_url('index.php/select_profile') ?>" style="text-decoration:none;"><h4
                    class="finishlink">Select Pic</h4></a>
    </li>
    <li>
        <span class="bubble"></span>
        <h4 class="currentlink">Crop Pic</h4>
    </li>
    <li>
        <span class="bubble"></span>
        <h4 class="unfinishlink">Select Cover</h4>
    </li>
    <li>
        <span class="bubble"></span>
        <h4 class="unfinishlink">Set Cover</h4>
    </li>
</ul>


<div class="container">

    <div class="row">

        <div class="text-center">

            <h1>CROP THE PROFILE PICTURE TO REQUIRED SIZE</h1>

            <br>
        </div>

    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="img-container">
                <img src="<?php echo base_url('/assets/img/org_profile' . $userid . '.jpg?' . time()) ?>" alt="Picture">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="text-center">


            <div class="btn-group btn-group-crop">
                <button class="btn btn-primary" data-method="getCroppedCanvas" type="button">
            <span class="docs-tooltip" data-toggle="tooltip" title="">
              CROP IMAGE
            </span>
            </div>
        </div>
        <br>

        <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true"
             aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal" type="button" aria-hidden="true">&times;</button>
                        <div class="container">
                            <div class="row">

                                <h4 class="modal-title text-center " id="getCroppedCanvasTitle">CROPPED IMAGE</h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body" id="croppedImageModal"></div>

                    <div class="row">
                        <div class="text-center">
                            <button class="btn btn-success " id="saveimage" data-method="getData" data-option=""
                                    data-target="putData" type="button">SELECT
                            </button>
                        </div>

                    </div>
                    <br>


                </div>
            </div>
        </div>


    </div>


</div>


<div class="docs-alert"><span class="warning message"></span></div>

<form class="hidden" id="cropdata" method="POST" action="<?php echo base_url('save') ?>">
    <input type="text" name="x" id="xd"/>
    <input type="text" name="y" id="yd"/>
    <input type="text" name="w" id="xsd"/>
    <input type="text" name="h" id="ysd"/>

    <input type="submit" name="h" id="ysd"/>
</form>


<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/dist/cropper.js') ?>"></script>
<script src="<?php echo base_url('assets/js/main.js') ?>"></script>
</body>
</html>
