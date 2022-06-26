<?php

$page_title = "Gallery";

$gallery = array_reverse(selectContent($conn, "panel_gallery", ['visibility' => 'show']));

if (count($gallery) > 0) {
  $availableGalleryImages = true;
  // code...
  $asset_hash_id = [];
  foreach ($gallery as $key => $value) {
    $asset_hash_id[] = $value['hash_id'];
  }

  $asset_hash_id = implode("','", $asset_hash_id);

  // var_dump($asset_hash_id);
  $galleryImages = [];

  $selectGalleryImages = $conn->prepare("SELECT * FROM images WHERE asset_hash_id IN('$asset_hash_id')");
  $selectGalleryImages->execute();

  while ($row = $selectGalleryImages->fetch(PDO::FETCH_BOTH)) {
    $galleryImages[] = $row;
  }

  // var_dump($galleryImages);
  // var_dump(count($galleryImages));
  if (count($galleryImages) <=0) {
    $galleryImages = $gallery;
  }

  $banner = $galleryImages[0][isset($galleryImages[0]['image_1']) ? 'image_1' :'image_2'];
}else{
  $availableGalleryImages = false;
}


include 'includes/header.php';
 ?>

<!-- end navbar -->
<header class="page-header" data-background="<?=$banner?>" data-stellar-background-ratio="1.15" style="background-repeat:none; background-size:cover;">
  <div class="container">
    <h1>Photo Gallery</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inc</p>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/home">Home</a></li>
      <li class="breadcrumb-item active text-white" aria-current="page">Photo Gallery</li>
    </ol>
  </div>
  <!-- end container -->
</header>
<!-- end page-header -->
<section class="photo-gallery">
  <div class="container">
    <div class="row">
    	<div class="col-12">
    	<ul class="gallery-filter">
   			<!-- <li><a href="javascript:void(0);" data-filter="*" class="current">ALL AREA</a></li>
          	<li><a href="javascript:void(0);" data-filter=".one">INTERIOR</a></li>
          	<li><a href="javascript:void(0);" data-filter=".two">BUILDING</a></li>
          	<li><a href="javascript:void(0);" data-filter=".three">SPACES</a></li> -->
   		</ul>
    		<ul class="gallery">
          <?php if ($availableGalleryImages): ?>

            <?php foreach ($galleryImages as $key => $value): ?>

              <li class="one wow fadeInUp" data-wow-delay="0s">
                <figure data-stellar-ratio="1.07"> <a href="<?=$value[isset($value['image_1']) ? 'image_1' :'image_2']?>" data-fancybox><img src="<?=$value[isset($value['image_1']) ? 'image_1' :'image_2']?>" alt="Image"></a> </figure>
              </li>
            <?php endforeach; ?>
          <?php else: ?>
            <h4>No Available Image(s)</h4>
          <?php endif; ?>

    		</ul>
    	</div>
    	<!-- end col-12 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end photo-gallery -->
<?php include 'includes/footer.php'; ?>

    	</div>
    	<!-- end col-12 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end photo-gallery -->
<?php include 'includes/footer.php'; ?>
