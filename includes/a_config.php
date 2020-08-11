<?php
  switch($_SERVER["SCRIPT_NAME"]) {
    case "/discover.php";
      $CURRENT_PAGE ="Discover";
      $PAGE_TITLE = "Discover";
      break;
    case "/join.php";
    $CURRENT_PAGE = "Join";
    $PAGE_TITLE = "Join";
      break;
    default:
    $CURRENT_PAGE = "Index";
    $PAGE_TITLE = "Welcome to Soundware";
  }
?>