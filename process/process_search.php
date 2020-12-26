<?php
require '../config/functions.php';

if ( isset($_POST['search']) ) {
  $items = search($_POST['keyword']);
}

?>