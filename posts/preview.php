<?php
include "generate.php";

if(!isset($_POST['title']))exit;
if(!isset($_POST['message']))exit;
if(!isset($_POST['userid']))exit;

$title = $_POST['title'];
$message = $_POST['message'];
$userid = $_POST['userid'];

echo generate($title, $message, '', '', '');

?>