<?php
// Start Session
session_start();

function makeTable() {
  if($_SESSION['cart']['mDice'] > 0 || $_SESSION['cart']['pDice'] > 0 || $_SESSION['cart']['dmBk'] > 0 || $_SESSION['cart']['monMnl'] > 0) {
    echo "<table class='center'><tr><td colspan='5'><h2>Product</h2></td><td colspan='2'><h2>Amount</h2></td></tr>";
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
        echo "<span></td></tr>";
       } 
}

function display_plastic_dice() {
    if($_SESSION['cart']['pDice'] > 0) {
        echo "<tr><td colspan='5'><h3>Plastic Dice Set(s)<h3></td><td colspan='2'><span>";
        echo $_SESSION['cart']['pDice'];
        echo "<span></td></tr>";
    }
}

function display_dungeon_master() {
    if($_SESSION['cart']['dmBk'] > 0) {
        echo "<tr><td colspan='5'><h3>Dungeon Master Manual(s)<h3></td><td colspan='2'><span>";
        echo $_SESSION['cart']['dmBk'];
        echo "<span></td></tr>";
    } 
}

function display_monster_manual() {
    if($_SESSION['cart']['monMnl'] > 0) {
        echo "<tr><td colspan='5'><h3>Monster Manual(s)<h3></td><td colspan='2'><span>";
        echo $_SESSION['cart']['monMnl'];
        echo "<span></td></tr>";
    } 
}

function displayName() {
    echo $_POST["name"];
}

function displayAddress() {
   echo $_POST['street']." ".$_POST['city'].",". $_POST['state']." ".$_POST['zip'];
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
   	  <div class="center">
        <h1>Thank you <?php displayName(); ?>!</h1>
        <?php displayName(); ?>
        <h2>Your order will be sent to: <?php displayAddress(); ?></h2>
        <h3>Your order: </h3>
        <?php makeTable(); ?>
      </div>
    </div>

</body>
</html>