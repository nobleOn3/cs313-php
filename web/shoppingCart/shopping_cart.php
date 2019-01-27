<?php
// Start Session
session_start();

function display_metal_dice() {
   if($_SESSION['cart']['mDice'] > 0) {
      	echo "<div><div><h3>Metal Dice:<span>$_SESSION['cart']['mDice']<span></div><br/><div><form action='remove.php' method='post'><input type='submit' value='Remove'></form></div></div><br/>";
       } 
}

function display_plastic_dice() {
	if($_SESSION['cart']['pDice'] > 0) {
      	echo "<div><div><h2>Metal Dice<h2><p>Our metal dice are beautiful...</p>
           </div><br/><div><form action='remove.php' method='post'>
           <input type='submit' value='Remove'></form></div></div><br/>";
       } 
}

function display_dungeon_master() {
	if($_SESSION['cart']['dmBk'] > 0) {
      	echo "<div><div><h2>Metal Dice<h2><p>Our metal dice are beautiful...</p>
           </div><br/><div><form action='remove.php' method='post'>
           <input type='submit' value='Remove'></form></div></div><br/>";
       } 
}

function display_monster_manual() {
	if($_SESSION['cart']['monMnl'] > 0) {
      	echo "<div><div><h2><h2><p>Our metal dice are beautiful...</p>
           </div><br/><div><form action='remove.php' method='post'>
           <input type='submit' value='Remove'></form></div></div><br/>";
       } 
}

?>

<!DOCTYPE html>
<html>
<head>

	<title>Cart</title>
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
        <h1>Your Cart</h1>
     </div>

   <?php
      display_metal_dice();
   ?> 

   <?php printstuff(); ?>


         <br/>
         <br/>
         <br/>
   </div>
</body>
</html>