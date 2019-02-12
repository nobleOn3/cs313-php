<?php

   require "dbConnect.php";
   $db = get_db();

   $book = $_POST['book'];
   $chap = $_POST['chapter'];
   $verse = $_POST['verse'];
   $content = $_POST['content'];
   $topic = $_POST['topic'];

   $statement = $db->prepare("INSERT INTO scriptures(book, chapter, verse, content) VALUES ('$book', $chap, $verse, '$content');");
   $statement->execute();

   $new_id = $pdo->lastInsertId('scriptures_id_seq');

   $statement = $db->prepare("INSERT INTO script_topics(script_id, topic_id) VALUES ($new_id, $topic);");
   $statement->execute();




?>