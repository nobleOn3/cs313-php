<?php 
   session_start();

   //remove a metal dice set from cart
   $_SESSION['cart']['mDice'] = --$_SESSION['num_of_mDice'];
 ?>

 <?php
   header("Location: shopping_cart.php");
?>