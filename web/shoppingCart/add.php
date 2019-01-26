<?php 
   session_start();

   array_merge($_SESSION['cart'], array("mDice"=>"10");

   print_r($_SESSION['cart']);
?>