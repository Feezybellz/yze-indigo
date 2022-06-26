
<?php
$page_title = "Contact Us";
$about = selectContent($conn, "read_about", ['visibility' => 'show'])[0];

include 'includes/header.php';
 ?>

<!-- end navbar -->
<header class="page-header" data-background="<?=$about['image_1']?>" data-stellar-background-ratio="1.15" style="background-repeat:none; background-size:cover;">
	<div class="container">
		<h1>Contact</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inc</p> -->
		  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
  </ol>
	</div>
	<!-- end container -->
</header>
<!-- end page-header -->
<section class="contact">
  <div class="container">
    <div class="row align-items-center">

   	<div class="col-lg-6 wow fadeInUp"> <b>07</b>
        <h4><span><?=$site_name?></span></h4>
        </div>
        <!-- end col-6 -->

        <!-- end col-3 -->
	  </div>
       <!-- end row -->
    <div class="row col-md-12">
      <div class="row col-md-6" style="margin-top: 80px; margin-left: 10px">
        <div class="col-md-6 wow fadeInUp">
        <address>
          <strong>Visit Us</strong>
          <!-- <h5>Mainland Business Office</h5> -->
          <p><?=$site_address?></p>
          <!-- <br>
          <h5>Lekki Sales Office </h5>
          <p>Km 18, Lekki Epe Expressway , Agungi, Lekki, Lagos, Nigeria</p> -->
        </address>
       </div>
        <!-- end col-3 -->
        <div class="col-md-6 wow fadeInUp">
        <address>
          <strong>Say Hello</strong>
          <p><a href="mailto:<?=$site_email?>" style="color:#000"><?=$site_email?> <br> </a>
            <a href="tel:<?=$site_phone?>" style="color:#000"><?=$site_phone?></a>
          <!-- <br>+234 (0) 916 236 7382 -->
        </p>
        </address>
     </div>
      </div>
        <!-- end col-6 -->
        <div class="col-md-6">
          <small>Send us a message </small>
        	<div class="contact-form">
			 <form id="contact" name="contact" method="post">
          <div class="form-group">
            <input type="text" name="name" id="name" autocomplete="off" required>
             <span>Your name</span>
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <input type="text" name="email" id="email" autocomplete="off" required>
            <span>Your e-mail</span>
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <textarea name="message" id="message" autocomplete="off" required></textarea>
            <span>Your message</span>
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <button id="submit" type="submit" name="submit">
				Submit
         </button>
          </div>
          <!-- end form-group -->
        </form>
        <!-- end form -->
         <div class="form-group">
          <div id="success" class="alert alert-success wow fadeInUp" role="alert"> Your message was sent successfully! We will be in touch as soon as we can. </div>
        <!-- end success -->
        <div id="error" class="alert alert-danger wow fadeInUp" role="alert"> Something went wrong, try refreshing and submitting the form again. </div>
        <!-- end error -->
        </div>
        <!-- end form-group -->
        </div>
        <!-- end contact-form -->
        </div>
        <!-- end col-6 -->
   </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end contact -->

<?php include 'includes/footer.php'; ?>
