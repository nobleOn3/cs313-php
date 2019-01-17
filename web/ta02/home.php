<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1"/>
   <title>Totally not Nike's</title>
   <link rel="stylesheet" type="text/css" href="">
</head>
<body style="background-color: grey;">
   <?php include('header.php'); ?>
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