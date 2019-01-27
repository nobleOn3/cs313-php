<?php 
   session_start();

   //remove a metal dice set from cart
   $_SESSION['cart']['pDice'] = --$_SESSION['num_of_pDice'];
 ?>

 <?php
   header("Location: shopping_cart.php");
?>