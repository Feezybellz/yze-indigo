<?php

$page_title = isset($page_title) ? ("- ".$page_title) : "";

 ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="format-detection" content="telephone=no">
<meta name="theme-color" content="#282828"/>
<title><?=$site_name?> <?=$page_title?></title>
<meta name="author" content="Themezinho">
<meta name="description" content="<?=$site_name?> | Real Estate & Luxury Homes">
<meta name="keywords" content="<?=$site_name?>, realestate, flat, apartment, benefits, facility, consultation, home, house, studio, pool, animation, transportation">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="<?=$site_name?> | Real Estate & Luxury Homes">
<meta property="og:image" content="preview.html">
<meta property="og:site_name" content="<?=$site_name?> <?=$page_title?>">
<meta property="og:title" content="<?=$site_name?>">
<meta property="og:type" content="website">
<meta property="og:url" content="/">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@<?=$site_name?>">
<meta name="twitter:creator" content="@<?=$site_name?>">
<meta name="twitter:title" content="<?=$site_name?> <?=$page_title?>">
<meta name="twitter:description" content="<?=$site_name?> | Real Estate & Luxury Homes">
<meta name="twitter:image" content="preview.html">

<?php if (isset($style_color)): ?>
  <meta name="theme-color" content="#<?php echo $style_color ?>">
<?php else: ?>
  <meta name="theme-color" content="#28292C">
<?php endif; ?>
<?php
  if($websiteStyle[0]['status'] === "demo"){
 ?>
 <link rel="stylesheet" href="/da/assets/css/style.css">
<?php  }?>

<!-- FAVICON FILES -->
<link href="/asset/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
<link href="/asset/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
<link href="/asset/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
<link href="/asset/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
<link href="/asset/ico/favicon.png" rel="shortcut icon">

<link rel="stylesheet" type="text/css" href="/real3dflip/deploy/css/flipbook.style.css">
<link rel="stylesheet" type="text/css" href="/real3dflip/deploy/css/font-awesome.css">


<!-- CSS FILES -->
<link rel="stylesheet" href="/asset/css/fontawesome.min.css">
<link rel="stylesheet" href="/asset/css/animate.min.css">
<link rel="stylesheet" href="/asset/css/fancybox.min.css">
<link rel="stylesheet" href="/asset/css/odometer.min.css">
<link rel="stylesheet" href="/asset/css/swiper.min.css">
<link rel="stylesheet" href="/asset/css/bootstrap.min.css">
<link rel="stylesheet" href="/asset/css/style.css">





    <?php
    if(isset($style_color)):?>
      <?php include "style.php";?>
      <style media="screen">
        * a{
          color:#fff;
        }
      </style>

    <?php endif?>

</head>
<body>
<div class="preloader">
  <div class="layer"></div>
  <!-- end layer -->
  <div class="inner">
    <figure><img src="/asset/images/preloader.gif" alt="Image"></figure>
    <p><span class="text-rotater" data-text="<?=(implode(" | ", $metaText))?>">Loading</span></p>
  </div>
  <!-- end inner -->
</div>
<!-- end prelaoder -->
<div class="transition-overlay">
  <div class="layer"></div>
</div>
<!-- end transition-overlay -->
<div class="side-navigation">
  <div class="menu">
    <ul>
      <li><a href="/home">HOME</a></li>
      <li><a href="#">ABOUT</a>
          <ul>
            <li><a href="/about">About Us</a></li>
            <li><a href="/team">Our Team</a></li>
          </ul>
        </li>
      <li><a href="/project">PROJECTS</a></li>
      <!-- <li><a href="/facilities">FACILITIES</a></li> -->
      <li><a href="/gallery">GALLERY</a></li>
      <li><a href="/faq">FAQ</a></li>
      <li><a href="/contact">CONTACT</a></li>
    </ul>
  </div>
  <!-- end menu -->
  <div class="side-content">
    <figure> <img src="<?=$logo_directory?>" alt="Image"> </figure>
    <p><?=previewBodyWithUrl($description, 25, "/about")?></p>
    <!-- <ul class="gallery">
      <li><a href="/asset/images/gallery-thumb01.jpg" data-fancybox><img src="/asset/images/gallery-thumb01.jpg" alt="Image"></a></li>
      <li><a href="/asset/images/gallery-thumb02.jpg" data-fancybox><img src="/asset/images/gallery-thumb02.jpg" alt="Image"></a></li>
      <li><a href="/asset/images/gallery-thumb03.jpg" data-fancybox><img src="/asset/images/gallery-thumb03.jpg" alt="Image"></a></li>
    </ul> -->
    <address>
    <?=$site_address?>
    </address>
    <h6> <a href="tel:<?=$site_phone?>"><?=$site_phone?></a> </h6>
    <!-- <h6>+234 (0) 916 236 7382</h6> -->
    <p><a href="<?=$site_email?>"><?=$site_email?></a></p>
    <ul class="social-media">
      <li><a href="<?=$fbLink?>"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="<?=$igLink?>"><i class="fab fa-twitter"></i></a></li>
      <li><a href="<?=$linkedinLink?>"><i class="fab fa-linkedin-in"></i></a></li>
      <li><a href="<?=$twitterLink?>"><i class="fab fa-twitter"></i></a></li>
    </ul>
    <small>© <?=date("Y")?> <?=$site_name?> | <?php byMckodevFooter()?></small> </div>
  <!-- end side-content -->
</div>
<!-- end side-navigation -->
<nav class="navbar">
  <div class="container">
    <div class="upper-side">
      <div class="logo"> <a href="/home"><img src="<?=$logo_directory?>" alt="Image"></a> </div>
      <!-- end logo -->
      <div class="phone-email">
        <h5>
          <span class="fa fa-phone"></span> &nbsp; <a href="tel:<?=$site_phone?>"><?=$site_phone?></a>
          <!-- <img src="/asset/images/icon-phone.png" alt="Image"> -->
        </h5>
        <small>
          <span class="fa fa-envelope"></span> &nbsp; &nbsp; <a href="mailto:<?=$site_email?>"><?=$site_email?></a>
        </small>
      </div>
      <!-- end phone -->
      <div class="language"> </div>
      <!-- end language -->
      <div class="hamburger"> <span></span> <span></span> <span></span><span></span> </div>
      <!-- end hamburger -->
    </div>
    <!-- end upper-side -->
    <div class="menu">
      <ul>
        <li><a href="/home">HOME</a></li>
        <li><a href="#">ABOUT</a>
            <ul>
              <li><a href="/about">About Us</a></li>
              <li><a href="/team">Our Team</a></li>
            </ul>
          </li>
        <li><a href="/project">PROJECTS</a></li>
        <li><a href="/gallery">GALLERY</a></li>
        <!-- <li><a href="/facilities">FACILITIES</a></li> -->
        <li><a href="/faq">FAQ</a></li>
        <li><a href="/contact">CONTACT</a></li>
      </ul>
    </div>
    <!-- end menu -->
  </div>
  <!-- end container -->
</nav>
