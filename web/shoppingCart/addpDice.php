<?php 
   session_start();

    //add another plastic dice set to cart
   $_SESSION['cart']['pDice'] = ++$_SESSION['num_of_pDice'];
 ?>

 <?php
   header("Location: browse.php");
?>