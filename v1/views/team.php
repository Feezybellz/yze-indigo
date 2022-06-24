<?php
$teams = selectContent($conn, "panel_teams", ['visibility' => 'show']);

include 'includes/header.php';
 ?>
<!-- end navbar -->
<header class="page-header" data-background="asset/images/slide01.jpg" data-stellar-background-ratio="1.15">
	<div class="container">
		<h1>Our Team</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
          <figure><img src="<?=$value['image_1']?>" alt="Image" class="pr-5">
            <figcaption style="width:auto">
              <!-- <h4><span>John</span> Doe</h4> -->
              <h4><span><?=wordwrap($value['input_name'] ?? "", 10, '<br />')?></span></h4>
              <small><?=$value['input_title']?></small>
              <ul>
                <li><a href="#"><i class="fab fa-linkedin-in"></i>LINKEDIN</a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i>FACEBOOK</a></li>
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
