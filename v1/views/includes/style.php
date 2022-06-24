<style media="screen">


@charset "UTF-8";
/*

@Author: Themezinho
@URL: http://www.themezinho.net

This file contains the styling for the actual theme, this
is the file you need to edit to change the look of the
theme.


// Table of contents //

	01.	GOOGLE FONTS
	02.	BODY
	03.	CUSTOM CLASSES
	04. FORM ELEMENTS
	05.	SECTIONS
	06.	HTML TAGS
	07.	LINKS
	08.	MODAL
	09.	PAGINATION
	10. PRELOADER
	11.	TRANSITION OVERLAY
	12.	SANDWICH BUTTON
	13.	SCROLL DOWN
	14.	NAVIGATION MENU
	15.	HEADER
	16.	SOCIAL MEDIA
	17.	NAVBAR
	18.	SLIDER
	19.	PAGE HEADER
	20.	VIDEO BG
	21.	WORKS
	22.	FEATURES CONTENT
	23.	LISTING CONTENT
	24.	FULL MEDIA CONTENT
	25.	INTRODUCTION
	26. OUR TEAM
	27.	NEWS
	28.	SAY HELLO
	29.	LOGOS
	30.	FOOTER
	31.	RESPONSIVE TABLET FIXES
	32. REPSONSIVE MOBILE FIXES



*/
/* GOOGLE FONTS */
@import url("https://fonts.googleapis.com/css?family=Playfair+Display|Poppins:300,400,600,800&amp;display=swap&amp;subset=latin-ext");
/* BODY */
* {
  outline: none !important;
}

body {
  margin: 0;
  padding: 0;
  font-family: "Poppins", sans-serif;
  color: #26282b;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
  -moz-osx-font-smoothing: grayscale;
}

/* HTML ELEMENT */
img {
  max-width: 100%;
}

/* CUSTOM CLASSES */
.overflow {
  overflow: hidden;
}

/* LINKS */
a {
  -webkit-transition: 0.25s ease-in-out;
  -moz-transition: 0.25s ease-in-out;
  -ms-transition: 0.25s ease-in-out;
  -o-transition: 0.25s ease-in-out;
  transition: 0.25s ease-in-out;
  color: #26282b;
}

a:hover {
  text-decoration: underline;
}

/* CUSTOM CONTAINER */
.container {
  max-width: 1280px;
}

/* FORM ELEMENTS */
input[type=text] {
  width: 100%;
  height: 54px;
  border: 1px solid #eee;
  padding: 0 20px;
}

textarea {
  width: 100%;
  height: 160px;
  border: 1px solid #eee;
  padding: 15px 20px;
}

button[type=submit] {
  height: 54px;
  border: none;
  background: #<?=$style_color?>;
  color: #fff;
  padding: 0 30px;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
}

/* ODOMETER */
.odometer {
  line-height: 1;
}

.odometer.odometer-auto-theme, .odometer.odometer-theme-car {
  padding: 0;
}

.odometer.odometer-auto-theme .odometer-digit, .odometer.odometer-theme-car .odometer-digit {
  padding: 0;
}

.odometer.odometer-auto-theme .odometer-digit .odometer-digit-inner, .odometer.odometer-theme-car .odometer-digit .odometer-digit-inner {
  left: 0;
}

/* ACCORDION */
.accordion {
  width: 100%;
  float: left;
  background: #fff;
  padding: 0;
}
.accordion .card {
  background: none;
  border-radius: 0;
  margin-top: -1px;
  border: 1px solid #eaebee;
}
.accordion .card .card-header {
  background: none;
  padding: 0;
  border-bottom: none;
}
.accordion .card .card-header a {
  width: 100%;
  float: left;
  font-weight: 500;
  padding: 20px 25px;
  color: #26282b;
  font-weight: 600;
}
.accordion .card .card-header a:before {
  content: "+";
  float: left;
  text-align: center;
  margin-right: 8px;
  color: #26282b;
  font-weight: 600;
}
.accordion .card .card-header a:hover {
  color: #<?=$style_color?>;
  text-decoration: none;
}
.accordion .card .card-body {
  width: 100%;
  border-top: 1px solid #eee;
  line-height: 26px;
}
.accordion .card [aria-expanded=true] {
  color: #<?=$style_color?> !important;
}
.accordion .card [aria-expanded=true]:before {
  content: "-" !important;
  color: #<?=$style_color?> !important;
}

/* PAGINATION */
.pagination {
  display: flex;
}
.pagination .page-item {
  display: inline-block;
  margin-right: 6px;
}
.pagination .page-item.active .page-link {
  background: #<?=$style_color?>;
  color: #fff;
  border-color: transparent;
  position: relative;
  z-index: 2;
}
.pagination .page-item.active .page-link:hover {
  background: #<?=$style_color?>;
  border-color: transparent;
  color: #fff;
}
.pagination .page-item .page-link {
  display: inline-block;
  border-radius: 0 !important;
  padding: 15px 20px;
  color: #26282b;
  font-weight: 600;
  font-size: 13px;
  border: 1px solid #dee2e6;
  line-height: 1;
}
.pagination .page-item .page-link:hover {
  background: none;
  border-color: #dee2e6;
  color: #<?=$style_color?>;
}

/* GALLERY SLIDER*/
.gallery-container {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  overflow: hidden;
  position: relative;
  text-align: center;
  margin: 30px 0;
  background: #26282b;
}
.gallery-container .swiper-wrapper {
  width: 100%;
  float: left;
  position: relative;
}
.gallery-container .swiper-slide {
  width: 80%;
  margin: 0;
  opacity: 0.6;
}
.gallery-container .swiper-slide.swiper-slide-active {
  width: 80%;
  opacity: 1;
}
.gallery-container .swiper-slide img {
  width: 100%;
}
.gallery-container .gallery-pagination {
  bottom: 20px;
  position: absolute;
  z-index: 2;
}
.gallery-container .gallery-pagination .swiper-pagination-bullet {
  background: #fff;
  opacity: 0.5;
}
.gallery-container .gallery-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
  background: #<?=$style_color?>;
  opacity: 1;
}

/* VIDEO BG */
.video-bg {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  overflow: hidden;
  background: #26282b;
  background: -moz-linear-gradient(161deg, #26282b 0%, #26282b 49%, #<?=$style_color?> 100%);
  background: -webkit-linear-gradient(161deg, #26282b 0%, #26282b 49%, #<?=$style_color?> 100%);
  background: linear-gradient(161deg, #26282b 0%, #26282b 49%, #<?=$style_color?> 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#26282b",endColorstr="#<?=$style_color?>",GradientType=1);
}
.video-bg video {
  min-width: 100%;
  min-height: 100%;
  float: left;
  opacity: 0.15;
}

/* NAV PILLS */
.nav-pills {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 40px;
}
.nav-pills .nav-item {
  display: inline-block;
  margin-right: 30px;
}
.nav-pills .nav-item:last-child {
  margin-right: 0;
}
.nav-pills .nav-item .nav-link {
  background: none;
  color: #26282b;
  border-bottom: 2px solid transparent;
  padding: 4px 0;
  border-radius: 0;
  font-weight: 600;
  font-size: 14px;
}
.nav-pills .nav-item .nav-link.active {
  border-bottom: 2px solid #26282b;
}

/* BREADCRUMB */
.breadcrumb {
  width: 100%;
  padding: 0;
  border-radius: 0;
  background: none;
}
.breadcrumb .breadcrumb-item {
  display: inline-block;
  font-size: 14px;
  font-weight: 600;
  padding: 0;
}
.breadcrumb .breadcrumb-item:first-child:before {
  display: none;
}
.breadcrumb .breadcrumb-item:before {
  content: "»";
  color: #fff;
  font-weight: 400;
  padding: 0 20px;
}
.breadcrumb .breadcrumb-item.active {
  color: #<?=$style_color?>;
}
.breadcrumb .breadcrumb-item a {
  color: #fff;
}

/* HAMBURGER */
.hamburger {
  position: relative;
  cursor: pointer;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  transition-duration: 500ms;
  -webkit-transition-duration: 500ms;
  transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
  -webkit-transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
}
.hamburger span {
  display: block;
  height: 2px;
  width: 30px;
  background: #fff;
  opacity: 1;
  position: absolute;
  left: 0;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: 0.25s ease-in-out;
  -moz-transition: 0.25s ease-in-out;
  -o-transition: 0.25s ease-in-out;
  transition: 0.25s ease-in-out;
}
.hamburger span:nth-child(1) {
  top: 0;
}
.hamburger span:nth-child(2) {
  top: 9px;
}
.hamburger span:nth-child(3) {
  width: 10px;
  top: 19px;
}
.hamburger span:nth-child(4) {
  width: 6px;
  top: 19px;
  left: 15px;
}
.hamburger.open {
  margin: 0;
}
.hamburger.open span:nth-child(1) {
  top: 9px;
  -webkit-transform: rotate(135deg);
  -moz-transform: rotate(135deg);
  -o-transform: rotate(135deg);
  transform: rotate(135deg);
}
.hamburger.open span:nth-child(2) {
  opacity: 0;
  left: 20px;
}
.hamburger.open span:nth-child(3) {
  width: 30px;
  top: 9px;
  -webkit-transform: rotate(-135deg);
  -moz-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  transform: rotate(-135deg);
}
.hamburger.open span:nth-child(4) {
  opacity: 0;
  left: 20px;
}
.hamburger:hover span:nth-child(4) {
  width: 20px;
  left: 10px;
}

/* PRELAODER */
.preloader {
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  position: fixed;
  right: 0;
  top: 0;
  z-index: 12;
  background: #<?=$style_color?>;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
  transition-duration: 700ms;
  -webkit-transition-duration: 700ms;
  transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
  -webkit-transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
  transition-delay: 0.95s;
  overflow: hidden;
}
.preloader * {
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
  transition-duration: 700ms;
  -webkit-transition-duration: 700ms;
  transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
  -webkit-transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
}
.preloader .layer {
  width: 100%;
  height: 100vh;
  position: absolute;
  left: 0;
  top: 0;
  background: #333;
  transition-delay: 0.3s;
}
.preloader .inner {
  display: inline-block;
  text-align: center;
  position: relative;
  z-index: 2;
}
.preloader .inner figure {
  display: block;
  margin-bottom: 10px;
  transition-delay: 0.1s;
}
.preloader .inner figure img {
  height: 60px;
}
.preloader .inner p {
  font-weight: 600;
  color: #fff;
  font-size: 13px;
  display: block;
}

/* TRANSITION OVERLAY */
.transition-overlay {
  width: 100%;
  height: 100vh;
  position: fixed;
  left: -100%;
  top: 0;
  z-index: 12;
  background: #<?=$style_color?>;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
  transition-duration: 700ms;
  -webkit-transition-duration: 700ms;
  transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
  -webkit-transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
  overflow: hidden;
}
.transition-overlay .layer {
  width: 100%;
  height: 100vh;
  position: absolute;
  right: -100%;
  top: 0;
  background: #333;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
  transition-duration: 700ms;
  -webkit-transition-duration: 700ms;
  transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
  -webkit-transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
  transition-delay: 0.6s;
}
.transition-overlay.active {
  left: 0;
}
.transition-overlay.active .layer {
  right: 0;
}

/* PAGE LOADED */
.page-loaded .preloader {
  right: -100%;
}

.page-loaded .preloader .inner figure {
  opacity: 0;
  transform: scale(1.5);
}

.page-loaded .preloader .inner p {
  transform: translateY(20px);
  opacity: 0;
}

.page-loaded .preloader .layer {
  left: -100%;
}

.page-loaded .navbar .container .upper-side {
  transform: translateY(0);
}

.page-loaded .navbar .container .menu {
  opacity: 1;
}

.page-loaded .slider .slider-container {
  transform: scale(1);
  opacity: 1;
}

/* SIDE NAVIGATION */
.side-navigation {
  width: 400px;
  max-width: 100%;
  height: 100vh;
  min-height: 400px;
  position: fixed;
  left: -100%;
  top: 0;
  background: #26282b;
  z-index: 10;
  box-shadow: 10px 10px 50px rgba(0, 0, 0, 0.2);
  color: #fff;
  font-size: 14px;
  padding: 0 40px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
  transition-duration: 700ms;
  -webkit-transition-duration: 700ms;
  transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
  -webkit-transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
}
.side-navigation .menu {
  display: none;
  margin-bottom: 20px;
}
.side-navigation .menu ul {
  width: 100%;
  margin: 0;
  padding: 0;
}
.side-navigation .menu ul li {
  width: 100%;
  display: block;
  margin: 0;
  padding: 3px 0;
  list-style: none;
  position: relative;
}
.side-navigation .menu ul li ul {
  width: 100%;
  display: none;
  padding-left: 20px;
  margin-bottom: 10px;
}
.side-navigation .menu ul li ul li {
  display: block;
}
.side-navigation .menu ul li ul li a {
  font-size: 2vw;
}
.side-navigation .menu ul li a {
  display: inline-block;
  color: #fff;
  font-size: 3vw;
  font-weight: 600;
}
.side-navigation .menu ul li a:hover {
  color: #<?=$style_color?>;
  text-decoration: none;
}
.side-navigation .side-content {
  width: 100%;
  display: block;
}
.side-navigation figure {
  display: block;
  margin-bottom: 30px;
}
.side-navigation figure img {
  height: 40px;
}
.side-navigation address {
  display: block;
  margin-bottom: 20px;
}
.side-navigation h6 {
  font-weight: 600;
  font-size: 20px;
}
.side-navigation p {
  display: block;
  margin-bottom: 30px;
}
.side-navigation p a {
  color: #fff;
}
.side-navigation .gallery {
  margin-bottom: 20px;
  padding: 0;
  margin-left: -5px;
  margin-right: -5px;
}
.side-navigation .gallery li {
  width: 33.33333%;
  float: left;
  margin: 0;
  padding: 0 5px;
  list-style: none;
}
.side-navigation .gallery li img {
  width: 100%;
}
.side-navigation .social-media {
  width: 100%;
  float: left;
  margin: 0;
  margin-bottom: 20px;
  padding: 0;
}
.side-navigation .social-media li {
  float: left;
  margin-left: 5px;
  padding: 0;
  list-style: none;
}
.side-navigation .social-media li a {
  width: 40px;
  height: 40px;
  float: left;
  text-align: center;
  line-height: 42px;
  font-size: 13px;
  color: #fff;
  background: rgba(255, 255, 255, 0.1);
}
.side-navigation .social-media li a:hover {
  color: #26282b;
  background: #<?=$style_color?>;
}
.side-navigation.active {
  left: 0;
}

/* NAVBAR */
.navbar {
  width: 100%;
  padding: 0;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 3;
}
.navbar .container {
  flex-direction: column;
}
.navbar .container .upper-side {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 20px 0;
  align-items: center;
  transform: translateY(-80px);
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
  transition-duration: 700ms;
  -webkit-transition-duration: 700ms;
  transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
  -webkit-transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
  transition-delay: 1.2s;
}
.navbar .container .upper-side .logo {
  margin-left: 0;
}
.navbar .container .upper-side .logo img {
  height: 48px;
}
.navbar .container .upper-side .phone-email {
  margin-right: 0;
  margin-left: auto;
  margin-top: 5px;
  text-align: right;
  color: #fff;
}
.navbar .container .upper-side .phone-email img {
  float: right;
  height: 34px;
  margin-left: 15px;
}
.navbar .container .upper-side .phone-email h4 {
  margin-bottom: -5px;
  margin-top: 3px;
  font-size: 17px;
  font-weight: 600;
  display: -webkit-box;
  line-height: 1;
}
.navbar .container .upper-side .phone-email small {
  line-height: 1;
}
.navbar .container .upper-side .phone-email small a {
  opacity: 0.5;
  color: #fff;
}
.navbar .container .upper-side .phone-email small a:hover {
  text-decoration: none;
  color: #<?=$style_color?>;
  opacity: 1;
}
.navbar .container .upper-side .language {
  margin-right: 40px;
  margin-left: 60px;
  padding: 10px 0;
  padding-right: 30px;
  border-right: 1px solid rgba(255, 255, 255, 0.15);
}
.navbar .container .upper-side .language a {
  display: inline-block;
  margin: 0 5px;
  color: #fff;
  font-weight: 600;
}
.navbar .container .upper-side .language a:hover {
  color: #<?=$style_color?>;
  text-decoration: none;
}
.navbar .container .upper-side .hamburger {
  width: 30px;
  height: 21px;
  margin-right: 0;
}
.navbar .container .menu {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  border-top: 1px solid rgba(255, 255, 255, 0.15);
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
  transition-duration: 700ms;
  -webkit-transition-duration: 700ms;
  transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
  -webkit-transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
  transition-delay: 1.4s;
  opacity: 0;
}
.navbar .container .menu ul {
  display: flex;
  flex-wrap: wrap;
  margin-left: auto;
  margin-right: 0;
  margin-top: -1px;
}
.navbar .container .menu ul li {
  margin: 0;
  margin-left: 40px;
  padding: 0;
  list-style: none;
  position: relative;
}
.navbar .container .menu ul li:hover ul {
  top: 100%;
  opacity: 1;
  visibility: visible;
}
.navbar .container .menu ul li ul {
  min-width: 220px;
  position: absolute;
  left: -35px;
  top: 120%;
  background: #26282b;
  margin: 0;
  padding: 25px 0;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.25s ease-in-out;
  -moz-transition: 0.25s ease-in-out;
  -ms-transition: 0.25s ease-in-out;
  -o-transition: 0.25s ease-in-out;
  transition: 0.25s ease-in-out;
}
.navbar .container .menu ul li ul:before {
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 10px 10px 10px;
  border-color: transparent transparent #26282b transparent;
  position: absolute;
  left: 35px;
  top: -10px;
}
.navbar .container .menu ul li ul li {
  margin: 0;
  padding: 0 35px;
  white-space: nowrap;
}
.navbar .container .menu ul li ul li a {
  padding: 8px 0;
}
.navbar .container .menu ul li ul li a:hover {
  border-color: transparent;
}
.navbar .container .menu ul li a {
  color: #fff;
  display: inline-block;
  font-weight: 600;
  padding: 25px 0;
  border-top: 1px solid transparent;
}
.navbar .container .menu ul li a:hover {
  text-decoration: none;
  color: #<?=$style_color?>;
  border-top: 1px solid #<?=$style_color?>;
}

/* SLIDER */
.slider {
  width: 100%;
  height: 100vh;
  min-height: 600px;
  display: flex;
  flex-wrap: wrap;
  background: #26282b;
  overflow: hidden;
}
.slider .slider-container {
  width: 100%;
  height: 100%;
  display: flex;
  flex-wrap: wrap;
  overflow: hidden;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
  transition-duration: 700ms;
  -webkit-transition-duration: 700ms;
  transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
  -webkit-transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
  transform: scale(1.3);
  transition-delay: 1.25s;
  opacity: 0;
}
.slider .slider-container .swiper-slide {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  align-content: center;
  background-size: cover;
}
.slider .slider-container .swiper-slide:after {
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  background: #26282b;
  background: -moz-linear-gradient(161deg, #26282b 0%, #26282b 49%, #<?=$style_color?> 100%);
  background: -webkit-linear-gradient(161deg, #26282b 0%, #26282b 49%, #<?=$style_color?> 100%);
  background: linear-gradient(161deg, #26282b 0%, #26282b 49%, #<?=$style_color?> 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#26282b",endColorstr="#<?=$style_color?>",GradientType=1);
  opacity: 0.65;
}
.slider .slider-container .swiper-slide .container {
  position: relative;
  z-index: 9;
  padding-left: 100px;
}
.slider .slider-container .swiper-slide .container h1 {
  font-size: 5vw;
  color: #fff;
  font-family: "Playfair Display", serif;
  color: #<?=$style_color?>;
  margin-bottom: 20px;
}
.slider .slider-container .swiper-slide .container h1 span {
  display: inline-block;
  position: relative;
}
.slider .slider-container .swiper-slide .container h1 span:before {
  content: "";
  width: 247px;
  height: 70px;
  position: absolute;
  left: 0;
  top: 40px;
  background: url(../images/title-mark.png) center no-repeat;
  background-size: contain;
  z-index: -1;
}
.slider .slider-container .swiper-slide .container h2 {
  font-weight: 600;
  color: #fff;
  margin-bottom: 50px;
}
.slider .slider-container .swiper-slide .container a {
  height: 60px;
  line-height: 56px;
  float: left;
  color: #fff;
  font-size: 14px;
  font-weight: 600;
  padding-bottom: 10px;
  position: relative;
  border: 2px solid #<?=$style_color?>;
  padding: 0 40px;
  box-shadow: 0 0 20px rgba(235, 207, 167, 0.4);
  -webkit-transition: 0.25s ease-in-out;
  -moz-transition: 0.25s ease-in-out;
  -ms-transition: 0.25s ease-in-out;
  -o-transition: 0.25s ease-in-out;
  transition: 0.25s ease-in-out;
}
.slider .slider-container .swiper-slide .container a i {
  margin-left: 10px;
}
.slider .slider-container .swiper-slide .container a:hover {
  text-decoration: none;
  background: #<?=$style_color?>;
  border-color: #<?=$style_color?>;
}
.slider .slider-container .swiper-slide .container figure {
  float: left;
  margin-left: 40px;
  margin-bottom: 0;
}
.slider .slider-container .swiper-slide .container figure img {
  height: 60px;
}
.slider .slider-container .inner-elements {
  width: 100%;
  position: absolute;
  left: 0;
  top: 0;
}
.slider .slider-container .inner-elements .container {
  position: relative;
  height: 100vh;
}
.slider .slider-container .inner-elements .container .social-media {
  width: 20px;
  position: absolute;
  left: 15px;
  top: calc(50% + 60px);
  transform: translateY(-50%);
  z-index: 4;
  text-align: center;
}
.slider .slider-container .inner-elements .container .social-media h6 {
  width: 120px;
  color: #fff;
  transform: rotate(90deg);
  transform-origin: left;
  margin-left: 9px;
  font-weight: 600;
  margin-bottom: 120px;
  font-size: 14px;
}
.slider .slider-container .inner-elements .container .social-media ul {
  margin: 0;
  padding: 0;
}
.slider .slider-container .inner-elements .container .social-media ul:before {
  content: "";
  width: 1px;
  height: 42px;
  background: #fff;
  display: inline-block;
  margin-bottom: 15px;
  margin-top: 10px;
}
.slider .slider-container .inner-elements .container .social-media ul li {
  margin: 0;
  padding: 3px 0;
  list-style: none;
}
.slider .slider-container .inner-elements .container .social-media ul li a {
  color: #fff;
  font-size: 12px;
}
.slider .slider-container .inner-elements .container .social-media ul li a:hover {
  color: #<?=$style_color?>;
}
.slider .slider-container .inner-elements .container .pagination {
  width: auto;
  position: absolute;
  left: auto;
  right: 15px;
  bottom: 20px;
  z-index: 4;
  color: #fff;
  font-size: 14px;
  font-weight: 600;
  line-height: 50px;
}
.slider .slider-container .inner-elements .container .pagination .swiper-pagination-current {
  font-size: 40px;
  font-weight: 800;
  margin-right: 5px;
}
.slider .slider-container .inner-elements .container .pagination .swiper-pagination-total {
  font-size: 20px;
  margin-left: 5px;
}
.slider .slider-container .inner-elements .container .button-prev {
  width: 40px;
  position: absolute;
  right: 10px;
  top: calc(50% + 60px);
  z-index: 4;
  transform: rotate(90deg);
  -webkit-transition: 0.25s ease-in-out;
  -moz-transition: 0.25s ease-in-out;
  -ms-transition: 0.25s ease-in-out;
  -o-transition: 0.25s ease-in-out;
  transition: 0.25s ease-in-out;
  transform-origin: bottom;
  margin-top: -60px;
  font-weight: 600;
  color: #fff;
  font-size: 14px;
  line-height: 1;
  cursor: pointer;
}
.slider .slider-container .inner-elements .container .button-prev:hover {
  color: #<?=$style_color?>;
}
.slider .slider-container .inner-elements .container .button-prev:after {
  content: "";
  width: 42px;
  height: 1px;
  background: #fff;
  position: absolute;
  right: calc(-100% - 20px);
  top: 5px;
}
.slider .slider-container .inner-elements .container .button-next {
  width: 40px;
  position: absolute;
  right: 10px;
  top: calc(50% + 60px);
  z-index: 4;
  transform: rotate(90deg);
  -webkit-transition: 0.25s ease-in-out;
  -moz-transition: 0.25s ease-in-out;
  -ms-transition: 0.25s ease-in-out;
  -o-transition: 0.25s ease-in-out;
  transition: 0.25s ease-in-out;
  transform-origin: bottom;
  margin-top: 60px;
  font-weight: 600;
  color: #fff;
  font-size: 14px;
  line-height: 1;
  cursor: pointer;
}
.slider .slider-container .inner-elements .container .button-next:hover {
  color: #<?=$style_color?>;
}

/* PAGE HEADER */
.page-header {
  width: 100%;
  height: 500px;
  display: flex;
  flex-wrap: wrap;
  padding-top: 200px;
  background-color: #26282b;
  position: relative;
  margin-bottom: 30px;
}
.page-header:after {
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  background: #26282b;
  background: -moz-linear-gradient(161deg, #26282b 0%, #26282b 49%, #<?=$style_color?> 100%);
  background: -webkit-linear-gradient(161deg, #26282b 0%, #26282b 49%, #<?=$style_color?> 100%);
  background: linear-gradient(161deg, #26282b 0%, #26282b 49%, #<?=$style_color?> 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#26282b",endColorstr="#<?=$style_color?>",GradientType=1);
  opacity: 0.65;
}
.page-header .container {
  position: relative;
  z-index: 2;
}
.page-header .container h1 {
  font-size: 5vw;
  color: #fff;
  font-family: "Playfair Display", serif;
  color: #<?=$style_color?>;
  margin-bottom: 20px;
}
.page-header .container p {
  display: block;
  color: #fff;
  font-size: 20px;
  margin: 0;
}
.page-header .container .breadcrumb {
  position: absolute;
  left: 15px;
  bottom: -30px;
  background: #<?=$style_color?>;
  width: 70%;
  padding: 40px 30px;
  padding-right: 60px;
  margin: 0;
}

/* INTRO */
.intro {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  position: relative;
  z-index: 2;
}
.intro figure {
  display: inline-block;
  margin-bottom: 0;
  margin-top: -20px;
  background: #<?=$style_color?>;
  position: relative;
}
.intro figure .pattern-bg {
  width: 120%;
  height: 100%;
  position: absolute;
  left: 5%;
  top: -5%;
  background: url(../images/side-pattern-bg.png);
  background-size: contain;
}
.intro figure .holder {
  position: relative;
  width: 100%;
  float: left;
  display: block !important;
  transform: translate(85px, -65px);
}
.intro figure .holder img {
  box-shadow: 10px 10px 50px rgba(0, 0, 0, 0.2);
  width: 525px;
}
.intro .content-box {
  display: block;
  padding-left: 10%;
}
.intro .content-box b {
  display: block;
  font-size: 30px;
  font-weight: 800;
  opacity: 0.2;
}
.intro .content-box h4 {
  display: block;
  font-size: 30px;
  font-family: "Playfair Display", serif;
  margin-bottom: 15px;
}
.intro .content-box h4 span {
  color: #<?=$style_color?>;
}
.intro .content-box h3 {
  font-weight: 600;
  margin-bottom: 30px;
}
.intro .content-box p {
  display: block;
  padding-right: 40%;
  margin-bottom: 30px;
}
.intro .content-box a {
  display: inline-block;
  color: #26282b;
  font-weight: 600;
}
.intro .content-box a img {
  height: 46px;
  margin-right: 15px;
}
.intro .content-box a:hover {
  color: #<?=$style_color?>;
  text-decoration: none;
}

/* LOGOS */
.logos {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 100px 0;
}
.logos * {
  -webkit-transition: 0.25s ease-in-out;
  -moz-transition: 0.25s ease-in-out;
  -ms-transition: 0.25s ease-in-out;
  -o-transition: 0.25s ease-in-out;
  transition: 0.25s ease-in-out;
}
.logos .col-lg-2 {
  border-right: 1px dashed #eee;
}
.logos .col-lg-2:last-child {
  border-right: none;
}
.logos figure {
  width: 100%;
  margin: 0;
  position: relative;
}
.logos figure:hover img {
  opacity: 0;
  transform: scale(1.2);
}
.logos figure:hover h6 {
  opacity: 1;
  transform: scale(1);
}
.logos figure img {
  width: 100%;
}
.logos figure h6 {
  width: 100%;
  height: 20px;
  line-height: 20px;
  margin: 0;
  position: absolute;
  top: 50%;
  margin-top: -10px;
  text-align: center;
  opacity: 0;
  font-weight: 800;
  font-size: 13px;
  transform: scale(1.1);
}

/* BENEFITS */
.benefits {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 150px 0;
  background: #f9f9f9;
  text-align: center;
}
.benefits .col {
  border-right: 1px solid #eee;
  padding-top: 20px;
  padding-bottom: 20px;
}
.benefits .col:nth-child(odd) {
  margin-top: 50px;
}
.benefits .col:hover figure:after {
  opacity: 1;
}
.benefits .col:last-child {
  border-right: none;
}
.benefits b {
  display: block;
  font-size: 30px;
  font-weight: 800;
  opacity: 0.2;
}
.benefits h4 {
  display: block;
  font-size: 30px;
  font-family: "Playfair Display", serif;
  margin-bottom: 15px;
}
.benefits h4 span {
  color: #<?=$style_color?>;
}
.benefits h3 {
  font-weight: 600;
  margin-bottom: 50px;
}
.benefits figure {
  display: block;
  margin-bottom: 20px;
  position: relative;
}
.benefits figure:after {
  content: "";
  width: 70px;
  height: 70px;
  position: absolute;
  left: 50%;
  top: 0;
  background: #<?=$style_color?>;
  border-radius: 50%;
  opacity: 0;
  z-index: 0;
  margin-left: -35px;
}
.benefits figure img {
  height: 70px;
  position: relative;
  z-index: 2;
}
.benefits h6 {
  font-weight: 600;
  font-size: 14px;
}
.benefits .odometer {
  font-size: 50px;
  line-height: 1;
  font-weight: 800;
}
.benefits .extra {
  font-size: 18px;
  font-weight: 600;
  display: inline-block;
  transform: translateY(10px);
}

/* RECENT GALLERY */
.recent-gallery {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 150px 0;
}
.recent-gallery b {
  display: block;
  font-size: 30px;
  font-weight: 800;
  opacity: 0.2;
}
.recent-gallery h4 {
  display: block;
  font-size: 30px;
  font-family: "Playfair Display", serif;
  margin-bottom: 15px;
}
.recent-gallery h4 span {
  color: #<?=$style_color?>;
}
.recent-gallery h3 {
  font-weight: 600;
  padding-right: 40%;
  margin-bottom: 30px;
}
.recent-gallery .link {
  display: inline-block;
  color: #26282b;
  font-weight: 600;
  font-size: 14px;
  position: relative;
  padding-bottom: 10px;
}
.recent-gallery .link i {
  margin-left: 10px;
}
.recent-gallery .link:hover {
  text-decoration: none;
}
.recent-gallery .link:hover:before {
  width: 100%;
}
.recent-gallery .link:before {
  content: "";
  width: 60px;
  height: 2px;
  background: #26282b;
  position: absolute;
  left: 0;
  bottom: 0;
  -webkit-transition: 0.25s ease-in-out;
  -moz-transition: 0.25s ease-in-out;
  -ms-transition: 0.25s ease-in-out;
  -o-transition: 0.25s ease-in-out;
  transition: 0.25s ease-in-out;
}
.recent-gallery figure {
  display: block !important;
  margin: 0;
  position: relative;
}
.recent-gallery .col-md-4:nth-child(1) {
  margin-top: 100px;
}
.recent-gallery .col-md-4:nth-child(2) {
  margin-top: 0;
}
.recent-gallery .col-md-4:nth-child(3) {
  margin-top: 80px;
}

/* PROPERTY CALCULATOR */
.property-calculator {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding-bottom: 150px;
  margin-top: 100px;
  position: relative;
}
.property-calculator figure {
  display: inline-block;
  margin-bottom: 0;
  margin-top: -20px;
  background: #<?=$style_color?>;
  position: relative;
}
.property-calculator figure:before {
  content: "";
  width: 50vw;
  height: 100%;
  background: #<?=$style_color?>;
  position: absolute;
  left: -50vw;
  top: 0;
}
.property-calculator figure .pattern-bg {
  width: 120%;
  height: 100%;
  position: absolute;
  left: 5%;
  top: -5%;
  background: url(../images/side-pattern-bg.png);
  background-size: contain;
}
.property-calculator figure .holder {
  position: relative;
  width: 100%;
  float: left;
  display: block !important;
  transform: translate(85px, -35px);
}
.property-calculator figure .holder img {
  box-shadow: 10px 10px 50px rgba(0, 0, 0, 0.2);
  width: 525px;
}
.property-calculator .content-box {
  display: block;
  padding-left: 10%;
}
.property-calculator .content-box b {
  display: block;
  font-size: 30px;
  font-weight: 800;
  opacity: 0.2;
}
.property-calculator .content-box h4 {
  display: block;
  font-size: 30px;
  font-family: "Playfair Display", serif;
  margin-bottom: 15px;
}
.property-calculator .content-box h4 span {
  color: #<?=$style_color?>;
}
.property-calculator .content-box h3 {
  font-weight: 600;
  margin-bottom: 30px;
}
.property-calculator .content-box ul {
  display: block;
  margin-bottom: 60px;
  padding: 0;
}
.property-calculator .content-box ul li {
  display: inline-block;
  margin: 0;
  padding: 0;
  list-style: none;
}
.property-calculator .content-box ul li:nth-child(1) {
  margin-right: 30px;
}
.property-calculator .content-box ul li img {
  height: 35px;
}
.property-calculator .content-box p {
  display: block;
  padding-right: 40%;
  margin-bottom: 30px;
}
.property-calculator .content-box a {
  display: inline-block;
  color: #26282b;
  font-weight: 600;
}
.property-calculator .content-box a img {
  height: 46px;
  margin-right: 10px;
}
.property-calculator .content-box a:hover {
  color: #<?=$style_color?>;
  text-decoration: none;
}

/* PROPERTY PLANS */
.property-plans {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding-bottom: 150px;
}
.property-plans b {
  display: block;
  font-size: 30px;
  font-weight: 800;
  opacity: 0.2;
}
.property-plans h4 {
  display: block;
  font-size: 30px;
  font-family: "Playfair Display", serif;
  margin-bottom: 15px;
}
.property-plans h4 span {
  color: #<?=$style_color?>;
}
.property-plans h3 {
  font-weight: 600;
  margin-bottom: 30px;
}
.property-plans p {
  display: block;
  padding-right: 40%;
  margin-bottom: 30px;
}
.property-plans table {
  display: table;
  margin-bottom: 30px;
  font-size: 15px;
}
.property-plans table tr td {
  padding: 5px 0;
}
.property-plans table tr td:first-child {
  color: #<?=$style_color?>;
  width: 120px;
  font-weight: 600;
}
.property-plans .tab-nav {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
}
.property-plans .tab-nav li {
  display: inline-block;
  margin: 0;
  margin-right: 10px;
  padding: 0;
  list-style: none;
}
.property-plans .tab-nav li a {
  color: #26282b;
  font-weight: 600;
}

/* GET CONSULTATION */
.get-consultation {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding-top: 150px;
  margin-bottom: 100px;
  background-size: auto 120%;
  background-position: right;
  background-repeat: no-repeat;
  background-color: #e5e4df;
}
.get-consultation .content-box {
  width: 500px;
  max-width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 80px 50px;
  margin-bottom: -100px;
  color: #fff;
  background: #<?=$style_color?>;
  position: relative;
  overflow: hidden;
}
.get-consultation .content-box:after {
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 100px 200px 100vh 0;
  border-color: transparent #<?=$style_color?> transparent transparent;
  position: absolute;
  right: 0;
  top: 0;
  opacity: 0.15;
}
.get-consultation b {
  width: 100%;
  display: block;
  font-size: 30px;
  font-weight: 800;
  opacity: 0.2;
}
.get-consultation h4 {
  display: block;
  font-size: 30px;
  font-family: "Playfair Display", serif;
  margin-bottom: 15px;
}
.get-consultation h4 span {
  color: #<?=$style_color?>;
}
.get-consultation h3 {
  font-weight: 600;
  margin-bottom: 30px;
}
.get-consultation p {
  display: block;
  padding-right: 20%;
  margin-bottom: 40px;
}
.get-consultation a {
  height: 60px;
  line-height: 60px;
  float: left;
  color: #fff;
  font-size: 14px;
  font-weight: 600;
  padding-bottom: 10px;
  position: relative;
  background: #26282b;
  padding: 0 40px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
  -webkit-transition: 0.25s ease-in-out;
  -moz-transition: 0.25s ease-in-out;
  -ms-transition: 0.25s ease-in-out;
  -o-transition: 0.25s ease-in-out;
  transition: 0.25s ease-in-out;
}
.get-consultation a i {
  margin-left: 10px;
}
.get-consultation a:hover {
  text-decoration: none;
  background: #fff;
  color: #<?=$style_color?>;
}

/* RECENT POSTS */
.recent-posts {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 150px 0;
}
.recent-posts b {
  display: block;
  font-size: 30px;
  font-weight: 800;
  opacity: 0.2;
}
.recent-posts h4 {
  display: block;
  font-size: 30px;
  font-family: "Playfair Display", serif;
  margin-bottom: 15px;
}
.recent-posts h4 span {
  color: #<?=$style_color?>;
}
.recent-posts small {
  display: block;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 40px;
  opacity: 0.5;
}
.recent-posts small:after {
  content: "";
  width: 50px;
  height: 1px;
  background: #26282b;
  display: inline-block;
  margin-left: 5px;
  margin-bottom: 4px;
  opacity: 0.5;
}
.recent-posts .post-box {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
}
.recent-posts .post-box figure {
  display: block;
  margin-bottom: 20px;
}
.recent-posts .post-box h6 {
  display: block;
  font-size: 20px;
  font-weight: 600;
}
.recent-posts .post-box h6 a {
  display: inline-block;
}
.recent-posts .post-box h6 a:hover {
  color: #<?=$style_color?>;
  text-decoration: none;
}
.recent-posts .post-box p {
  display: block;
  margin: 0;
}
.recent-posts .post-box span {
  width: 100%;
  display: block;
  font-size: 13px;
  opacity: 0.5;
  margin-bottom: 10px;
}

/* PROPERTY CUSTOMIZATION */
.property-customization {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 150px 0;
  background: #26282b;
  color: #fff;
  position: relative;
}
.property-customization b {
  width: 100%;
  display: block;
  font-size: 30px;
  font-weight: 800;
  opacity: 0.2;
}
.property-customization h4 {
  display: block;
  font-size: 30px;
  font-family: "Playfair Display", serif;
  margin-bottom: 15px;
}
.property-customization h4 span {
  color: #<?=$style_color?>;
}
.property-customization h3 {
  font-weight: 600;
  margin-bottom: 30px;
}
.property-customization figure {
  width: 100%;
  display: flex;
  align-items: center;
  border: 1px solid rgba(255, 255, 255, 0.1);
  padding: 15px 10px;
  margin: 15px 0;
}
.property-customization figure img {
  height: 40px;
  float: left;
  margin-right: 15px;
}
.property-customization figure figcaption {
  color: #fff;
  font-size: 13px;
  font-weight: 600;
}

/* APARTMENTS */
.apartment {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 150px 0;
}
.apartment h2 {
  font-size: 4vw;
  font-family: "Playfair Display", serif;
  margin-bottom: 20px;
}
.apartment h2 span {
  color: #<?=$style_color?>;
}
.apartment h6 {
  margin-bottom: 15px;
  font-weight: 600;
  font-size: 20px;
}
.apartment h5 {
  margin-bottom: 70px;
  font-weight: 600;
  opacity: 0.5;
}
.apartment h4 {
  margin-bottom: 20px;
  font-weight: 600;
}
.apartment p {
  line-height: 1.7;
  margin-bottom: 20px;
}
.apartment p strong {
  font-weight: 600;
}
.apartment ul {
  width: 100%;
  display: block;
  margin-bottom: 30px;
  padding-left: 20px;
}
.apartment ul li {
  margin: 0;
  padding: 4px 0;
}
.apartment blockquote {
  display: inline-block;
  padding: 30px;
  background: #<?=$style_color?>;
  margin-bottom: 40px;
}
.apartment blockquote p {
  margin: 0;
}
.apartment blockquote strong {
  font-size: 20px;
}
.apartment figure {
  width: 100%;
  display: block;
  margin-bottom: 70px;
  margin-top: 50px;
}
.apartment .gallery-slider {
  width: 80%;
  margin-top: 50px;
  margin-bottom: 70px;
}
.apartment .gallery-slider .gallery-container {
  margin: 0;
}
.apartment .property-plan {
  display: inline-block;
}
.apartment .property-infos {
  display: inline-block;
  background: #<?=$style_color?>;
  color: #fff;
  padding: 50px;
  margin-bottom: 50px;
  float: left;
  margin-right: 100px;
}
.apartment .property-infos .odometer {
  font-size: 60px;
  font-weight: 800;
  position: relative;
  display: inline-flex;
}
.apartment .property-infos .odometer:after {
  content: attr(data-text);
  font-size: 30px;
  font-weight: 600;
  margin-top: 10px;
  margin-left: 5px;
  opacity: 0.5;
}
.apartment .property-infos p:last-child {
  margin-bottom: 0;
}

/* ABOUT CONTENT */
.about-content {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 150px 0;
}
.about-content h2 {
  font-size: 4vw;
  font-family: "Playfair Display", serif;
  margin-bottom: 20px;
}
.about-content h2 span {
  color: #<?=$style_color?>;
}
.about-content h6 {
  margin-bottom: 15px;
  font-weight: 600;
  font-size: 20px;
}
.about-content h5 {
  margin-bottom: 40px;
  font-weight: 600;
  opacity: 0.5;
}
.about-content h4 {
  margin-bottom: 20px;
  font-weight: 600;
}
.about-content p {
  line-height: 1.7;
  margin-bottom: 20px;
}
.about-content p strong {
  font-weight: 600;
}
.about-content ul {
  width: 100%;
  display: block;
  margin-bottom: 30px;
  padding-left: 20px;
}
.about-content ul li {
  margin: 0;
  padding: 4px 0;
}
.about-content blockquote {
  display: inline-block;
  padding: 30px;
  background: #<?=$style_color?>;
  margin-bottom: 40px;
}
.about-content blockquote p {
  margin: 0;
}
.about-content blockquote strong {
  font-size: 20px;
}
.about-content .video-content {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 60px;
  margin-top: 30px;
}
.about-content .video-content video {
  width: 100%;
  height: 100%;
  float: left;
}
.about-content .gallery-container {
  margin-bottom: 50px;
}

/* CERTIFICATES */
.certificates {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 150px 0;
}
.certificates b {
  display: block;
  font-size: 30px;
  font-weight: 800;
  opacity: 0.2;
}
.certificates h4 {
  display: block;
  font-size: 30px;
  font-family: "Playfair Display", serif;
  margin-bottom: 15px;
}
.certificates h4 span {
  color: #<?=$style_color?>;
}
.certificates small {
  display: block;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 40px;
  opacity: 0.5;
}
.certificates small:after {
  content: "";
  width: 50px;
  height: 1px;
  background: #26282b;
  display: inline-block;
  margin-left: 5px;
  margin-bottom: 4px;
  opacity: 0.5;
}
.certificates figure {
  display: block;
  margin: 0;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}
.certificates figure img {
  width: 100%;
}

/* FACILITIES */
.facilities {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 135px 0;
}
.facilities b {
  display: block;
  font-size: 30px;
  font-weight: 800;
  opacity: 0.2;
}
.facilities h4 {
  display: block;
  font-size: 30px;
  font-family: "Playfair Display", serif;
  margin-bottom: 15px;
}
.facilities h4 span {
  color: #<?=$style_color?>;
}
.facilities small {
  display: block;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 40px;
  opacity: 0.5;
}
.facilities small:after {
  content: "";
  width: 50px;
  height: 1px;
  background: #26282b;
  display: inline-block;
  margin-left: 5px;
  margin-bottom: 4px;
  opacity: 0.5;
}
.facilities figure {
  width: 100%;
  float: left;
  margin: 15px 0;
  padding: 50px 30px;
  box-shadow: 0 0 20px rgba(235, 207, 167, 0.4);
}
.facilities figure img {
  height: 70px;
  float: left;
}
.facilities figure figcaption {
  width: calc(100% - 90px);
  float: right;
}
.facilities figure figcaption h5 {
  font-weight: 600;
  font-size: 16px;
}
.facilities figure figcaption p {
  font-size: 14px;
  opacity: 0.5;
  margin: 0;
}

/* FAQ */
.faq {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 150px 0;
}
.faq .sidebox {
  width: calc(100% - 70px);
  float: left;
  margin-left: 70px;
  padding: 40px 30px;
  text-align: center;
  background: #<?=$style_color?>;
  color: #fff;
  position: -webkit-sticky !important;
  position: sticky !important;
  top: 0;
}
.faq .sidebox i {
  font-size: 100px;
  margin-bottom: 20px;
  display: inline-block;
}
.faq .sidebox h3 {
  display: block;
  font-family: "Playfair Display", serif;
  margin-bottom: 20px;
}
.faq .sidebox p {
  color: #fff;
}

/* SALES OFFICES */
.sales-offices {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 135px 0;
}
.sales-offices .office-box {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 30px;
  margin: 15px 0;
  border: 1px solid #eee;
}
.sales-offices .office-box h5{
  font-family: "Playfair Display", serif;
  margin-bottom: 20px;
  font-size: 26px;
}
.sales-offices .office-box h3{
  font-family: "Playfair Display", serif;
  margin-bottom: 20px;
  /* font-size: 25px; */
}
.sales-offices .office-box address {
  margin-bottom: 25px;
}
.sales-offices .office-box a {
  height: 44px;
  line-height: 44px;
  display: inline-block;
  padding: 0 20px;
  background: #26282b;
  font-size: 13px;
  font-weight: 600;
  color: #fff;
}
.sales-offices .office-box a i {
  margin-right: 7px;
}
.sales-offices .office-box a:hover {
  text-decoration: none;
}

/* INTRO VIDEO */
.intro-video {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 150px 0;
  text-align: center;
}
.intro-video b {
  display: block;
  font-size: 30px;
  font-weight: 800;
  opacity: 0.2;
}
.intro-video h4 {
  display: block;
  font-size: 30px;
  font-family: "Playfair Display", serif;
  margin-bottom: 15px;
}
.intro-video h4 span {
  color: #<?=$style_color?>;
}
.intro-video h3 {
  font-weight: 600;
  margin-bottom: 50px;
}
.intro-video .video-container {
  width: 100%;
  float: left;
  margin: 0;
  padding: 5px;
  background: #<?=$style_color?>;
}
.intro-video .video-container video {
  width: 100%;
  float: left;
}

/* PRESS RELEASES */
.press-relases {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 135px 0;
}
.press-relases figure {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  margin: 15px 0;
  border: 1px solid #eee;
}
.press-relases figure a {
  width: 40%;
}
.press-relases figure a img {
  width: 100%;
}
.press-relases figure figcaption {
  width: 60%;
  padding-left: 20px;
}
.press-relases figure figcaption h5 {
  display: block;
  font-size: 22px;
  font-family: "Playfair Display", serif;
  margin-bottom: 15px;
}
.press-relases figure figcaption p {
  font-size: 14px;
}
.press-relases figure figcaption small {
  display: block;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 0;
  opacity: 0.5;
}

/* PHOTO GALLERY */
.photo-gallery {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 150px 0;
}
.photo-gallery .gallery-filter {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 50px;
  padding: 0;
}
.photo-gallery .gallery-filter li {
  display: inline-block;
  margin-right: 25px;
  padding: 0;
  list-style: none;
}
.photo-gallery .gallery-filter li a {
  font-weight: 600;
  border-bottom: 2px solid transparent;
}
.photo-gallery .gallery-filter li a.current {
  border-bottom: 2px solid #<?=$style_color?>;
}
.photo-gallery .gallery-filter li a:hover {
  color: #<?=$style_color?>;
  text-decoration: none;
}
.photo-gallery .gallery {
  display: flex;
  flex-wrap: wrap;
  margin: 0;
  margin-left: -4px;
  margin-right: -4px;
  padding: 0;
}
.photo-gallery .gallery li {
  width: 25%;
  margin: 0;
  padding: 4px;
  list-style: none;
}
.photo-gallery .gallery li img {
  width: 100%;
  float: left;
}

/* SALES TEAM */
.sales-team {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 150px 0;
}
.sales-team figure {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  border: 1px solid #eee;
  margin: 15px 0;
}
.sales-team figure img {
  width: 50%;
  display: inline-block;
}
.sales-team figure figcaption {
  display: inline-block;
}
.sales-team figure figcaption h4 {
  display: block;
  font-size: 30px;
  font-family: "Playfair Display", serif;
  margin-bottom: 15px;
}
.sales-team figure figcaption h4 span {
  color: #<?=$style_color?>;
}
.sales-team figure figcaption small {
  display: block;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 40px;
  opacity: 0.5;
}
.sales-team figure figcaption small:after {
  content: "";
  width: 50px;
  height: 1px;
  background: #26282b;
  display: inline-block;
  margin-left: 10px;
  margin-bottom: 4px;
  opacity: 0.5;
}
.sales-team figure figcaption ul {
  display: block;
  margin: 0;
  padding: 0;
}
.sales-team figure figcaption ul li {
  display: inline-block;
  margin: 0;
  margin-right: 15px;
  padding: 0;
  list-style: none;
}
.sales-team figure figcaption ul li a {
  font-size: 14px;
  font-weight: 600;
}
.sales-team figure figcaption ul li a i {
  margin-right: 6px;
  font-size: 12px;
  font-weight: 400;
}
.sales-team figure figcaption ul li a:hover {
  text-decoration: none;
  color: #<?=$style_color?>;
}

/* ERROR 404*/
.error404 {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 150px 0;
  text-align: center;
}
.error404 figure {
  display: block;
  margin-bottom: 60px;
  padding: 0 10%;
}
.error404 figure img {
  width: 100%;
}
.error404 h2 {
  font-size: 50px;
  font-weight: 800;
  color: #<?=$style_color?>;
}
.error404 p {
  display: block;
  margin-bottom: 40px;
}
.error404 a {
  height: 60px;
  line-height: 56px;
  display: inline-block;
  color: #<?=$style_color?>;
  font-size: 14px;
  font-weight: 600;
  padding-bottom: 10px;
  position: relative;
  border: 2px solid #<?=$style_color?>;
  padding: 0 40px;
  box-shadow: 0 0 20px rgba(235, 207, 167, 0.4);
  -webkit-transition: 0.25s ease-in-out;
  -moz-transition: 0.25s ease-in-out;
  -ms-transition: 0.25s ease-in-out;
  -o-transition: 0.25s ease-in-out;
  transition: 0.25s ease-in-out;
}
.error404 a:hover {
  text-decoration: none;
  color: #fff;
  background: #<?=$style_color?>;
  border-color: #<?=$style_color?>;
}

/* BLOG */
.blog {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 150px 0;
}
.blog .post {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 100px;
}
.blog .post .post-image {
  width: 100%;
  float: left;
  margin-bottom: 0;
}
.blog .post .post-image img {
  width: 100%;
}
.blog .post .post-content {
  width: calc(100% - 60px);
  float: left;
  background: #fff;
  margin: 0 30px;
  margin-top: -100px;
  padding: 30px;
}
.blog .post .post-content.single {
  width: 100%;
  margin: 0;
  margin-top: 50px;
  padding: 0;
}
.blog .post .post-content .post-title {
  font-weight: 800;
  margin-bottom: 20px;
}
.blog .post .post-content .post-title a {
  color: #26282b;
}
.blog .post .post-content .post-title a:hover {
  color: #<?=$style_color?>;
  text-decoration: none;
}
.blog .post .post-content .post-tags {
  width: 100%;
  float: left;
}
.blog .post .post-content .post-tags i {
  font-size: 19px;
  float: left;
  margin-right: 10px;
  color: #<?=$style_color?>;
  margin-top: 4px;
}
.blog .post .post-content .post-tags ul {
  display: block;
  margin: 0;
  padding: 0;
}
.blog .post .post-content .post-tags ul li {
  float: left;
  margin-right: 10px;
  padding: 0;
  list-style: none;
}
.blog .post .post-content .post-tags ul li a {
  color: #26282b;
  text-decoration: underline;
}
.blog .post .post-content ul {
  width: 100%;
  display: block;
  margin-bottom: 30px;
  padding-left: 20px;
}
.blog .post .post-content ul li {
  margin: 0;
  padding: 4px 0;
}
.blog .post .post-content blockquote {
  display: inline-block;
  padding: 30px;
  background: #<?=$style_color?>;
  margin-bottom: 40px;
}
.blog .post .post-content blockquote p {
  margin: 0;
}
.blog .post .post-content blockquote strong {
  font-size: 20px;
}
.blog .post .post-content .post-intro {
  width: 100%;
  float: left;
  margin-bottom: 30px;
  font-size: 19px;
  line-height: 1.6;
}
.blog .post .post-content .post-author {
  width: 100%;
  float: left;
  line-height: 60px;
  margin-bottom: 20px;
}
.blog .post .post-content .post-author img {
  width: 60px;
  float: left;
  border-radius: 50%;
  margin-right: 10px;
}
.blog .post .post-content .post-author span {
  float: left;
  opacity: 0.5;
  margin-right: 5px;
}
.blog .post .post-content .post-author a {
  color: #26282b;
}
.blog .sidebar {
  width: calc(100% - 50px);
  display: flex;
  flex-wrap: wrap;
  margin-left: 50px;
  border-left: 1px solid #eee;
  padding-left: 50px;
}
.blog .sidebar .widget {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 30px;
  padding-bottom: 30px;
  border-bottom: 1px solid #eee;
}
.blog .sidebar .widget:last-child {
  margin-bottom: 0;
  padding-bottom: 0;
  border-bottom: none;
}
.blog .sidebar .widget .title {
  width: 100%;
  display: block;
  font-family: "Playfair Display", serif;
  margin-bottom: 20px;
}
.blog .sidebar .widget .categories {
  width: 100%;
  display: block;
  margin: 0;
  padding: 0;
}
.blog .sidebar .widget .categories li {
  width: 100%;
  display: block;
  margin: 0;
  padding: 2px 0;
  list-style: none;
}
.blog .sidebar .widget .categories li:before {
  content: "»";
  margin-right: 9px;
  color: #<?=$style_color?>;
}
.blog .sidebar .widget .categories li span {
  float: right;
  color: #<?=$style_color?>;
}
.blog .sidebar .widget .categories li a {
  color: #26282b;
}
.blog .sidebar .widget .categories li a:hover {
  color: #<?=$style_color?>;
}
.blog .sidebar .widget form {
  width: 100%;
  display: block;
}
.blog .sidebar .widget form input[type=text] {
  width: calc(100% - 50px);
  float: left;
  border: 1px solid #<?=$style_color?>;
  border-right: none;
}
.blog .sidebar .widget form button[type=submit] {
  width: 50px;
  padding: 0;
}
.blog .sidebar .widget .tags {
  width: 100%;
  display: block;
  margin: 0;
  padding: 0;
}
.blog .sidebar .widget .tags li {
  float: left;
  margin-right: 8px;
  margin-bottom: 6px;
  padding: 0;
  list-style: none;
}
.blog .sidebar .widget .tags li a {
  height: 30px;
  line-height: 30px;
  float: left;
  border: 1px solid #<?=$style_color?>;
  padding: 0 10px;
  font-size: 13px;
  color: #<?=$style_color?>;
  font-weight: 600;
}
.blog .sidebar .widget .tags li a:hover {
  background: #<?=$style_color?>;
  color: #fff;
  border-color: #<?=$style_color?>;
  text-decoration: none;
}
.blog .sidebar .widget .side-gallery {
  margin-left: -3px;
  margin-right: -3px;
  padding: 0;
}
.blog .sidebar .widget .side-gallery li {
  width: 33.33333%;
  float: left;
  margin: 0;
  padding: 3px;
  list-style: none;
}
.blog .sidebar .widget .side-gallery li a {
  width: 100%;
  float: left;
  background: #26282b;
}
.blog .sidebar .widget .side-gallery li a:hover img {
  opacity: 1;
}
.blog .sidebar .widget .side-gallery li a img {
  opacity: 0.5;
  -webkit-transition: 0.25s ease-in-out;
  -moz-transition: 0.25s ease-in-out;
  -ms-transition: 0.25s ease-in-out;
  -o-transition: 0.25s ease-in-out;
  transition: 0.25s ease-in-out;
}

/* CONTACT */
.contact {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 150px 0;
}
.contact b {
  display: block;
  font-size: 30px;
  font-weight: 800;
  opacity: 0.2;
}
.contact h4 {
  display: block;
  font-size: 30px;
  font-family: "Playfair Display", serif;
  margin-bottom: 15px;
}
.contact h4 span {
  color: #<?=$style_color?>;
}
.contact small {
  display: block;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 50px;
  opacity: 0.5;
}
.contact small:after {
  content: "";
  width: 50px;
  height: 1px;
  background: #26282b;
  display: inline-block;
  margin-left: 5px;
  margin-bottom: 4px;
  opacity: 0.5;
}
.contact address {
  display: block;
  margin-bottom: 50px;
}
.contact address strong {
  font-weight: 600;
  display: block;
  margin-bottom: 10px;
}
.contact address p {
  display: block;
  margin: 0;
}
.contact .map {
  display: inline-block;
  margin-bottom: 0;
  margin-top: 100px;
  background: #<?=$style_color?>;
  position: relative;
}
.contact .map:before {
  content: "";
  width: 50vw;
  height: 100%;
  background: #<?=$style_color?>;
  position: absolute;
  left: -50vw;
  top: 0;
}
.contact .map .pattern-bg {
  width: 120%;
  height: 100%;
  position: absolute;
  left: 5%;
  top: -5%;
  background: url(../images/side-pattern-bg.png);
  background-size: contain;
}
.contact .map .holder {
  position: relative;
  width: 100%;
  float: left;
  display: block !important;
  transform: translate(85px, -35px);
}
.contact .map .holder iframe {
  box-shadow: 10px 10px 50px rgba(0, 0, 0, 0.2);
  width: 525px;
  height: 657px;
  border: none;
}
.contact .contact-form {
  width: 100%;
  display: block;
  padding-left: 10%;
}
.contact .contact-form h5 {
  margin-bottom: 40px;
}
.contact .contact-form #contact {
  display: block;
}
.contact .contact-form #contact .form-group {
  display: block;
  position: relative;
  margin-bottom: 35px;
}
.contact .contact-form #contact .form-group span {
  width: 100%;
  line-height: 54px;
  position: absolute;
  left: 0;
  top: 0;
  padding: 0 20px;
  z-index: 0;
  -webkit-transition: 0.25s ease-in-out;
  -moz-transition: 0.25s ease-in-out;
  -ms-transition: 0.25s ease-in-out;
  -o-transition: 0.25s ease-in-out;
  transition: 0.25s ease-in-out;
}
.contact .contact-form #contact .form-group span.label-up {
  font-size: 13px;
  line-height: 16px;
  top: -20px;
  font-weight: 600;
}
.contact .contact-form #contact .form-group input[type=text] {
  background: none;
  position: relative;
  z-index: 2;
}
.contact .contact-form #contact .form-group input:focus + span {
  font-size: 13px;
  line-height: 16px;
  top: -20px;
  font-weight: 600;
}
.contact .contact-form #contact .form-group textarea {
  background: none;
  position: relative;
  z-index: 2;
}
.contact .contact-form #contact .form-group textarea:focus + span {
  font-size: 13px;
  line-height: 16px;
  top: -20px;
  font-weight: 600;
}
.contact .contact-form #contact .form-group label.error {
  color: red;
  margin-top: 5px;
  margin-bottom: 0;
  font-weight: 600;
  font-size: 13px;
}
.contact .contact-form #success, .contact .contact-form #error {
  display: none;
  float: left;
}
.contact .contact-form #error {
  background: red;
  color: #fff;
}
.contact .contact-form #success {
  background: green;
  color: #fff;
}
.contact .contact-form .alert {
  border: none;
  border-radius: 0;
  padding: 20px 30px;
}

/* FOOTER BAR */
.footer-bar {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  margin-bottom: -80px;
}
.footer-bar .inner {
  background: #<?=$style_color?>;
  padding: 60px 30px;
  color: #fff;
}
.footer-bar .inner figure {
  margin-bottom: 20px;
  float: left;
  margin-right: 30px;
}
.footer-bar .inner figure img {
  height: 70px;
}
.footer-bar .inner h3 {
  font-family: "Playfair Display", serif;
  font-size: 22px;
  margin-bottom: 15px;
}
.footer-bar .inner p {
  font-size: 16px;
  margin: 0;
}
.footer-bar .inner strong {
  font-weight: 600;
  text-decoration: underline;
}

/* FOOTER */
.footer {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding-top: 180px;
  padding-bottom: 30px;
  background: #26282b;
}
.footer p {
  color: #fff;
}
.footer .logo {
  height: 41px;
  margin-bottom: 15px;
}
.footer .logo img {
  height: 48px;
}
.footer .select-box {
  display: inline-block;
  position: relative;
  height: 50px;
  line-height: 48px;
  border: 1px solid rgba(255, 255, 255, 0.2);
  padding-right: 15px;
  padding-left: 25px;
  margin-top: 20px;
}
.footer .select-box:hover {
  border: 1px solid rgba(255, 255, 255, 0.35);
}
.footer .select-box span {
  margin-right: 40px;
}
.footer .select-box .dropdown-toggle {
  color: #fff;
  font-size: 14px;
  font-weight: 600;
}
.footer .select-box .dropdown-toggle:hover {
  text-decoration: none;
}
.footer .select-box .dropdown-toggle img {
  width: 20px;
  margin-right: 5px;
}
.footer .select-box .dropdown-menu {
  width: 100%;
  background: #fff;
  border-radius: 0;
  border: none;
  margin-left: -25px;
  margin-top: 13px;
}
.footer .select-box .dropdown-menu li {
  display: block;
  margin: 0;
  padding: 0;
  list-style: none;
}
.footer .select-box .dropdown-menu li a {
  display: block;
  padding: 7px 25px;
  font-size: 14px;
  line-height: 1;
}
.footer .select-box .dropdown-menu li a:hover {
  background: none;
  color: #<?=$style_color?>;
}
.footer .select-box .dropdown-menu li a img {
  width: 20px;
  margin-right: 5px;
}
.footer .footer-menu {
  display: block;
  margin: 0;
}
.footer .footer-menu li {
  width: 100%;
  float: left;
  margin: 0;
  padding: 4px 0;
  list-style: none;
}
.footer .footer-menu li a {
  float: left;
  color: #fff;
}
.footer .footer-menu li a:hover {
  color: #<?=$style_color?>;
}
.footer .contact-box {
  float: right;
  color: #fff;
  text-align: right;
}
.footer .contact-box h5 {
  margin-bottom: 10px;
  font-size: 19px;
  font-family: "Playfair Display", serif;
}
.footer .contact-box h3 {
  font-weight: 600;
  margin: 0;
}
.footer .contact-box p {
  margin-bottom: 10px;
}
.footer .contact-box p a {
  color: #fff;
  opacity: 0.5;
}
.footer .contact-box ul {
  float: right;
  margin: 0;
  margin-top: 20px;
  padding: 0;
}
.footer .contact-box ul li {
  float: left;
  margin-left: 5px;
  padding: 0;
  list-style: none;
}
.footer .contact-box ul li a {
  width: 40px;
  height: 40px;
  float: left;
  text-align: center;
  line-height: 42px;
  font-size: 13px;
  color: #fff;
  background: rgba(255, 255, 255, 0.1);
}
.footer .contact-box ul li a:hover {
  color: #26282b;
  background: #<?=$style_color?>;
}
.footer .col-12 {
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  padding-top: 30px;
  margin-top: 80px;
  color: #fff;
  font-size: 13px;
}
.footer .col-12 .copyright {
  float: left;
}
.footer .col-12 .creation {
  float: right;
}
.footer .col-12 .creation a {
  color: #fff;
}

/* RESPONSIVE MEDIUM  FIXES */
@media only screen and (max-width: 1199px), only screen and (max-device-width: 1199px) {
  .intro figure .holder {
    transform: translate(65px, -65px);
  }

  .intro figure .holder img {
    width: 450px;
  }

  .property-calculator figure .holder {
    transform: translate(65px, -65px);
  }

  .property-calculator figure .holder img {
    width: 450px;
  }

  .footer-bar .inner p {
    font-size: 15px;
  }

  .footer-bar .inner p br {
    display: none;
  }
}
/* RESPONSIVE TABLET FIXES */
@media only screen and (max-width: 991px), only screen and (max-device-width: 991px) {
  .side-navigation .side-content {
    display: none;
  }

  .side-navigation .menu {
    display: block;
  }

  .navbar .container .menu {
    display: none;
  }

  .page-header .container h1 {
    font-size: 8vw;
  }

  .intro figure {
    width: 100%;
    margin-bottom: 80px;
  }

  .intro figure .pattern-bg {
    width: 100%;
    left: 0;
  }

  .intro figure .holder {
    transform: translate(0, -45px);
    padding: 0 15%;
  }

  .intro figure .holder img {
    width: 100%;
  }

  .intro .content-box {
    padding-left: 0;
  }

  .logos figure img {
    padding: 0 10%;
  }

  .about-content {
    padding: 80px 0;
  }

  .sales-offices {
    padding: 80px 0;
  }

  .press-relases {
    padding: 80px 0;
  }

  .photo-gallery {
    padding: 80px 0;
  }

  .photo-gallery .gallery li {
    width: 33.33333%;
  }

  .intro-video {
    padding: 80px 0;
  }

  .faq .sidebox {
    width: 100%;
    margin-left: 0;
    margin-top: 50px;
  }

  .apartment {
    padding: 80px 0;
  }

  .apartment .property-infos {
    width: 100%;
    margin-right: 0;
  }

  .apartment .property-plan {
    margin: 50px 0;
  }

  .apartment .gallery-slider {
    width: 100%;
  }

  .facilities {
    padding: 80px 0;
  }

  .blog .sidebar {
    width: 100%;
    margin-left: 0;
    padding-left: 0;
    border-left: none;
  }

  .sales-team {
    padding: 80px 0;
  }

  .sales-team figure figcaption {
    width: 50%;
  }

  .sales-team figure figcaption h4 {
    font-size: 21px;
  }

  .sales-team figure figcaption small {
    margin-bottom: 20px;
  }

  .error404 {
    padding: 80px 0;
  }

  .recent-gallery {
    padding: 80px 0;
  }

  .recent-gallery h3 {
    padding-right: 0;
  }

  .recent-gallery .col-md-4 {
    margin-top: 0 !important;
  }

  .recent-gallery figure {
    margin-top: 80px;
  }

  .benefits {
    padding: 80px 0;
  }

  .property-calculator {
    padding-bottom: 80px;
    margin-top: 0;
  }

  .property-calculator .col-lg-6:nth-child(1) {
    order: 2;
  }

  .property-calculator .col-lg-6:nth-child(2) {
    order: 1;
  }

  .property-calculator figure {
    width: 100%;
  }

  .property-calculator figure:before {
    display: none;
  }

  .property-calculator figure .pattern-bg {
    width: 100%;
    left: 0;
  }

  .property-calculator figure .holder {
    transform: translate(0, -45px);
    padding: 0 15%;
  }

  .property-calculator figure .holder img {
    width: 100%;
  }

  .property-calculator .content-box {
    padding-left: 0;
    margin-bottom: 150px;
  }

  .property-plans {
    padding-bottom: 80px;
  }

  .property-plans .nav-pills {
    margin-top: 40px;
  }

  .recent-posts {
    padding: 80px 0;
  }

  .recent-posts .post-box {
    margin: 25px 0;
  }

  .property-customization {
    padding: 80px 0;
  }

  .video-bg video {
    float: right;
  }

  .certificates {
    padding: 80px 0;
  }

  .contact {
    padding: 80px 0;
  }

  .contact address p a {
    display: block;
  }

  .contact .contact-form {
    padding-left: 0;
    margin-top: 50px;
  }

  .blog {
    padding: 80px 0;
  }

  .footer-bar .inner {
    padding: 30px;
  }

  .footer-bar .inner .col-lg-4 {
    margin: 20px 0;
  }

  .footer-bar .inner figure {
    width: 70px;
    margin-right: 0;
  }

  .footer-bar .inner figure img {
    height: 50px;
  }

  .footer {
    padding-top: 150px;
  }

  .footer .select-box {
    margin-bottom: 80px;
  }

  .footer .footer-menu {
    padding: 0;
  }

  .footer .contact-box {
    float: left;
    text-align: left;
    margin-top: 80px;
  }

  .footer .contact-box ul {
    float: left;
  }
}
/* RESPONSIVE MOBILE FIXES */
@media only screen and (max-width: 767px), only screen and (max-device-width: 767px) {
  .side-navigation {
    width: 80vw;
  }

  .page-header .container h1 {
    font-size: 10vw;
  }

  .page-header .container .breadcrumb {
    width: calc(100% - 30px);
  }

  .navbar .container .upper-side .phone-email {
    display: none;
  }

  .navbar .container .upper-side .language {
    display: none;
  }

  .navbar .container .upper-side .hamburger {
    margin-left: auto;
  }

  .slider .slider-container .inner-elements .container .social-media {
    display: none;
  }

  .slider .slider-container .swiper-slide .container {
    padding-left: 15px;
    padding-right: 40px;
  }

  .slider .slider-container .swiper-slide .container figure {
    width: 100%;
    margin-left: 0;
    margin-top: 30px;
  }

  .benefits .col {
    width: 50%;
    flex-basis: auto;
    border-right: none;
  }

  .benefits .col:nth-child(odd) {
    margin-top: 0;
  }

  .apartment h2 {
    font-size: 9vw;
  }

  .apartment figure {
    margin: 15px 0;
  }

  .apartment h4 {
    margin-top: 30px;
  }

  .about-content h2 {
    font-size: 10vw;
  }

  .blog .post .post-image {
    margin-bottom: 30px;
  }

  .blog .post .post-content {
    margin: 0;
    padding: 0;
    width: 100%;
  }

  .contact .map .holder iframe {
    width: 100%;
    height: 450px;
  }

  .side-navigation .menu ul li a {
    font-size: 5vw;
  }

  .side-navigation .menu ul li ul li a {
    font-size: 4vw;
  }

  .certificates figure {
    margin: 15px 0;
  }

  .footer .col-12 .creation {
    float: left;
    margin-top: 5px;
  }
}

/*# sourceMappingURL=style.css.map */



</style>
