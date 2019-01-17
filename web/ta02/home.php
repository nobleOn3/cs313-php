<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1"/>
   <title>Totally not Nike's</title>
   <!--<link rel="stylesheet" type="text/css" href="">-->
   <style>
   ul {
   	list-style-type: none;
   	margin:0;
   	padding: 5px;
   }

   li {
   	float: left;
   }

   li a {
   	display:block;
   	padding:8px;
   }

   li a.active {
   	 background-color: #4CAF50;
   	 color: white;
   }

   li a:hover:not(.active) {
   	background-color: #555;
   	color:white;
   }

   </style>
</head>
<body style="background-color: grey;">
   <div>
      <?php 
         include "./header.php"
      ?>
   </div>
   <br/>
   <div>
      <?php 
         $welvar = NULL;
         if ($welvar == NULL) {
            echo "Wecome, you are not logged in.";
         }
      ?>
   </div> 
</body>
</html>