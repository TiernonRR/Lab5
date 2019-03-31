<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "t445r565", "Eiph7Foh", "t445r565");
  echo "<link rel=" . "'stylesheet'" . " type=" . "'text/css'" . " href=" . "'style.css'" . ">";
  /* connection check */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }


  $users = "SELECT user_id from Users";
  
  if ($result = $mysqli->query($users)) {
      echo "<form action=". "'ViewUserPosts.php'" . " method=" . "'POST' />";
      echo "<select name = " . "'userChoice'" . " >";
      /* fetch associative array */
      echo "<option value = " . "'0'" . ">Select a User</option>";
      while ($row = $result->fetch_assoc()) {
          $data = $row['user_id'];
          echo "<option value = " . "'$data'" . ">" . $data . "</option>";
      }
      echo "</select><br>";
      echo "<input type=" . "'submit'" . " value=" . "' Submit' " . "/>";
      echo "</form>";
      /* free result set */
      $result->free();
  }
  
  $mysqli->close();
 ?>
