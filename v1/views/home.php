<?php

$slider = selectContent($conn, "panel_slider", ['visibility' => 'show']);
$services = selectContent($conn, "panel_services", ['visibility' => 'show']);
$projects = selectContent($conn, "panel_projects", ['visibility' => 'show']);
$about = selectContent($conn, "read_about", ['visibility' => 'show'])[0];

if (count($projects) > 0) {
  $availableProjects = true;
}else{
  $availableProjects = false;
}


$gallery = array_reverse(selectContent($conn, "panel_gallery", ['visibility' => 'show']));

if (count($gallery) > 0) {
  $availableGalleryImages = true;
  // code...
  $asset_hash_id = $gallery[count($gallery) - 1]['hash_id'];
  $galleryImages = selectContent($conn, "images", ['asset_hash_id' => "$asset_hash_id"]);
  // var_dump(count($galleryImages));
  if (count($galleryImages) <=0) {
    $galleryImages = $gallery;
  }

}else{
  $availableGalleryImages = false;
}


// var_dump($galleryImages);

include 'includes/header.php';
 ?>

<!-- end navbar -->
<header class="slider">
  <div class="slider-container">
    <div class="swiper-wrapper">
      <?php foreach ($slider as $key => $value): ?>

        <div class="swiper-slide" data-background="<?=$value['image_1']?>" data-stellar-background-ratio="1.15">
          <div class="container">
            <h1><span><?=$value['input_title']?></h1>
              <h2><?=$value['text_description']?></h2>
              <a href="/project">SEE ALL PROJECTS <i class="fas fa-caret-right"></i></a>
              <figure><img src="/asset/images/services-icon<?=str_pad(rand(01, 10), 2, '0', STR_PAD_LEFT)?>.png" alt="Image"></figure>
            </div>
            <!-- end container -->
          </div>

      <?php endforeach; ?>
      <!-- end swiper-slide -->
    </div>
    <!-- Add Pagination -->
    <div class="inner-elements">
      <div class="container">
        <div class="pagination"></div>
        <!-- end pagination -->
        <div class="button-prev">PREV</div>
        <!-- end button-prev -->
        <div class="button-next">NEXT</div>
        <!-- end button-next -->
        <div class="social-media">
          <h6>SOCIAL MEDIA</h6>
          <ul>
            <li><a href="<?=$fbLink?>"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="<?=$igLink?>"><i class="fab fa-twitter"></i></a></li>
            <li><a href="<?=$linkedinLink?>"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="<?=$twitterLink?>"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
        <!-- end social-media -->
      </div>
      <!-- end container -->
    </div>
    <!-- end inner-elements -->
  </div>
  <!-- end slider-container -->
</header>
<!-- end slider -->
<section class="intro">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <figure>
          <div class="pattern-bg" data-stellar-ratio="1.07"></div>
          <!-- end pattern-bg -->
          <div class="holder" data-stellar-ratio="1.10"> <img src="<?=$about['image_1']?>" alt="Image"></div>
          <!-- end holder -->
        </figure>
      </div>
      <!-- end col-6 -->
      <div class="col-md-6 wow fadeInUp">
        <div class="content-box">
          <!-- <b>01</b> -->
          <h4><span><?=$site_name?></span></h4>
          <h3>ABOUT US</h3>
          <?=previewBodyWithUrl($about['text_body'], 25, "/about")?>
        </div>
        <!-- end content-box -->
      </div>
      <!-- edn col-6 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end intro -->
<section class="benefits">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeInUp">
        <!-- <b>02</b> -->
        <h4><span><?=$site_name?></span> </h4>
        <h3>Services</h3>
      </div>
      <style media="screen">
        .benefits figure:after {
          background: transparent;
        }
      </style>
      <?php foreach ($services as $key => $value): ?>

        <!-- end col-12 -->
        <div class="col wow fadeInUp" data-wow-delay="0s">
          <figure>
            <!-- <img src="/asset/images/icon-benefits01.png" alt="Image"> <b></b> -->
            <span class="fa <?=$value['icon_icon']?>" style="font-size:35px"></span> <b></b>
          </figure>
          <h6><?=$value['input_title']?></h6>
          <!-- <span class="odometer" data-count="28" data-status="yes">0</span> <span class="extra">min</span>  -->
        </div>

          <!-- end col -->

      <?php endforeach; ?>

    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end benefits -->
<section class="recent-gallery pb-10">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 wow fadeInUp"> <b>03</b>
        <h4><span><?=$site_name?></span></h4>
        <h3>View our Gallery</h3>
        <a href="/gallery" class="link">SEE ALL GALLERY <i class="fas fa-caret-right"></i></a>
      </div>
      <!-- end col-5 -->
      <div class="col-lg-7">
        <div class="row inner">
          <?php if ($availableGalleryImages): ?>

            <?php foreach ($galleryImages as $key => $value): ?>
              <div class="col-md-4 wow fadeInUp" data-wow-delay="0s">
                <figure data-stellar-ratio="1.07"> <a href="<?=$value[isset($value['image_1']) ? 'image_1' :'image_2']?>" data-fancybox><img src="<?=$value[isset($value['image_1']) ? 'image_1' :'image_2']?>" alt="Image"></a> </figure>
              </div>
              <!-- end col-4 -->
            <?php if($key == 2){break;} endforeach; ?>

          <?php else: ?>
            <h4>No Images Yet</h4>
          <?php endif; ?>

        </div>
        <!-- end row -->
      </div>
      <!-- end col-7 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end recent-gallery -->
<section class="recent-gallery pt-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 wow fadeInUp"> <b>05</b>
        <h4><span>Website</span> Name</h4>
        <h3>Our Project</h3>
        <!-- <p>We are waiting for you in our sales office for having all these opportunities with affordable prices and appropriate payment opportunities..</p> -->
        <p>Have fun exploring our projects...</p>
        <a href="/project" class="link">SEE ALL PROJECTS <i class="fas fa-caret-right"></i></a>
        </div>
      <!-- end col-6 -->
      <?php if ($availableProjects): ?>

        <?php foreach ($projects as $key => $value): ?>

          <div class="col-lg-2 col-md-3 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.10s">
            <figure> <a href="/view-project?id=<?=$value['hash_id']?>"><img src="<?=$value['image_2']?>" alt="Image"></a> </figure>
          </div>
          <!-- end col-3 -->
        <?php if($key == 2){break;} endforeach; ?>
      <?php else: ?>
        <h5>No Available Project(s)</h5>
      <?php endif; ?>
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<?php include 'includes/footer.php'; ?>
