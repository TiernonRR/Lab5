<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "t445r565", "Eiph7Foh", "t445r565");
  /* connection check */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }


  $users = "SELECT user_id from Users";
  
  if ($result = $mysqli->query($users)) {
      echo "<form action=". "'ViewUserPosts.php'" . " method=" . "' post ' " . " action=" ."''" .">";
      echo "<select>";
      /* fetch associative array */
      while ($row = $result->fetch_assoc()) {
          $data = $row['user_id'];
          echo "<option value = " . "'$data'" . ">" . $data . "</option>";
      }
      echo "</select><br>";
      echo "<input type=" . "'submit'" . " value=" . "' Submit' " . " name = " . "'action'" . "/>";
      echo "</form>";
      /* free result set */
      $result->free();
  }
  
  $mysqli->close();
 ?>
