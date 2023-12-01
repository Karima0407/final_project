<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

</html>
<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/projet_final/function/database.php';
require_once "../model/vetementModel.php";



// pour les details de vetements
// Vérifier si l'ID du produit est présent dans l'URL

if (isset($_GET['id'])) {
    // Récupérer l'ID du produit
    $product_id = $_GET['id'];

    // Appeler la méthode pour récupérer les détails du produit
    $productDetails = Vetement::getProductDetails($product_id);



    // Vérifier si les détails du produit ont été récupérés avec succès
    if ($productDetails) {
        // Afficher les détails du produit
        echo '<div class="block_detail">';
        echo '<img src="./assets/img/' . $productDetails['image'] . '" alt="" width="600" height="500">';
        echo '<h4>' . $productDetails['description'] . '</h4>';
        $description = str_replace('S Buste', '<span class="couleur1">S Buste</span>', $productDetails['descriptionDetaille']);

        $description = str_replace('Longueur', '<span class="couleur1">Longueur</span>', $description);
        $description = str_replace('Épaule', '<span class="couleur1">Épaule</span>', $description);
        $description = str_replace('M Buste', '<span class="couleur1">M Buste</span>', $description);
        $description = str_replace('XL Buste', '<span class="couleur1">XL Buste</span>', $description);
        $description = str_replace('Couleur', '<span class="couleur1">Couleur</span>', $description);
        $description = str_replace('manche', '<span class="couleur1">manche</span>', $description);
        $description = str_replace('Type de coupe', '<span class="couleur1">Type de coupe</span>', $description);
        $description = str_replace('Tissu', '<span class="couleur1">Tissu</span>', $description);
        $description = str_replace('Matériau', '<span class="couleur1">Matériau</span>', $description);
        $description = str_replace('Composition', '<span class="couleur1">Composition </span>', $description);
        $description = str_replace(' Instructions d\'entretien ', '<span class="couleur1">Instructions d\'entretien </span>', $description);
        $description = str_replace(' Corps', '<span class="couleur1">Corps </span>', $description);
        $description = str_replace(' Conseils d\'entretien ', '<span class="couleur1">Conseils d\'entretien </span>', $description);
        $description = str_replace(' Col ', '<span class="couleur1"> Col </span>', $description);




        // echo '<h3>' . $productDetails['descriptionDetaille'] . '</h3>';
        echo '<h3>' . $description . '</h3>';

        echo '<h2>Prix: ' . $productDetails['prix'] . '€' . '</h2>';

        echo '</div>';
    } else {
        echo 'Erreur : Impossible de récupérer les détails du produit.';
    }
} else {
    echo 'Erreur : ID du produit manquant dans l\'URL.';
}



