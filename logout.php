<?php
$_SESSION = array();
session_destroy();
header("location: index.php?page=login");
exit;
?>