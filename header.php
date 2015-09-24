<?php


$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$link = mysql_connect($server, $username, $password, $db);

$db_selected = mysql_select_db(
            $db,
            $link
          );


  if (!$link) {
    die('Could not connect: ' . mysql_error() );
  } else {
    //echo "success link <br>";
  }

  if (!$db_selected) {
    die('Can\'t use ' . $db . ': ' . mysql_error() );
  } else {
    //echo "success db select <br>";
  }

 ?>
