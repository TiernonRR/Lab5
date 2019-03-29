<?php
  $choice = $_POST['check'];
  
  $mysqli = new mysqli("mysql.eecs.ku.edu", "t445r565", "Eiph7Foh", "t445r565");
  /* connection check */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  $deleted = true;
  foreach($choice as $selected){
      $deletePost = "DELETE FROM Posts where post_id = " . "'$selected'";
      if(!($mysqli->query($deletePost))){
          $deleted = false;
      };
  }
  
  if($deleted){
      echo "The selected posts have been removed from the database";
  }
  
  $mysqli->close();
 ?>
