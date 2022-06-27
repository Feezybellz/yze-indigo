<?php
$uri = explode("/",$_SERVER['REQUEST_URI']);


if (count($uri) > 2) {


  if (!empty($_GET)) {
  $query_string = explode("?",$uri[2])[1];
}else{
  $query_string = "";
}

  switch ($uri[1]."/".$uri[2]) {

    // case 'portfolio/'.$query_string:
    // include APP_PATH."/views/single_portfolio.php";
    // break;

  }



}else{
  if (!empty($_GET)) {
  $query_string = explode("?",$uri[1])[1];
}else{
  $query_string = "";
}
  // $query_string = explode("?",$uri[1])[1];
  switch ($uri[1]) {
    case 'test':
    include APP_PATH."/views/test.php";
    break;
    case 'test?'.$query_string:
    include APP_PATH."/views/test.php";
    break;


  case '':
  include APP_PATH."/views/home.php";
  break;

  case 'home':
  include APP_PATH."/views/home.php";
  break;

  case 'about-us':
  include APP_PATH."/views/about.php";
  break;

  case 'contact':
  include APP_PATH."/views/contact_us.php";
  break;

  case 'apartment':
  include APP_PATH."/views/apartment.php";
  break;

  case 'single_apartment':
  include APP_PATH."/views/single_apartment.php";
  break;

  case 'facilities':
  include APP_PATH."/views/facilities.php";
  break;

  case 'about':
  include APP_PATH."/views/about.php";
  break;

  // case 'apartment-one-room':
  // include APP_PATH."/views/apartment-one-room.php";
  // break;
  //
  // case 'apartment-two-rooms':
  // include APP_PATH."/views/apartment-two-rooms.php";
  // break;
  //
  // case 'apartment-three-rooms':
  // include APP_PATH."/views/apartment-three-rooms.php";
  // break;

  case 'faq':
  include APP_PATH."/views/faq.php";
  break;

  case 'gallery':
  include APP_PATH."/views/gallery.php";
  break;

  case 'team':
  include APP_PATH."/views/team.php";
  break;

  case 'project':
  include APP_PATH."/views/project.php";
  break;

  case 'view-project?'.$query_string:
  include APP_PATH."/views/single_project.php";
  break;


  case 'view-project?'.$query_string:
  include APP_PATH."/views/single_portfolio.php";
  break;

  case '404':
  include APP_PATH."/views/404.php";
  break;

  // default:
  // include APP_PATH."/views/404.php";
  // break;
}


}
 ?>
