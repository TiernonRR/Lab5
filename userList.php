<?php
  $choice = $_POST['userChoice'];
  
  $mysqli = new mysqli("mysql.eecs.ku.edu", "t445r565", "Eiph7Foh", "t445r565");
  /* connection check */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  echo $choice;


  $userPosts = "SELECT content from Posts WHERE author_id = " . "'$choice'";
  if($result = $mysqli->query($userPosts)){
    if ($result->num_rows > 0) {
       echo "<table>";
       while($row = $result->fetch_assoc()) {
          echo "<tr><td>" .  $row["content"] . "</td></tr>";
      }
      echo "</table>";
    } 
    else {
      echo "0 results";
    }
  }
  
  $mysqli->close();
 ?>
