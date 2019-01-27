<?php 
   session_start();

   //remove a metal dice set from cart
   $_SESSION['cart']['monMnl'] = --$_SESSION['num_of_monMnl'];
 ?>

 <?php
   header("Location: shopping_cart.php");
?>