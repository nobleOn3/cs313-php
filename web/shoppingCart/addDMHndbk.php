<?php 
   session_start();

   //add another dmBk to cart
   $_SESSION['cart']['dmBk'] = ++$_SESSION['num_of_dmBk'];
 ?>

 <?php
   header("Location: browse.php");
?>