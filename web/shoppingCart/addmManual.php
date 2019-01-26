<?php 
   session_start();

   //add another monster manual to cart
   $_SESSION['cart']['monMnl'] = ++$_SESSION['num_of_monMnl'];
 ?>

 <?php
   header("Location: browse.php");
?>