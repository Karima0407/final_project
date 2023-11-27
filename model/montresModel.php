<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/projet_final/function/database.php';
class Montres
{
    public static function listMontres()
    {
        // se connecter a la data base
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("SELECT * FROM montres");
        // executer la requete
        try {
            $request->execute();
            // recuperer le resultat de la requete dans un tableau listPlayer

            $listMontres = $request->fetchAll();
            return $listMontres;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public static function listMontresAccueil($imageMontresIds)
    {
        // se connecter a la data base
        $db = Database::dbConnect();

        $placeholders = implode(',', array_fill(0, count($imageMontresIds), '?'));
        // preparer la requete
        $request = $db->prepare("SELECT id_montre, imageMontres, description FROM montres WHERE id_montre IN ($placeholders)");

        // executer la requete
        try {
            $request->execute($imageMontresIds);
            // recuperer le resultat de la requete dans un tableau listPlayer

            $listMontres = $request->fetchAll();
            return $listMontres;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function listMontresAccueil2($imageMontresIds2)
    {
        // se connecter a la data base
        $db = Database::dbConnect();

        $placeholders = implode(',', array_fill(0, count($imageMontresIds2), '?'));
        // preparer la requete
        $request = $db->prepare("SELECT id_montre, imageMontres, description FROM montres WHERE id_montre IN ($placeholders)");

        // executer la requete
        try {
            $request->execute($imageMontresIds2);
            // recuperer le resultat de la requete dans un tableau listPlayer

            $listMontres = $request->fetchAll();
            return $listMontres;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
