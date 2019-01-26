<?php 
   session_start();

   $_SESSION['cart']='45';
   
   header("Location: browse.php");
?>