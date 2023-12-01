<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projet_final/function/database.php';
class Vetement
{
    public static function listVetement()
    {
        // se connecter a la data base
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("SELECT * FROM vetements");
        // executer la requete
        try {
            $request->execute();
            // recuperer le resultat de la requete dans un tableau listPlayer

            $listVetement = $request->fetchAll();
            return $listVetement;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public static function getProductDetails($product_id)
    {
        $db = Database::dbConnect();
        $request = $db->prepare("SELECT * FROM vetements  WHERE id_vetement = ?");

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
