<?php 
   session_start();

   array_push($_SESSION['cart'], 'mManual');
 ?>

 <?php
   header("Location: browse.php");
?>