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
            <input type='submit' value="Add to cart">
         </form>
      </div>
   </div>
   <br/>

   <!--Second Product-->
   <div>
      <div>
         <h2>Plastic Dice<h2>
         <p>Our plastic dice are made...</p>
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
         <p>This official handbook will...</p>
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
         <p>This official monster manual will...</p>
      </div>
      <br/>
      <div>
         <form action="addmManual.php" method="post">
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