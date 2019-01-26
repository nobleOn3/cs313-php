<?php
// Start Session
session_start();

if(empty($_SESSION['cart'])) {
   $_SESSION['cart'] = array();
}

function printStuff() {
   print_r($_SESSION['cart']);
}
?>

<!DOCTYPE html>
<html>
<head>

	<title>J.Noble's RPG Supplies</title>
	<link rel="stylesheet" type="text/css" href="shopping_cart_style.css">

</head>
<body>
   <!--myName.value.search(/^[A-Z][a-z]+, ?[A-Z][a-z]+, ?[A-Z]\.?$/))-->
   <br/>
   <br/>
   <br/>
   <br/>

   <div class="main">
   	 <div>
        <h1>Jessen's Tabletop RPG Supplies</h1>
     </div>

   <!--First Product-->  
   <div>
      <div>
         <h2>Metal Dice<h2>
         <p>Our metal dice are beautiful...</p>
      </div>
      <br/>
      <div>
         <form action="add.php" method="post">
            <input type=hidden name="metal_dice" value="10">
            <input type='submit' value="Add to cart">
         </form>
      </div>
   </div>
   <br/>

   <!--Second Product-->
   <div>
      <div>
         <h2>D&D Dungeon Master's Handbook<h2>
         <p>This official handbook will...</p>
      </div>
      <br/>
      <div>
         <form action="addDMHndbk.php" method="post">
            <input type="hidden" name="DM's Handbook" value="45">
            <input type='submit' value="Add to cart">
         </form>
      </div>
   </div>

   <?php printstuff(); ?>


         <br/>
         <br/>
         <br/>
   </div>
</body>
</html>