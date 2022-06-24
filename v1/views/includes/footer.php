
<section class="footer-bar">
  <div class="container">
    <div class="inner wow fadeIn">
      <div class="row d-flex justify-content-center">
        <!-- <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.05s">
          <figure><img src="/asset/images/footer-icon01.png" alt="Image"></figure>
          <h3>Address Infos</h3>
          <h5>Mainland Business Office</h5>
          <span>1 Eric Manuel Crescent, Off Bode Thomas Street, Surulere, Lagos, Nigeria</span>
        </div> -->
        <!-- end col-4 -->
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.10s">
          <figure><img src="/asset/images/footer-icon02.png" alt="Image"></figure>
          <h3>Working Hours</h3>
          <p><?=$workingHours['input_day_span']?> <strong><?=$workingHours['input_time_span']?></strong>
            <!-- <br>
            Saturday we work until <strong>15:30</strong> -->
          </p>
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
          <figure><img src="/asset/images/footer-icon03.png" alt="Image"></figure>
          <h3>Office Address</h3>
            <h5><?=$site_address?></h5>
            <!-- <p>Km 18, Lekki Epe Expressway, Agungi, Lekki, Lagos, Nigeria</p> -->
          </address>
        </div>
        <!-- end col-4 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end inner -->
  </div>
  <!-- end container -->
</section>
<!-- end footer-bar -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.05s"> <img src="<?=$logo_directory?>" alt="Image" class="logo">
        <p><?=previewBodyWithUrl($description, 40, "/about")?></p>

      </div>
      <!-- end col-4 -->
      <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.10s">
        <ul class="footer-menu">
          <li><a href="/home">HOME</a></li>
          <li><a href="/project">APARTMENT</a></li>
          <!-- <li><a href="/facilities">FACILITIES</a></li> -->
          <li><a href="/team">OUR TEAM</a></li>
          <li><a href="/gallery">GALLERY</a></li>
          
        </ul>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.15s">
        <ul class="footer-menu">
          <li><a href="/faq">FAQ</a></li>
          <li><a href="/about">ABOUT US</a></li>
          <li><a href="/contact">CONTACT US</a></li>
        </ul>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.20s">
        <div class="contact-box">
          <h5>CONTACT</h5>
          <p>
            <a href="tel:<?=$site_phone?>"><?=$site_phone?></a>
          </p>
          <!-- <h4>+234 (0) 916 236 7382</h4> -->
          <p><a href="mailto:<?=$site_email?>"><?=$site_email?></a></p>
          <ul>
            <li><a href="<?=$fbLink?>"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="<?=$igLink?>"><i class="fab fa-twitter"></i></a></li>
            <li><a href="<?=$linkedinLink?>"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="<?=$twitterLink?>"><i class="fab fa-twitter"></i></a></li>
            <!-- <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li> -->
            <!-- <li><a href="#"><i class="fab fa-youtube"></i></a></li> -->
          </ul>
        </div>
        <!-- end contact-box -->
      </div>
      <!-- end col-4 -->
      <div class="col-12"> <span class="copyright">© <?=date("Y")?> <?=$site_name?> | <?php byMckodevFooter()?></span></div>
      <!-- end col-12 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</footer>
<!-- end footer -->

<!-- JS FILES -->
<script src="/asset/js/jquery.min.js"></script>
<script src="/asset/js/popper.min.js"></script>
<script src="/asset/js/bootstrap.min.js"></script>
<script src="/asset/js/swiper.min.js"></script>
<script src="/asset/js/fancybox.min.js"></script>
<script src="/asset/js/odometer.min.js"></script>
<script src="/asset/js/wow.min.js"></script>
<script src="/asset/js/text-rotater.js"></script>
<script src="/asset/js/jquery.stellar.js"></script>
<script src="/asset/js/isotope.min.js"></script>
<script src="/asset/js/scripts.js"></script>


<?php
  if($websiteStyle[0]['status'] === "demo"){
 ?>
<?php
include APP_PATH.'/demo/includes/demo.php';
 ?>
 <!-- <script src="/da//assets/js/vendor-all.min.js"></script> -->
 <script src="/da/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
 <script src="/da/assets/js/pcoded.min.js"></script>
 <script src="/da/demo.min.js"></script>

 <?php
}
  ?>

</body>

</html>
