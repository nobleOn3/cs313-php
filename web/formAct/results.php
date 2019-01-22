<?php
   function displayPlaces() {
   	if (isset($_GET['nA'])) {
   		echo "You have been to North America.";
   	}
   	if (isset($_GET['sA'])) {
   		echo "You have been to South America.";
   	}
   	if (isset($_GET['eU'])) {
   		echo "You have been to Europe.";
   	}
   	if (isset($_GET['asia'])) {
   		echo "You have been to Asia.";
   	}
   	if (isset($_GET['aF'])) {
   		echo "You have been to Africa.";
   	}
   	if (isset($_GET['ant'])) {
   		echo "You have been to Antartica.";
   	}
   	if (isset($_GET['aU'])) {
   		echo "You have been to Australia.";
    }
  }
  ?>

<?php
   $name = $_GET['Name'];
   $email= $_GET['Email'];
   $major= $_GET['major'];
   $comments= $_GET['comment'];


   echo "Your name: $name<br/>";
   echo "Your email: $email<br/>";
   echo "Your major: $major<br/>";
   echo "Comment: $comments<br/>";
   displayPlaces();
   ?>