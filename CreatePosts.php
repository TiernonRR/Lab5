<?php
  $userName = $_POST['userID'];
  $post = $_POST['post'];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "t445r565", "Eiph7Foh", "t445r565");
  /* connection check */

    if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
    }

    $findUser = "SELECT user_id from Users where user_id = userName";

    if($userLookup = $mysqli->query($findUser)){
     // $addPost = "INSERT INTO Posts(post_id, content, author_id) VALUES(,".$post . "," . $userName . " ) ";
    }
    else{
      echo "Account not fount!";
    }

 ?>
