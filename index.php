<!DOCTYPE html>
<html>

    <head>
	<link rel="stylesheet" href="css/boilerplate.css">
	<link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0">
    </head>
    <body>

      <?php

            include 'header.php';

            $query="SELECT * FROM bday";
            $result=mysql_query($query);

            $num=mysql_numrows($result);
            mysql_close();

            $bdayyes = false;
            $i = 0;
            while ($i <= $num) {
            $name = mysql_result($result, $i, "name");
            $date = mysql_result($result, $i, "date");
            $month = mysql_result($result, $i, "month");
            $location = mysql_result($result, $i, "location");


            //$todaydate = date("d");
            $todaymonth = date("m");
            $todaydate = 9;

            // Check today's date and month with database
            if ($date == $todaydate && $month == $todaymonth) {

              // html within echo
              echo '
              <div id="primaryContainer" class="primaryContainer clearfix">
                <div id="box" class="clearfix">
                  <p id="text">
                    <span id="textspan">It&#x27;s ' . $name . '&#x27;s<br />birthday today</span>
                    </p>
                    <p id="text1">
                    ' . $name . ' sits at&#x3a; ' . $location . '
                    </p>
                </div>
            </div>
              ';

              $bdayyes = true;
            }

            $i++;

          }

          // if no birthdays
          if ($bdayyes == false) {
            '
            <div id="primaryContainer" class="primaryContainer clearfix">
              <div id="box" class="clearfix">
                <p id="text">
                  <span id="textspan">No one was born today.</span>
                  </p>

              </div>
          </div>
            ';
          }

      ?>


    </body>
</html>
