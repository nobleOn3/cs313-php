<?php
// Start Session
session_start();

if(empty($_SESSION['cart'])) {
   $_SESSION['cart'] = array();
}

if(!isset($_SESSION['num_of_mDice']) && !isset($_SESSION['num_of_mDice']) 
   && !isset($_SESSION['num_of_mDice']) && !isset($_SESSION['num_of_mDice'])) {
   $_SESSION['num_of_mDice'] = 0;
   $_SESSION['num_of_pDice'] = 0;
   $_SESSION['num_of_dmBk'] = 0;
   $_SESSION['num_of_monMnl']= 0;
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
   <div class="main">
   	 <div>
        <h1 class="">Jessen's Tabletop RPG Supplies</h1>
        <br/>
        <a href="shopping_cart.php">Shopping Cart</a>
     </div>

   <!--First Product-->  
   <div>
      <div>
         <h2>Metal Dice<h2>
         <p>Our metal dice are beautiful. They are crafted from the most beautiful steel. The numbers are a light blue color that are engraved into the die.</p>
      </div>
      <br/>
      <div>
         <form action="add.php" method="post">
            <input type='submit' value="Add to cart">
         </form>
      </div>
   </div>
   <br/>

   <!--Second Product-->
   <div>
      <div>
         <h2>Plastic Dice<h2>
         <p>Our plastic dice are made of the highest quality plastics. They come in a variety of colors, order a set today and be surprised by the colors you get!</p>
      </div>
      <br/>
      <div>
         <form action="addpDice.php" method="post">
            <input type='submit' value="Add to cart">
         </form>
      </div>
   </div>

   <!--Third Product-->
   <div>
      <div>
         <h2>D&D Dungeon Master's Handbook<h2>
         <p>This official handbook will allow you to build entire campains, design dungeons, and reward players for their heroic deeds</p>
      </div>
      <br/>
      <div>
         <form action="addDMHndbk.php" method="post">
            <input type='submit' value="Add to cart">
         </form>
      </div>
   </div>

   <!--Fourth Product-->
   <div>
      <div>
         <h2>D&D Monster Manual<h2>
         <p>This official monster manual is a great companion to the dungeon master's handbook. It gives the dungeon master access to the stats of a great many creatures that are fit for a variety of campains.</p>
      </div>
      <br/>
      <div>
         <form action="addmManual.php" method="post">
            <input type='submit' value="Add to cart">
         </form>
      </div>
   </div>

         <br/>
         <br/>
         <br/>
   </div>
</body>
</html>