<?php 
   session_start();

   //add another metal dice set to cart
   $_SESSION['cart']['mDice'] = ++$_SESSION['num_of_mDice'];
 ?>

 <?php
   header("Location: browse.php");
?>