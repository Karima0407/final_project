<?php
session_start();

if (isset($_POST['index'])) {
    $index = $_POST['index'];

    // Supprimer l'article du panier en utilisant l'indice
    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
    }
}

// Rediriger l'utilisateur vers la page du panier après la suppression
header("Location: http://localhost/final_project/views/affichage_panier.php");
exit();
