<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projet_final/function/database.php'; // Assurez-vous d'ajuster le chemin selon l'emplacement de votre fichier Database.php


$searchTerm = $_GET['q'];

try {
    $conn = Database::dbConnect();

    $tables = ['vetements', 'maquillage', 'bijoux', 'montres'];

    $results = [];

    foreach ($tables as $table) {
        $sql = "SELECT * FROM $table WHERE titre LIKE :searchTerm";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':searchTerm', $searchTerm . '%');
        $stmt->execute();

        $categoryResults = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Ajouter les résultats de cette catégorie à la liste globale
        $results = array_merge($results, $categoryResults);
    }

    // Renvoyer les résultats au format JSON
    header('Content-Type: application/json');
    echo json_encode($results);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}