<?php
  $userName = $_POST['userID'];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "t445r565", "Eiph7Foh", "t445r565");
  /* connection check */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }


    $addUser = "INSERT INTO Users(user_id) VALUES ('" . $userName . "')";
    
    if($newLogin = $mysqli->query($addUser)){
      echo "Login Successful";
    }
    else{
      echo "Unable to login";
    }

 ?>
