<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "linku";

$connect = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
  echo "Not connection : ".mysqli_connect_error();
} else {
  echo "Connection success..";
}

?>