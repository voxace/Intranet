<?php
  if(isset($_GET["page"])) {
    $page = $_GET["page"];
    switch ($page) {
      case "home":
        include ("content/home.php");
        break;
      case "iphone":
        include ("content/wifi/iphone.php");
        break;
      case "android":
        include ("content/wifi/android.php");
        break;
      default:
        include ("content/home.php");
    }
  } else { 
    include ("content/home.php");
  }
?>
