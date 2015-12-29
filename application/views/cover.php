<!DOCTYPE html>
<html  >
<head>
    <title>PREVIEW COVER PHOTO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/cover_style.css') ?>" rel="stylesheet">

   <link href="<?php echo base_url('assets/css/progressbar.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/progress-wizard.min.css') ?>" rel="stylesheet">
   <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
   <script  src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
   <script  src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
   <script type="text/javascript">
    $(document).ready(function(){
        $('.setcover-button').hover(function(){
            $(this).toggleClass("onHover");
        });

    });
        
</script>

</head>
<body >


<br>

        <ul class="progress-indicator">
            <li class="completed">
                <span class="bubble"></span>
                  <a href="<?php echo base_url('') ?>" style="text-decoration:none;"><h4 class="finishlink">Login</h4></a>
            </li>
            <li class="completed">
                <span class="bubble" ></span>
                <a href="<?php echo base_url('select_profile') ?>" style="text-decoration:none;"><h4 class="finishlink">Select Pic</h4></a>
            </li>
            <li class="completed">
                <span class="bubble"></span>
                <a href="<?php echo base_url('crop_profile/'.$picid) ?>" style="text-decoration:none;"><h4 class="finishlink">Crop Pic</h4></a>
            </li>
            <li class="completed">
                <span class="bubble"></span>
                <a href="<?php echo base_url('select_cover') ?>" style="text-decoration:none;"><h4 class="finishlink">Select Cover</h4></a>
            </li>
            <li>
                <span class="bubble"></span>
                <h4 class="currentlink">Set Cover</h4>
            </li>
        </ul>

<div class="container">

    <div class="row" >

        <div class="text-center" id="main-heading">

            <h1 >COVER PHOTO PREVIEW</h1>


        </div>

    </div>

    <div class="row">
      <img src="<?php echo base_url('assets/img/temp'.$userid.'.jpg?'.time()) ?>"
      class="img-rounded col-xs-10 col-xs-offset-1" id="coverpic" >
  </div>

    <div class="row">

        <div class="text-center " style="margin-top:2em">

            <a href="https://www.facebook.com/dialog/share?app_id=751168788325921&display=touch&href=http://coverphoto.rithu.org&redirect_uri=http://coverphoto.rithu.org/post_cover" class="btn btn-lg  setcover-button" role="button">SET AS COVER PHOTO</a>

        </div>

    </div>

</div>
<br>
<br>

</body>
</html>