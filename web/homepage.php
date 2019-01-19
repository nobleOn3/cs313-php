<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1"/>
   <title>J.Noble's Homepage</title>
   <link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>
   <div class="center">
      <h1 class="title"><i>Noble's Homepage</i></h1>
      <?php 
         echo "<p class='hello'>Today is " . date("m/d/Y") . "</p>";
         echo "<p class='hello'>Today is " . date("l") . "</p><br/>";
      ?>
      <p class="intro">Hi, my name is Jessen Noble. Im a <b>software engineering major</b> at BYU-Idaho. I claim both Seattle, WA <b>and</b> Burley, ID as hometowns. </p>
      <input type="button" onclick="document.getElementById('hello').innerHTML = 'Hi, my name is Jessen Noble. Im a <b>software engineering major</b> at BYU-Idaho. I claim both Seattle, WA <b>and</b> Burley, ID as hometowns.'" value="Click Here For more info about the creator!">
      <h1 id="hello"></h1>
   </div>
 
</body>
</html>