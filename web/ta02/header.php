<h1>Totally Not Nike's</h1>
<?php
   $page = basename(__File__);
   }
<nav>
    <ul>
	   <li class="home <?php if ($page == 'home.php') {echo 'active';} ?>"><a href="home.php">Home</a></li>
	    <li class="about <?php if ($page == 'aboutus.php') {echo 'active';} ?>"><a href="aboutus.php">About Us</a></li>
       <li class="login <?php if ($page == 'login.php') {echo 'active';} ?>"><a href="login.php">Login</a></li>
    </ul>
</nav>


