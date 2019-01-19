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
      <h1 id="title" class="title"><i>Noble's Homepage</i></h1>
      <?php 
         echo "<p id='date' class='hello'>Today is " . date('l F jS Y') . "</p>";
      ?>

      <input type="button" onclick="document.getElementById('hello').innerHTML = 'Hi, my name is Jessen Noble. Im a software engineering major at BYU-Idaho. I claim both Seattle, WA and Burley, ID as hometowns. I enjoy coding and am excited to learn more about web engineering this semester.'; document.getElementById('me').className='seen'; document.getElementById('title').className='titleLime'; document.getElementById('date').className='helloLime'" value="Click here for more info about the creator!">
      <br/><br/><br/>

      <img src="me.jpg" alt="Picture of creator" id="me" class="hidden">
      <h1 id="hello"></h1>
   </div>
 
</body>
</html>