<?php
$hash_id = $_GET['id'];

$project = array_reverse(selectContent($conn, "panel_projects", ['visibility' => 'show', 'hash_id' => $hash_id]));

if (count($project) > 0) {
  $project = $project[0];
  $banner = $project['image_2'];
  $page_title = $project['input_title'];

  $projectGallery = selectContent($conn, "images", ['asset_hash_id' => $hash_id]);

  if(count($projectGallery) > 0){
    $availableProjectGallery = true;
  }else{
    $availableProjectGallery = false;
  }
}else{
  header("Location:/404");
  exit;
}
 include 'includes/header.php';
  ?>

  <style media="screen">
  @media (max-width: 480px) {
           .mck-responsive {
               height:auto;
           }
       }
  </style>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->



<!-- end navbar -->
<header class="page-header" data-background="<?=$banner?>" data-stellar-background-ratio="1.15">
  <div class="container">
    <h1><?=$project['input_title']?></h1>
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inc</p> -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/home">Home</a></li>
      <li class="breadcrumb-item active text-white" aria-current="page"><?=$project['input_title']?></li>
    </ol>
  </div>
  <!-- end container -->
</header>
<!-- end page-header -->
<section class="apartment p-3 pb-5">
  <div class="container">
    <div class="row">
      <div class="row col-md-12">
        <h2><span><?=$project['input_title']?></span></h2>
        <h5>
          By aiming to take the life quality to an upper level with the whole realized Projects of luxury.
        </h5>
        <div class="property-infos col-md-4">
        	<span class="odometer"brabus data-count="<?=$project['input_price']?>" data-status="yes" data-text="NGN">0</span>
        	<p>Price of project</p>

        </div>
        <!-- end property-infos -->
        <div class="col-md-7">
          <img src="<?=$project['image_2']?>" alt="Image" class="">
        </div>
      </div>
      <!-- end col-12 -->
      <div class="col-md-12">
        <br>
        <p>
          <?=$project['text_body']?>
        </p>
      </div>
      <!-- end col-5 -->

      <?php if ($availableProjectGallery): ?>

        <?php foreach ($projectGallery as $key => $value): ?>
          <div class="col-md-4 wow fadeInUp" data-wow-delay="0s">
            <figure data-stellar-ratio="1.07"> <a href="<?=$value[isset($value['image_1']) ? 'image_1' :'image_2']?>" data-fancybox><img src="<?=$value[isset($value['image_1']) ? 'image_1' :'image_2']?>" alt="Image"></a> </figure>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

      <!-- end col-4 -->
      <style media="screen">
        .linnk{
          border: 2px solid #CCB034;
          padding: 10px 35px;
          font-size: 20px;
          color: #CCB034;
        }
        .linnk:hover{
          text-decoration: none;
          background: #CCB034;
          border-color: #CCB034;
          color: #FFF;
        }
      </style>

  </div>


       <!-- end gallery-container -->
       </div>
       <!-- end gallery-slider -->
      </div>
      <!-- en col-12 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->


</section>

<!-- end apartment -->
<section class="property-customization pt-5 pb-5 p-2">
  <!-- <div class="video-bg">
    <video src="asset/videos/video01.mp4" loop autoplay muted></video>
  </div>
  end video-bg -->
  <div class="container mck-responsive" id="fileViewer" style="height:80vh">
    <!-- <div class="row" style="height:500px"> -->

        <div id="projFile1"/>
    <!-- </div> -->
  </div>
</section>
<!-- end property-customization -->

<section class="property-customization" style="background:transparent">
  <div class="container d-flex justify-content-center">
    <div class="row d-flex justify-content-center">
      <!-- <div class="col-md-4">
        <a href="#">DOWNLOAD BROCURE <i class="fas fa-caret-right"></i></a>
      </div> -->
      <div class="col-md-6">
        <a class="btn btn-primary" style="color:white; background-color:#CCB034; border:2px solid #CCB034;" href="<?=$project['input_faq_link']?>">VIEW FAQ <i class="fas fa-caret-right"></i></a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-primary" style="color:white; background-color:#CCB034; border:2px solid #CCB034;" href="<?=$project['input_subscription_form_link']?>">SUBSCRIPTION FORM <i class="fas fa-caret-right"></i></a>
      </div>
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>

<script src="/real3dflip/deploy/js/flipbook.min.js"></script>


<script type="text/javascript">

$(document).ready(function () {
  // console.log($("#book1"))
  $("#projFile1").flipBook({
    // pdfUrl:'//www.indigodevelopments.com/_files/ugd/f844ed_cb55094cbe9f4ab0b0feaeae18c75157.pdf'
    pdfUrl:'<?=$project['input_brochure_link']?>'
  })

  // fileViewer.style.height = "auto";
  // fileViewer.style.clear = "both";
})
</script>
