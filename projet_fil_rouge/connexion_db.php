<?php
$host = 'localhost';
$username = 'admin';
$password = 'steve1234';
$database = 'the_district';

try {
    $db = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    die();
}
?>
