<?php 
   session_start();

   array_push($_SESSION['cart'], "10");
 ?>

 <?php
   header("Location: browse.php");
?>