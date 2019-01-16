<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1"/>
   <title>J.Noble's Homepage</title>
   <link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body style="background-color: grey;">
   <div class="center">
      <h1 class="title"><i>Noble's Homepage</i></h1>
      <p class="intro">Hi, my name is Jessen Noble. Im a <b>software engineering major</b> at BYU-Idaho. I claim both Seattle, WA <b>and</b> Burley, ID as hometowns. </p>
      <?php 
         echo "<p class='intro'>Today is " . date("m/d/Y") . "</p><br/>";
      ?>
      <input type="button" onclick="document.getElementById('hello').innerHTML = 'Jessen is king!'" value="Click Here!">
      <h1 id="hello"></h1>
   </div>
 
</body>
</html>