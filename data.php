<?php
session_start();

date_default_timezone_set('Asia/Bangkok');

$now = time();

$_SESSION['status'] = true;

if(empty($_SESSION['data'])){$_SESSION['data'] = array();}

$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];

array_push($_SESSION['data'], ['timestamp'=>date('Y-m-d H:i:s', $now),'title'=>$title, 'content'=>$content, 'author'=>($author == '' ? 'guest' : $author )]);

print_r($_SESSION['data']);
header('location:index.php')
?>