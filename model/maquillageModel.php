<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/projet_final/function/database.php';
class Maquillage
{
    public static function listMaquillage()
    {
        // se connecter a la data base
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("SELECT * FROM maquillage");
        // executer la requete
        try {
            $request->execute();
            // recuperer le resultat de la requete dans un tableau listPlayer

            $listMaquillage = $request->fetchAll();
            return $listMaquillage;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function listMaquillageAccueil($imageIds)
    {
        // se connecter a la data base
        $db = Database::dbConnect();

        $placeholders = implode(',', array_fill(0, count($imageIds), '?'));
        // preparer la requete
        $request = $db->prepare("SELECT id_maquillage, imageMakeup, description FROM maquillage WHERE id_maquillage IN ($placeholders)");

        // executer la requete
        try {
            $request->execute($imageIds);
            // recuperer le resultat de la requete dans un tableau listPlayer

            $listMaquillage = $request->fetchAll();
            return $listMaquillage;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getProductDetails($product_id)
    {
        $db = Database::dbConnect();
        $request = $db->prepare("SELECT * FROM maquillage  WHERE id_maquillage = ?");

        try {
            $request->execute([$product_id]);
            $productDetails = $request->fetch();

            return $productDetails;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
