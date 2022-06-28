<?php
$teams = selectContent($conn, "panel_teams", ['visibility' => 'show']);

include 'includes/header.php';
 ?>
<!-- end navbar -->
<header class="page-header" data-background="asset/images/slide01.jpg" data-stellar-background-ratio="1.15">
	<div class="container">
		<h1>Our Team</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
		  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item active text-white" aria-current="page">Sales Team</li>
  </ol>
	</div>
	<!-- end container -->
</header>
<!-- end page-header -->
<section class="sales-team">
  <div class="container">
    <div class="row">
      <?php foreach ($teams as $key => $value): ?>

        <div class="col-md-6">
          <figure><img src="<?=$value['image_1']?>" alt="Image">
            <figcaption class="pl-2">
              <!-- <h4><span>John</span> Doe</h4> -->
              <h4><span><?=wordwrap($value['input_name'] ?? "", 10, '<br />')?></span></h4>
              <small><?=$value['input_title']?></small>
              <ul>
                <?php if ($value['input_linkedIn']): ?>
                <li><a href="<?=$value['input_linkedIn']?>" style="color:#<?=$style_color?>"><i style="font-size:15px;"class="fab fa-linkedin-in"></i></a></li>
                  
                <?php endif ?>

                <?php if ($value['input_facebook']): ?>
                <li><a href="<?=$value['input_facebook']?>" style="color:#<?=$style_color?>"><i style="font-size:15px;"class="fab fa-facebook"></i></a></li>
                  
                <?php endif ?>

                <?php if ($value['input_twitter']): ?>
                <li><a href="<?=$value['input_twitter']?>" style="color:#<?=$style_color?>"><i style="font-size:15px;"class="fab fa-twitter"></i></a></li>
                  
                <?php endif ?>

                <?php if ($value['input_instagram']): ?>
                <li><a href="<?=$value['input_instagram']?>" style="color:#<?=$style_color?>"><i style="font-size:15px;"class="fab fa-instagram"></i></a></li>
                  
                <?php endif ?>


              </ul>
            </figcaption>
          </figure>
        </div>

        <!-- end col-6 -->
      <?php endforeach; ?>


    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end sales-team -->
<?php include 'includes/footer.php'; ?>
