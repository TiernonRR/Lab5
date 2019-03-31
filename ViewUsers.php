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
        echo "<table>";
        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["user_id"] . "</td></tr>";
        }
        echo "</table>";
        /* free result set */
        $result->free();
    }
    
    $mysqli->close();
 ?>
