<?php 
require 'env.php';

$host = "db.3wa.io";
$port = "3306";
$dbname = "julianbuzare_phpj6";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "julianbuzare";
$password = $db_database_pass;

$db = new PDO(
    $connexionString,
    $user,
    $password
);

var_dump($db);

?>