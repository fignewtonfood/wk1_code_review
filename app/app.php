<?php
  //dependencies
  //opens autoload.php which loads Silex files in vendor folder
    require_once __DIR__."/../vendor/autoload.php";
  //opens Address.php
    require_once __DIR__."/../src/Address.php";

  //creates and checks cookie
    session_start();
    if (empty($_SESSION['list_of_contacts'])){
        $_SESSION['list_of_contacts'] = array();
    }
?>
