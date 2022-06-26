<?php
$page_title = "Faq";


$faq = selectContent($conn, "panel_faq", ['visibility' => 'show']);

if (count($faq) > 0) {
  $availableFaq = true;
}else{
  $availableFaq = false;
}

include 'includes/header.php';
 ?>

<!-- end navbar -->
<header class="page-header" data-background="asset/images/slide01.jpg" data-stellar-background-ratio="1.15" style="background-repeat:none; background-size:cover;">
	<div class="container">
		<h1>FAQ</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inc</p> -->
		  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item active text-white" aria-current="page">Faq</li>
  </ol>
	</div>
	<!-- end container -->
</header>
<!-- end page-header -->
<section class="faq">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="accordion" id="accordion" role="tablist">
          <?php if ($availableFaq): ?>

            <?php foreach ($faq as $key => $value): ?>

                <div class="card">
                  <div class="card-header" role="tab" id="heading<?=$key?>"> <a data-toggle="collapse" href="#collapse<?=$key?>" aria-expanded="true" aria-controls="collapse<?=$key?>"><?=$value['input_question']?></a> </div>
                  <div id="collapse<?=$key?>" class="collapse <?php if($key == 0):?>show<?php endif;?>" role="tabpanel" aria-labelledby="heading<?=$key?>" data-parent="#accordion">
                    <div class="card-body"> <?=$value['text_answer']?> </div>
                    <!-- end card-body -->
                  </div>
                  <!-- end collapse -->
                </div>
                <!-- end card -->
            <?php endforeach; ?>
          <?php endif; ?>
          </div>
          <!-- end accordion -->
			</div>
			<!-- end col-8 -->
			<div class="col-md-4">
				<aside class="sidebox">
					<i class="fas fa-question-circle"></i>
					<h3>Support Center</h3>
				 <a style="color: #fff; border:2px solid white; text-decoration:none; padding:3px 20px 3px 20px" href="/contact">Contact Us</a>
				</aside>
				<!-- end sidebox -->
			</div>
			<!-- end col-4 -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</section>
<!-- end faq -->
<?php include 'includes/footer.php'; ?>
