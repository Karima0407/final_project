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
}
