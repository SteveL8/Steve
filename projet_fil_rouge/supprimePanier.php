<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['index'])) {
    $index = $_POST['index'];
    
    if (isset($_SESSION['panier'][$index])) {
        unset($_SESSION['panier'][$index]);
    }
}


header('Location: panier.php');
exit();
?>
