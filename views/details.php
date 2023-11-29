<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/projet_final/function/database.php';
require_once "../model/vetementModel.php";

// Vérifier si l'ID du produit est présent dans l'URL

if (isset($_GET['id'])) {
    // Récupérer l'ID du produit
    $product_id = $_GET['id'];

    // Appeler la méthode pour récupérer les détails du produit
    $productDetails = Vetement::getProductDetails($product_id);

    

    // Vérifier si les détails du produit ont été récupérés avec succès
    if ($productDetails) {
        // Afficher les détails du produit
        echo '<div>';
        echo '<img src="./assets/img/' . $productDetails['image'] . '" alt="" width="600" height="500">';
        echo '<h4>' . $productDetails['description'] . '</h4>';
        echo '<p>' . $productDetails['descriptionDetaille'] . '</p>';
        echo '<p>Prix: ' . $productDetails['prix'] .'€' .'</p>';
     
        echo '</div>';
    } else {
        echo 'Erreur : Impossible de récupérer les détails du produit.';
    }
} else {
    echo 'Erreur : ID du produit manquant dans l\'URL.';
}
