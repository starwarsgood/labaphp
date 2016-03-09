<meta charset="Utf-8">
<?php
$host='localhost';
$dbname='labaphp';
$user='root';
$password='';
  $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->exec("set names utf8");
?>