<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1"/>
   <title>Totally not Nike's Login</title>
   <link rel="stylesheet" type="text/css" href="">

   <style>
   ul {
   	list-style-type: none;
   	margin: 0;
   	padding: 5px;
   }

   li {
   	float: left;
   }

   li a {
   	display:block;
   	padding:8px;
   }

   .active {
      background-color: lime;
   	  color: blue;
   }

   li a:hover:not(.active) {
   	background-color: #555;
   	color:white;
   }

   </style>
</head>
<body style="background-color: grey;">
   <?php 
      include "./header.php" 
   ?>
   <div>
      <h1><i>Login</i></h1>
      <input type="button" value="Login as Administrator">
      <input type="button" value="Login as Tester">

   </div> 
</body>
</html>