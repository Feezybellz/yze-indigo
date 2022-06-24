
copy the demo folder into the v1 folder

===============================
copy /da folder to /www folder

=========================
Then add this to the <head> of default header.php

<?php
  if($websiteStyle[0]['status'] === "demo"){
 ?>
<link rel="stylesheet" href="/da/assets/css/style.css">
<?php  }?>

=======================
create style.php in your includes folder

copy the template default style.CSS with style tag

  <style media="screen">
    default template style
  </style>

and replace the default color with #<?php echo $style_color;?>

Then add this to the <head> in the header.php also

<?php if (isset($style_color)){ ?>
 <?php include APP_PATH."/views/includes/style.php";?>

<?php } ?>

==========================

Then add this to the footer.php

<?php
  if($websiteStyle[0]['status'] === "demo"){
 ?>
<?php
include APP_PATH.'/demo/includes/demo.php';
 ?>
 <script src="/da/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
 <script src="/da/assets/js/pcoded.min.js"></script>
 <script src="/da/demo.min.js"></script>

 <?php
}
  ?>

==============
Replace the index.php file with the one in this demo folder
import the read_website_info.sql and the website_status.sql files into your database
