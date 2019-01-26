<?php 
   session_start();

   array_merge($_SESSION['cart'], array("mDice"=>"10") );
 ?>

 <?php
   header("Location: browse.php");
?>