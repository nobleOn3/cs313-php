<?php 
   session_start();

   //remove a metal dice set from cart
   $_SESSION['cart']['dmBk'] = --$_SESSION['num_of_dmBk'];
 ?>

 <?php
   header("Location: shopping_cart.php");
?>