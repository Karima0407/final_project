<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/projet_final/function/database.php';
class Category
{

    // methode pour s'inscrire
    public static function Ajout($category)
    {
        // connexion a la bd
        $db = Database::dbConnect();
        // preparation de la requete
        $request = $db->prepare("INSERT INTO categories (titre) VALUES (?) ");

        // executer la requete
        try {
            $request->execute(array($category));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}