	<?php
$about = selectContent($conn, "read_about", ['visibility' => 'show'])[0];
$vision = selectContent($conn, "read_vision", ['visibility' => 'show'])[0];
$mission = selectContent($conn, "read_mission", ['visibility' => 'show'])[0];
$our_values = selectContent($conn, "read_our_values", ['visibility' => 'show'])[0];

$page_title = "About";

include 'includes/header.php'; ?>

<header class="page-header" data-background="<?=$about['image_1']?>" data-stellar-background-ratio="1.15" style="background-repeat:none; background-size:cover;">
	<div class="container">
		<h1>About Us</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor. </p> -->
		  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item active text-white" aria-current="page">About</li>
  </ol>
	</div>
	<!-- end container -->
</header>
<!-- end page-header -->
<section class="about-content">
	<div class="container">
		<div class="row">
			<div class="col-12">
				  <h2><span><?=$site_name?></span></h2>
        <!-- <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ex</h5> -->
			</div>
			<!-- end col-12 -->
			 <div class="col-lg-7">
        <p><?=$about['text_body']?></p>
      </div>
      <!-- en col-7 -->
      <div class="col-lg-5">
        <img src="<?=$about['image_1']?>" alt="">
      </div>
      <!-- end col-5 -->
      <div class="container">
		    <div class="row">
		      <div class="col-lg-4 col-md-6">
		        <div class="office-box">
		          <h5>Our Vision</h5>
		          <address>
		          <?=$vision['text_body']?>
		          </address>
		        </div>
		        <!-- end office-box --> 
		      </div>
		      <!-- end col-4 --> 

		       <div class="office-box">
		          <h5>Our Mission</h5>
		          <address>
		          <?=$mission['text_body']?>
		          </address>
		        </div>
		        <!-- end office-box --> 
		      </div>
		      <!-- end col-4 --> 

		       <div class="office-box">
		          <h5>Our Values</h5>
		          <address>
		          <?=$our_values['text_body']?>
		          </address>
		        </div>
		        <!-- end office-box --> 
		      </div>
		      <!-- end col-4 --> 

		    </div>
		    <!-- end row --> 
		  </div>
    	 



		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</section>
<!-- end about-content -->

<?php include 'includes/footer.php'; ?>
