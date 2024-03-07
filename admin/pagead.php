<?php 
   session_start();

   include("adconfig.php");
   if(!isset($_SESSION['valid'])){
    header("Location: pagead.php");
   }
?>
