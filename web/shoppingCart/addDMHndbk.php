<?php 
   session_start();

   array_push($_SESSION['cart'], 'dmbk');
 ?>

 <?php
   header("Location: browse.php");
?>