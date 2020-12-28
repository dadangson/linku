<?php
session_start();

setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

$_SESSION = [];
session_unset();
session_destroy();
exit;

?>
