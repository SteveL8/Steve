<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php excercie 1</title>
</head>
<body>

<?php
//Instruction qui affiche l'adresse IP du serveur.
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
//Instruction qui affiche l'adresse IP du visiteur.
echo $_SERVER['REMOTE_ADDR'];
?>
    
</body>
</html>