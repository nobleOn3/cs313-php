<?php 
   session_start();

   $_SESSION['cart']['mDice']='45';
   header("Location: browse.php");
?>