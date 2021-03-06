<?php
$hash_id = $_GET['id'];

$availableProjectGallery = false;

$project = array_reverse(selectContent($conn, "panel_projects", ['visibility' => 'show', 'hash_id' => $hash_id]));

if (count($project) > 0) {
  $project = $project[0];
  $banner = $project['thumbnail'] ?? $project['image_2'];
  $page_title = $project['input_title'];

  $projectGallery = selectContent($conn, "images", ['asset_hash_id' => $hash_id]);

  $projectAmenities = selectContent($conn, "addition_amenities_and_facilities", ['tb_link' => $hash_id]);

  if (count($projectAmenities) > 0) {
    $projectAmenitiesAvailable = true;
  }else{
    $projectAmenitiesAvailable = false;
  }

  if(count($projectGallery) > 0){

    $mainImageKey = array_search($banner, array_column($projectGallery, 'image_1'));
    unset($projectGallery[$mainImageKey]);

    if (count($projectGallery) > 0) {
          $availableProjectGallery = true;

    }

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
 @media (max-width: 480px) {
          .btn-responsive {
              margin-top:20px;
          }
      }
  </style>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->



<!-- end navbar -->
<header class="page-header" data-background="<?=$banner?>" data-stellar-background-ratio="1" style="background-repeat:none; background-size:cover;">
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
        <h5 style="visibility: hidden;">
          By aiming to take the life quality to an upper level with the whole realized Projects of luxury.
        </h5>
        <div class="property-infos col-md-4">
          <?php if ($project['input_project_type']): ?>
            <span style="font-weight:bold;"><?=$project['input_project_type']?></span>
            <p>Project Type</p>
          <?php endif ?>

          <?php if ($project['input_plots_available']): ?>
            <span style="font-weight:bold;"><?=$project['input_plots_available']?></span>
            <p>Plots Available</p>
          <?php endif ?>

          <?php if ($project['input_title_document']): ?>
            <span style="font-weight:bold;"><?=$project['input_title_document']?></span>
            <p>Title Document</p>
          <?php endif ?>

          <?php if ($project['input_estate_land_area']): ?>
            <span style="font-weight:bold;"><?=$project['input_estate_land_area']?></span>
            <p>Estate Land Area</p>
          <?php endif ?>

          <?php if ($project['input_infrastructure_development_period']): ?>
            <span style="font-weight:bold;"><?=$project['input_infrastructure_development_period']?></span>
            <p>Infrastructure Development Period</p>
          <?php endif ?>

          <?php if ($project['input_location']): ?>
            <span style="font-weight:bold;"><?=$project['input_location']?></span>
            <p>Project Location</p>
          <?php endif ?>
          
        	

          <?php //=previewBodyWithElipsces($project['text_body'], 50)?>

        </div>
        <!-- end property-infos -->
        <div class="col-md-7">
          <img src="<?=$project['thumbnail'] ?? $project['image_2']?>" alt="Image" class="">
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
      <!-- </div> -->
      <!-- en col-12 -->
    <!-- </div> -->
    <!-- end row -->
  <!-- </div> -->
  <!-- end container -->


</section>

<?php if ($projectAmenitiesAvailable): ?>

  <section class="property-customization">
  <div class="video-bg">
    <video src="/uploads/amenities-video.mp4" loop="" autoplay="" muted=""></video>
  </div>
  <!-- end video-bg -->
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <!-- <b>08</b> -->
        <!-- <h4><span>Homepark</span> Living Spaces</h4> -->
        <h3>Amenities and Facilities</h3>
      </div>
      <!-- end col-12 -->

      <?php foreach ($projectAmenities as $key => $value): ?>

        <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
          <figure data-toggle="tooltip" data-placement="top" title="" data-original-title="<?=$value['input_title']?>">
            <!-- <img src="images/services-icon01.png" alt="Image"> -->
            <span class="fa <?=$value['icon_icon']?>" style="font-size:35px"></span>
            <!-- <p><?=$value['input_title']?></p> -->
            <figcaption style="margin-left:5px;"><?=$value['input_title']?></figcaption>
          </figure>
        </div>
        <!-- end col-2 -->
      <?php endforeach; ?>

    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>

<?php endif; ?>

<!-- end apartment -->
<!-- <section class="property-customization pt-5 pb-5 p-2">
  <div class="video-bg">
    <video src="asset/videos/video01.mp4" loop autoplay muted></video>
  </div>
  end video-bg
  <div class="container mck-responsive" id="fileViewer" style="height:80vh">
    <div class="row" style="height:500px">

        <div id="projFile1"/>
    </div>
  </div>
</section> -->
<!-- end property-customization -->

<section class="property-customization" style="background:transparent">
  <div class="container d-flex justify-content-center">
    <!-- <div class="row d-flex justify-content-center">
      <div class="col-md-4">
        <a href="#">DOWNLOAD BROCURE <i class="fas fa-caret-right"></i></a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-primary btn-responsive" style="color:white; background-color:#CCB034; border:2px solid #CCB034;" href="<?=$project['input_faq_link']?>">VIEW FAQ <i class="fas fa-caret-right"></i></a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-primary btn-responsive" style="color:white; background-color:#CCB034; border:2px solid #CCB034;" href="<?=$project['input_subscription_form_link']?>">SUBSCRIPTION FORM <i class="fas fa-caret-right"></i></a>
      </div>
    </div> -->
<style media="screen">
  .mck-btn{
    background-color: #CCB034;
    border: 2px solid #fff;
    color: #fff;
    border-radius: 10px;
    padding: 15px;
  }

  .mck-btn:hover{
    background-color: #fff;
    border: 2px solid #CCB034;
    color: #CCB034;
  }
</style>
    <div class="btn-group mx-auto" role="group" aria-label="Basic example">
      <?php if ($project['input_faq_link']): ?>

        <button type="button" class="btn mck-btn" data-toggle="modal" data-target="#myModal" data-title="Book" data-pdf="<?=$project['input_faq_link']?>" onclick="displayPdf(this)">VIEW FAQ </button>
      <?php endif; ?>

      <?php if ($project['input_subscription_form_link']): ?>

        <button type="button" class="btn mck-btn" data-toggle="modal" data-target="#myModal" data-title="Book" data-pdf="<?=$project['input_subscription_form_link']?>" onclick="displayPdf(this)">SUBSCRIPTION FORM </button>
      <?php endif; ?>

      <?php if ($project['input_brochure_link']): ?>

        <button type="button" class="btn mck-btn" data-toggle="modal" data-target="#myModal" data-title="Book" data-pdf="<?=$project['input_brochure_link']?>" onclick="displayPdf(this)">BROCHURE</button>
      <?php endif; ?>
    </div>
  </div>
</section>




<!-- The Modal -->
<div class="modal fade right" id="myModal">
  <div class="modal-dialog modal-dialog-full-width modal-xl">
    <div class="modal-content" style="height:90vh;">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" id="modalTitle">Title...</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="modalBody">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <a id="downloadFile" type="button" class="btn btn-primary" target="_blank" download>Download <span class="fa fa-download"></span> </a>

        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- <div class="" id="bookBrochure">

</div>


<div class="" id="bookBrochure">

</div>


<div class="" id="book">

</div> -->
<?php include 'includes/footer.php'; ?>

<script src="/real3dflip/deploy/js/flipbook.min.js"></script>


<?php //if ($project['input_brochure_link']): ?>

  <script type="text/javascript">

  // $(document).ready(function () {
  //   // console.log($("#book1"))
  //   $("#bookBrochure").flipBook({
  //     // pdfUrl:'//www.indigodevelopments.com/_files/ugd/f844ed_cb55094cbe9f4ab0b0feaeae18c75157.pdf'
  //     pdfUrl:'<?=$project['input_brochure_link']?>'
  //   })
  //
  // })

  function displayPdf(e){
    var pdfFile = e.dataset.pdf;
    modalTitle.innerHTML = e.innerText;
    downloadFile.href = pdfFile;
    $("#modalBody").flipBook({
      // pdfUrl:'//www.indigodevelopments.com/_files/ugd/f844ed_cb55094cbe9f4ab0b0feaeae18c75157.pdf'
      // pdfUrl:'<?=$project['input_brochure_link']?>'
      pdfUrl: pdfFile
    })

  }
</script>
<?php //endif; ?>
