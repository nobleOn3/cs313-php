<?php 
   session_start();

   array_push($_SESSION['cart'], 'pDice');
 ?>

 <?php
   header("Location: browse.php");
?>