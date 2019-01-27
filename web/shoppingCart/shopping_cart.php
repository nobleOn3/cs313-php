<?php
// Start Session
session_start();

function makeTable() {
	if($_SESSION['cart']['mDice'] > 0 || $_SESSION['cart']['pDice'] > 0 || $_SESSION['cart']['dmBk'] > 0 || $_SESSION['cart']['monMnl'] > 0) {
		echo "<table><tr><td colspan='5'><h2>Product</h2></td><td colspan='2'><h2>Amount</h2></td><td colspan='2'><h2>Price per unit</h2></td><td colspan='2'></td></tr>";
		display_metal_dice();
		display_plastic_dice();
		display_dungeon_master();
		display_monster_manual();
		echo "</table><br/>";
	}
}

function display_metal_dice() {
   if($_SESSION['cart']['mDice'] > 0) {
      	echo "<tr><td colspan='5'><h3>Metal Dice Set(s)<h3></td><td colspan='2'><span>";
      	echo $_SESSION['cart']['mDice'];
      	echo "<span></td><td colspan='2'><h2>$10.00</h2></td><td colspan='2'><form action='remove.php' method='post'><input type='submit' value='Remove'></form></td></tr>";
       } 
}

function display_plastic_dice() {
    if($_SESSION['cart']['pDice'] > 0) {
      	echo "<tr><td colspan='5'><h3>Plastic Dice Set(s)<h3></td><td colspan='2'><span>";
      	echo $_SESSION['cart']['pDice'];
      	echo "<span></td><td colspan='2'><h2>$6.00</h2></td><td colspan='2'><form action='removepDice.php' method='post'><input type='submit' value='Remove'></form></td></tr>";
    }
}

function display_dungeon_master() {
	if($_SESSION['cart']['dmBk'] > 0) {
      	echo "<tr><td colspan='5'><h3>Dungeon Master Manual(s)<h3></td><td colspan='2'><span>";
      	echo $_SESSION['cart']['dmBk'];
      	echo "<span></td><td colspan='2'><h2>$45.00</h2></td><td colspan='2'><form action='removeDM.php' method='post'><input type='submit' value='Remove'></form></td></tr>";
       } 
}

function display_monster_manual() {
	if($_SESSION['cart']['monMnl'] > 0) {
      	echo "<tr><td colspan='5'><h3>Monster Manual(s)<h3></td><td colspan='2'><span>";
      	echo $_SESSION['cart']['monMnl'];
      	echo "<span></td><td colspan='2'><h2>$40.00</h2></td><td colspan='2'><form action='removeMonMnl.php' method='post'><input type='submit' value='Remove'></form></td></tr>";
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
         <a href="browse.php">Back to Browse</a>
      </div>

      <?php
          makeTable();
      ?>
       <br/>
       <br/>
       <div>
       	   <a href="checkout.php">Confirm Purchase</a>
       </div> 
       <br/>
   </div>
</body>
</html>