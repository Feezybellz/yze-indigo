<?php
$page_title = "Projects";
$projects = array_reverse(selectContent($conn, "panel_projects", ['visibility' => 'show']));

if (count($projects) > 0) {
  $availableProjects = true;
}else{
  $availableProjects = false;
}

$banner = $projects[0]['image_2'];

 include 'includes/header.php';
  ?>

<!-- end navbar -->
<header class="page-header" data-background="<?=$banner?>" data-stellar-background-ratio="1.15" style="background-repeat:none; background-size:cover;">
  <div class="container">
    <h1>Project</h1>
      <!-- <p>Newly listed properties</p> -->
      <p>Find your dream home from our Newly added properties</p>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/home">Home</a></li>
      <li class="breadcrumb-item active text-white" aria-current="page">Project</li>
    </ol>
  </div>
  <!-- end container -->
</header>
<!-- end page-header -->
<section class="sales-offices">
  <div class="container">
    <div class="row">

      <?php if ($availableProjects): ?>

        <?php foreach ($projects as $key => $value): ?>

          <!-- end col-4 -->
          <div class="col-lg-4 col-md-6">
            <!-- <div class=""> -->
              <div class="" style="width:100%; height: auto;background-image: url('<?=$value['image_2']?>'); background-repeat: no-repeat; background-position: center; background-size:cover;">

                <img src="<?=$value['image_2']?>" style="visibility:hidden" alt="">
              </div>
              <div class="office-box" style="margin-top:-1px;">
                <h5><?=$value['input_title']?></h5>
                <!-- <br> -->
                <div class="row p-2">
                  <span class="pr-4"><small class="fa fa-map-marker" style="color: #CCB034"></small> <?=$value['input_location']?></span>
                  <span class=""><small class="fa fa-calendar" style="color: #CCB034"></small> <?=decodeDate($value['dated_project_date'])?></span>
                </div>
                <div class="pb-3">
                  <a href="/view-project?id=<?=$value['hash_id']?>" style="background-color: #CCB034">VIEW PROJECT</a>
                </div>
              </div>

            <!-- </div> -->
          </div>
          <!-- end col-4 -->

        <?php endforeach; ?>
      <?php else: ?>
        <h5>No Available Project(s)</h5>
      <?php endif; ?>


    <!-- end row -->
  </div>
  </div>
  <!-- end container -->
</section>
<!-- end property-customization -->

<?php include 'includes/footer.php'; ?>
