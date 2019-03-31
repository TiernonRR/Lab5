<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "t445r565", "Eiph7Foh", "t445r565");
  echo "<link rel=" . "'stylesheet'" . " type=" . "'text/css'" . " href=" . "'style.css'" . ">";
  /* connection check */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }


  $userPosts = "SELECT * from Posts";
  if($result = $mysqli->query($userPosts)){
    if ($result->num_rows > 0) {
       echo "<form action=". "'DeletePost.php'" . " method=" . "'POST' />";
       echo "<table>";
       while($row = $result->fetch_assoc()) {
          $post_id = $row['post_id'];
          echo "<tr><td>" .  $row["author_id"] ."</td><td>". $post_id . "</td><td>" . $row["content"] . "</td>" . "<td><input type=" . "'checkbox'" . " name=" . "'check[]'"  . " value=" . "'$post_id'/></td></tr>";
      }
      echo "</table>
            <input type = " . "'submit'" . "/>" .      
            "</form>";
    } 
    else {
      echo "0 results";
    }
  }
  
  $mysqli->close();
 ?>
