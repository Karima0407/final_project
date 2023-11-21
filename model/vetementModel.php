<?php
session_start();require_once $_SERVER['DOCUMENT_ROOT'] . '/projet_final/function/database.php';
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
}
