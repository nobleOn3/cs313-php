<?php 
   session_start();

   array_push($_SESSION['cart'], "10");

   print_r($_SESSION['cart']);

   header("Location: browse.php");
?>