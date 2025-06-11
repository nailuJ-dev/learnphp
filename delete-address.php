<?php
require 'connect.php';

$query = $db->prepare("DELETE FROM address WHERE id = :id");

$id = $_POST['id'];

$parameters = [
    'id' => $id
];

$query->execute($parameters);

?>