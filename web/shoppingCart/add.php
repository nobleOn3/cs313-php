<?php 
   session_start();

   array_push($_SESSION['cart'], 'mDice');
 ?>

 <?php
   header("Location: browse.php");
?>