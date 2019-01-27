<?php
// Start Session
session_start();

function display_metal_dice() {
   if($_SESSION['cart']['mDice'] > 0) {
      	echo "<div><div><h3>Metal Dice: <span>";
      	echo $_SESSION['cart']['mDice'];
      	echo "<span></div><br/><div><form action='remove.php' method='post'><input type='submit' value='Remove'></form></div></div><br/>";
       } 
}

function display_plastic_dice() {
    if($_SESSION['cart']['pDice'] > 0) {
      	echo "<div><div><h3>Plastic Dice: <span>";
      	echo $_SESSION['cart']['pDice'];
      	echo "<span></div><br/><div><form action='removepDice.php' method='post'><input type='submit' value='Remove'></form></div></div><br/>";
    }
}

function display_dungeon_master() {
	if($_SESSION['cart']['dmBk'] > 0) {
      	echo "<div><div><h3>Dungeon Master Handbook(s): <span>";
      	echo $_SESSION['cart']['dmBk'];
      	echo "<span></div><br/><div><form action='removeDM.php' method='post'><input type='submit' value='Remove'></form></div></div><br/>";
       } 
}

function display_monster_manual() {
	if($_SESSION['cart']['monMnl'] > 0) {
      	echo "<div><div><h3>Monster Manual(s): <span>";
      	echo $_SESSION['cart']['monMnl'];
      	echo "<span></div><br/><div><form action='removeMonMnl.php' method='post'><input type='submit' value='Remove'></form></div></div><br/>";
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