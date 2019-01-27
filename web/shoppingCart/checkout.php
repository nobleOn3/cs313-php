<?php
// Start Session
session_start();

function makeTable() {
  if($_SESSION['cart']['mDice'] > 0 || $_SESSION['cart']['pDice'] > 0 || $_SESSION['cart']['dmBk'] > 0 || $_SESSION['cart']['monMnl'] > 0) {
    echo "<table class='center'><tr><td colspan='5'><h2>Product</h2></td><td colspan='2'><h2>Amount</h2></td><td colspan='2'></td></tr>";
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
        echo "<span></td><td colspan='2'><form action='remove.php' method='post'><input type='submit' value='Remove'></form></td></tr>";
       } 
}

function display_plastic_dice() {
    if($_SESSION['cart']['pDice'] > 0) {
        echo "<tr><td colspan='5'><h3>Plastic Dice Set(s)<h3></td><td colspan='2'><span>";
        echo $_SESSION['cart']['pDice'];
        echo "<span></td><td colspan='2'><form action='removepDice.php' method='post'><input type='submit' value='Remove'></form></td></tr>";
    }
}

function display_dungeon_master() {
  if($_SESSION['cart']['dmBk'] > 0) {
        echo "<tr><td colspan='5'><h3>Dungeon Master Manual(s)<h3></td><td colspan='2'><span>";
        echo $_SESSION['cart']['dmBk'];
        echo "<span></td><td colspan='2'><form action='removeDM.php' method='post'><input type='submit' value='Remove'></form></td></tr>";
       } 
}

function display_monster_manual() {
  if($_SESSION['cart']['monMnl'] > 0) {
        echo "<tr><td colspan='5'><h3>Monster Manual(s)<h3></td><td colspan='2'><span>";
        echo $_SESSION['cart']['monMnl'];
        echo "<span></td><td colspan='2'><form action='removeMonMnl.php' method='post'><input type='submit' value='Remove'></form></td></tr>";
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
   	  <div class="center">
        <h1>Confirm Your Order</h1>
        <a href="shopping_cart.php">Back to Cart</a>
        <h3>Your order: </h3>
        <?php makeTable(); ?>
      </div>
    </div>
    <hr/>

    <div class="center">
      <form action="thanks.php">
         <h2>Please enter your information</h2>
         <span>Name: </span><br/>
         <input class="info" type="text" name="name" id="name">
         <br/>

         <span>Street Address: </span><br/>
         <input class="info" type="text" name="street" id="street">
         <br/>

         <span>City: </span><br/>
         <input class="info" type="text" name="city" id="city">
         <br/>

         <span>State: </span><br/>
         <input class="info" type="text" name="state" id="state">
         <br/>

         <span>zip: </span><br/>
         <input class="info" type="text" name="zip" id="zip">
         <br/>

         <br/><br/>
         <input type="submit" value="Confirm Purchase">
         <input type="reset" value="Reset">
         <br/>
      </form> 
    </div>
</body>
</html>