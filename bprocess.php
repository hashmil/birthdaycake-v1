<?php

      include 'header.php';

      $name = $_POST['name'];
      $date = $_POST['date'];
      $month = $_POST['month'];
      $location = $_POST['location'];

      $sql = "INSERT INTO bday (name, date, month, location) VALUES ('$name', '$date', '$month' , '$location')";

      if (!mysql_query($sql)) {
        die('Error: ' . mysql_error());

      }

      mysql_close();

      echo "Successfully added $name's birthday";

?>

<a href="display.php">Check who's celebrating their birthday today</a>
