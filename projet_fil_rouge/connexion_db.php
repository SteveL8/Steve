<?php
$host = 'localhost';//a changer apres avoir mis le site en ligne
$username = 'admin';//steve
$password = 'steve1234';//1234
$database = 'the_district';//steve

try {
    $db = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    die();
}
?>
