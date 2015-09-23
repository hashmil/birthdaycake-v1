<?php

    $user = 'root';
    $password = 'root';
    $db = 'birthdays';
    $host = 'localhost';
    $port = 3306;

    $link = mysql_connect(
                "$host:$port",
                $user,
                $password
              );
    $db_selected = mysql_select_db(
                $db,
                $link
              );


      if (!$link) {
        die('Could not connect: ' . mysql_error() );
      } else {
        echo "success link <br>";
      }

      if (!$db_selected) {
        die('Can\'t use ' . $db . ': ' . mysql_error() );
      } else {
        echo "success db select <br>";
      }

      $name = $_POST['name'];
      $date = $_POST['date'];
      $month = $_POST['month'];
      $location = $_POST['location'];

      $sql = "INSERT INTO bday (name, date, month, location) VALUES ('$name', '$date', '$month' , '$location')";

      if (!mysql_query($sql)) {
        die('Error: ' . mysql_error());

      }

      mysql_close();

?>
