<!DOCTYPE html>
<html lang="en">
<head>
    <title>CHOOSE COVER PHOTO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/select_style.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/progressbar.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/progress-wizard.min.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

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
        <a href="<?php echo base_url('select_profile') ?>" style="text-decoration:none;"><h4 class="finishlink">Select
                Pic</h4></a>
    </li>
    <li class="completed">
        <span class="bubble"></span>
        <a href="<?php echo base_url('crop_profile/' . $picid) ?>" style="text-decoration:none;"><h4 class="finishlink">
                Crop Pic</h4></a>
    </li>
    <li>
        <span class="bubble"></span>
        <h4 class="currentlink">Select Cover</h4>
    </li>
    <li>
        <span class="bubble"></span>
        <h4 class="unfinishlink">Set Cover</h4>
    </li>
</ul>


<div class="container">

    <div class="row">

        <div class="text-center white_text">

            <h1>CHOOSE THE REQUIRED COVER PHOTO TEMPLATE</h1>


        </div>

    </div>
    <br>
    <h1 class="coveroptions">COVER 1</h1>
    <br>

    <div class="row">
        <a href="<?php echo base_url('create_cover/1') ?>"><img src="<?php echo base_url('assets/img/cover1.jpg') ?>"
                                                                class="img-rounded col-xs-10 col-xs-offset-1 ">
        </a>
    </div>
    <br>
    <h1 class="coveroptions">COVER 2</h1>
    <br>

    <div class="row">
        <a href="<?php echo base_url('create_cover/2') ?>"><img src="<?php echo base_url('assets/img/cover2.jpg') ?>"
                                                                class="img-rounded col-xs-10 col-xs-offset-1 ">
        </a>
    </div>
    <br>
    <h1 class="coveroptions">COVER 3</h1>
    <br>

    <div class="row">
        <a href="<?php echo base_url('create_cover/3') ?>"><img src="<?php echo base_url('assets/img/cover3.jpg') ?>"
                                                                class="img-rounded col-xs-10 col-xs-offset-1 ">
        </a>
    </div>
    <br>
    <h1 class="coveroptions">COVER 4</h1>
    <br>

    <div class="row">
        <a href="<?php echo base_url('create_cover/4') ?>"><img src="<?php echo base_url('assets/img/cover4.jpg') ?>"
                                                                class="img-rounded col-xs-10 col-xs-offset-1 ">
        </a>
    </div>

    <br>
    <h1 class="coveroptions">COVER 5</h1>
    <br>

    <div class="row">
        <a href="<?php echo base_url('create_cover/5') ?>"><img src="<?php echo base_url('assets/img/cover5.jpg') ?>"
                                                                class="img-rounded col-xs-10 col-xs-offset-1 ">
        </a>
    </div>


</div>
<br><br>
</body>
</html>