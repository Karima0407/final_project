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
}
