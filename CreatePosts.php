<?php
  $userName = $_POST['userID'];
  $post = $_POST['post'];
  echo "<link rel=" . "'stylesheet'" . " type=" . "'text/css'" . " href=" . "'style.css'" . ">";
  $mysqli = new mysqli("mysql.eecs.ku.edu", "t445r565", "Eiph7Foh", "t445r565");
  /* connection check */

    if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
    }
    
    $findUser = "SELECT user_ID from Users where user_ID = " . "'$userName'";
    
    $result = $mysqli->query($findUser);
    $arr = ($result->fetch_all());
     
    if(empty($arr)){
      echo "Account not found!";
    }
    else{
     $addPost = "INSERT INTO Posts(content, author_id) VALUES('$post','$userName');";
      if($addedPost = $mysqli->query($addPost)){
          echo "Post added successfully.";
      }
      else{
        echo "Post was unable to be processed.";
      }
    }
  
    $result->free();
    $mysqli->close();
 ?>
