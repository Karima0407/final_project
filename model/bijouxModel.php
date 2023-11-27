<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/projet_final/function/database.php';
class Bijoux
{
    public static function listBijoux()
    {
        // se connecter a la data base
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("SELECT * FROM bijoux");
        // executer la requete
        try {
            $request->execute();
            // recuperer le resultat de la requete dans un tableau listPlayer

            $listBijoux = $request->fetchAll();
            return $listBijoux;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function listBijouxAccueil($imageBijouxIds)
    {
        // se connecter a la data base
        $db = Database::dbConnect();

        $placeholders = implode(',', array_fill(0, count($imageBijouxIds), '?'));
        // preparer la requete
        $request = $db->prepare("SELECT id_bijoux, imageBijoux, description FROM bijoux WHERE id_bijoux IN ($placeholders)");

        // executer la requete
        try {
            $request->execute($imageBijouxIds);
            // recuperer le resultat de la requete dans un tableau listPlayer

            $listBijoux = $request->fetchAll();
            return $listBijoux;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
