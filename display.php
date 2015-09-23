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

      $query="SELECT * FROM bday";
      $result=mysql_query($query);

      $num=mysql_numrows($result);
      mysql_close();


      $i = 0;
      while ($i <= $num) {
      $name = mysql_result($result, $i, "name");
      $date = mysql_result($result, $i, "date");
      $month = mysql_result($result, $i, "month");
      $location = mysql_result($result, $i, "location");


      $todaydate = date("d");
      $todaymonth = date("m");
      //$todaydate = 1;

      if ($date == $todaydate && $month == $todaymonth) {
        echo "It's $name's  birthday today! and sits at $location. </br>";

      }

      $i++;
    }



?>
