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
        .linnk a{
          border: 2px solid #CCB034;
          padding: 10px 35px 10px 35px;
          font-size: 20px;
          color: #CCB034;
        }
        .linnk a:hover{
          text-decoration: none;
          background: #CCB034;
          border-color: #CCB034;
          color: #FFF;
        }
      </style>

  </div>
  <!-- <div class="linnk row col-md-12">
    <div class="col-md-4">
      <a href="#">DOWNLOAD BROCURE <i class="fas fa-caret-right"></i></a>
    </div>
    <div class="col-md-4">
      <a href="/faq">VIEW FAQ <i class="fas fa-caret-right"></i></a>
    </div>
    <div class="col-md-4">
      <a href="#">SUBSCRIPTION FORM <i class="fas fa-caret-right"></i></a>
    </div>
  </div> -->
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
<!-- <section class="property-customization pt-5 pb-5 p-2">
  <div class="video-bg">
    <video src="asset/videos/video01.mp4" loop autoplay muted></video>
  </div>
  end video-bg
  <div class="container">
    <div class="row">
      end col-12
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0s">
        <figure data-toggle="tooltip" data-placement="top" title="The smaller male cones release pollen, which fertilizes"> <img src="/asset/images/services-icon01.png" alt="Image">
          <figcaption>Water Taps</figcaption>
        </figure>
      </div>
      end col-2
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.05s">
        <figure data-toggle="tooltip" data-placement="top" title="The smaller male cones release pollen, which fertilizes"> <img src="/asset/images/services-icon02.png" alt="Image">
          <figcaption>Furniture</figcaption>
        </figure>
      </div>
      end col-2
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.10s">
        <figure data-toggle="tooltip" data-placement="top" title="The smaller male cones release pollen, which fertilizes"> <img src="/asset/images/services-icon03.png" alt="Image">
          <figcaption>Electricity</figcaption>
        </figure>
      </div>
      end col-2
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.15s">
        <figure data-toggle="tooltip" data-placement="top" title="The smaller male cones release pollen, which fertilizes"> <img src="/asset/images/services-icon04.png" alt="Image">
          <figcaption>Wood Edition</figcaption>
        </figure>
      </div>
      end col-2
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.20s">
        <figure> <img src="/asset/images/services-icon05.png" alt="Image">
          <figcaption>Ceramics</figcaption>
        </figure>
      </div>
      end col-2
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.25s">
        <figure> <img src="/asset/images/services-icon06.png" alt="Image">
          <figcaption>Pipelines</figcaption>
        </figure>
      </div>
      end col-2
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0s">
        <figure> <img src="/asset/images/services-icon07.png" alt="Image">
          <figcaption>Cimento</figcaption>
        </figure>
      </div>
      end col-2
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.05s">
        <figure> <img src="/asset/images/services-icon08.png" alt="Image">
          <figcaption>Hummer</figcaption>
        </figure>
      </div>
      end col-2
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.10s">
        <figure> <img src="/asset/images/services-icon09.png" alt="Image">
          <figcaption>Digging</figcaption>
        </figure>
      </div>
      end col-2
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.15s">
        <figure> <img src="/asset/images/services-icon10.png" alt="Image">
          <figcaption>Raiser</figcaption>
        </figure>
      </div>
      end col-2
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.20s">
        <figure> <img src="/asset/images/services-icon11.png" alt="Image">
          <figcaption>Screwsrive</figcaption>
        </figure>
      </div>
      end col-2
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.25s">
        <figure> <img src="/asset/images/services-icon12.png" alt="Image">
          <figcaption>Blueprint</figcaption>
        </figure>
      </div>
      end col-2
    </div>
    end row
  </div>
  <br>
  end container
</section> -->
<!-- end property-customization -->

<?php include 'includes/footer.php'; ?>
