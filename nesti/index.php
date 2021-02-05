<?php
include('app/config.php');
$loc = filter_input(INPUT_GET, "loc", FILTER_SANITIZE_STRING);
$action  = filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING);

var_dump($loc);
var_dump($action);

//controlleur de session >>

if (!isset($loc)) {
    $loc = "recettes";
}

switch($loc){
    case 'recettes':
        include(PATH_CTRL.'/ctrlRecipe.php');
        break;
        
}

include('app/view/common/template.php');
