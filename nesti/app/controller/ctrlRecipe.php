<?php
include('./app/entity/Recipe.php');
include('app/model/ModelRecipe.php');
$model = new ModelRecipe ();
$arrayRecipe = $model -> readall(); 

var_dump($arrayRecipe);