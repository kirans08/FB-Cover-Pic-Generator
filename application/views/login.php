<!DOCTYPE html>
<html lang="en" >
<head>
    <title>RITHU COVER PHOTO GENERATOR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="http://coverphoto.rithu.org/assets/img/logo.png" />
   <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/progressbar.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/progress-wizard.min.css') ?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
   <script  src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
   <script  src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
   <script type="text/javascript">
    $(document).ready(function(){
        $('.login-button').hover(function(){
            $(this).toggleClass("onHover");
        });

    });
        
</script>

</head>
<body>
 <br>

        <ul class="progress-indicator">
            <li class="">
                <span class="bubble"></span>
                <h4 class="currentlink">Login</h4>
            </li>
            <li >
                <span class="bubble"></span>
                <h4 class="unfinishlink">Select Pic</h4>
            </li>
            <li >
                <span class="bubble"></span>
                <h4 class="unfinishlink">Crop Pic</h4>
            </li>
            <li >
                <span class="bubble"></span>
                <h4 class="unfinishlink">Select Cover</h4>
            </li>
            <li>
                <span class="bubble"></span>
                <h4 class="unfinishlink">Set Cover</h4>
            </li>
        </ul>

<div class="container">

    <div class="row" style="margin-top:75px">

        <div class="text-center">

            <h1 id="main-header" class="text-success ">RITHU COVER PHOTO GENERATOR</h1>


        </div>

    </div>


    <div class="row">

        <div class="text-center " style="margin-top:75px">

            <a class="login-button" href="<?php echo $login_url ?>" class="btn btn-lg" role="button">Login with Facebook</a>

        </div>

    </div>
    <br>
    <br>
    <br>
    

</div>
</body>
</html>