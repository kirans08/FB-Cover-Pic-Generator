<!DOCTYPE html>
<html lang="en">
<head>
    <title>SELECT PROFILE PHOTO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/select_style.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/progressbar.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/progress-wizard.min.css') ?>" rel="stylesheet">
   <script  src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
   <script  src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>





</head>
<body >
  <br>

        <ul class="progress-indicator">
            <li class="completed">
                <span class="bubble"></span>
                  <a href="<?php echo base_url('') ?>" style="text-decoration:none;"><h4 class="finishlink">Login</h4></a>
            </li>
            <li >
                <span class="bubble"></span>
                <h4 class="currentlink">Select Pic</h4>
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


    <div class="row" >

        <div class="text-center">

            <h1>CHOOSE THE REQUIRED PROFILE PHOTO TO USE</h1>


        </div>

    </div>

    <?php $i=1;
    foreach ($url as $link):?>

    <br>
    <h1 class="coveroptions">PROFILE PICTURE <?php echo $i?></h1>
    <br>

    <div class="row">
      <a href="<?php echo  base_url('crop_profile/'.$i) ?>"><img src="<?php echo $link ?>"
      class="img-rounded col-xs-6 col-xs-offset-3 " >
  </a>
  <?php $i++; ?>
  </div>

<?php endforeach;?>
      

 



</div>
<br><br>
</body>
</html>