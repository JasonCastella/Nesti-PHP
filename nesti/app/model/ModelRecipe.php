<?php

include_once(PATH_MODEL . 'Connection.php');

class ModelRecipe
{
    public function readAll()
    {
        $pdo = Connection::getPdo();

        $sql = "SELECT IdRecettes as id, nomRecette as name FROM recettes";
        $result = $pdo->query($sql);
        if ($result) {
            $array = $result->fetchAll(PDO::FETCH_CLASS, 'Recipe');
        } else {
            $array = [];
        }
        return $array;
    }
}