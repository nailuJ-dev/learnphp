<?php
require 'connect.php';

$query = $db->prepare("UPDATE address SET street = :street, city = :city, zipcode = :zipcode WHERE id = :id");

$id = $_POST['id'];
$street = $_POST['street'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];

$parameters = [
    'id' => $id,
    'street' => $street,
    'city' => $city,
    'zipcode' => $zipcode
];

$query->execute($parameters);

?>