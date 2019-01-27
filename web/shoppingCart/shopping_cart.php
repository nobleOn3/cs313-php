<?php
// Start Session
session_start();

function makeTable() {
	if($_SESSION['cart']['mDice'] > 0 || $_SESSION['cart']['pDice'] > 0 || $_SESSION['cart']['dmBk'] > 0 || $_SESSION['cart']['monMnl'] > 0) {
		echo "<table><tr><td><h2>Product</h2></td><td><h2>Amount</h2></td><td><h2>Remove?<h2></td></tr>";
		display_metal_dice();
		display_plastic_dice();
		display_dungeon_master();
		display_monster_manual();
		echo "</table><br/>"
	}
}

function display_metal_dice() {
   if($_SESSION['cart']['mDice'] > 0) {
      	echo "<tr><td><h3>Metal Dice<h3></td><span>";
      	echo $_SESSION['cart']['mDice'];
      	echo "<span></td><td><form action='remove.php' method='post'><input type='submit' value='Remove'></form></td></tr>";
       } 
}

function display_plastic_dice() {
    if($_SESSION['cart']['pDice'] > 0) {
      	echo "<tr><td><h3>Plastic Dice<h3></td><span>";
      	echo $_SESSION['cart']['pDice'];
      	echo "<span></td><td><form action='removepDice.php' method='post'><input type='submit' value='Remove'></form></td></tr>";
    }
}

function display_dungeon_master() {
	if($_SESSION['cart']['dmBk'] > 0) {
      	echo "<tr><td><h3>Dungeon Master Manual(s)<h3></td><span>";
      	echo $_SESSION['cart']['dmBk'];
      	echo "<span></td><td><form action='removeDM.php' method='post'><input type='submit' value='Remove'></form></td></tr>";
       } 
}

function display_monster_manual() {
	if($_SESSION['cart']['monMnl'] > 0) {
      	echo "<tr><td><h3>Monster Manual(s)<h3></td><span>";
      	echo $_SESSION['cart']['monMnl'];
      	echo "<span></td><td><form action='removeMonMnl.php' method='post'><input type='submit' value='Remove'></form></td></tr>";
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
   <div class="main">
   	 <div>
        <h1>Your Cart</h1>
     </div>

      <?php
          display_metal_dice();
          display_plastic_dice();
          display_dungeon_master();
          display_monster_manual();
      ?> 
       <br/>
       <br/>
       <br/>
   </div>
</body>
</html>