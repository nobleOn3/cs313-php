<?php 
   session_start();

   array_merge($_SESSION['cart'], array("10"));

   print_r($_SESSION['cart']);
?>