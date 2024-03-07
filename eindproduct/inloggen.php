<?php
global $conn;
include 'connections.php';

$user = $_GET[gebruikersnaam];

$stmt = $conn->prepare("SELECT gebruikersnaam, wachtwoord FROM users WHERE gebruikersnaam='$user'");
$stmt->execute();

$result = $stmt->fetch();

if (isset($result)){
    echo 'klopt';
}
else{
    echo 'niet';
}
