<?php
$db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'steve1234');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>