<?php

$file = PATH_CONTENT;

switch ($loc) {
    case 'login':
        $file .= 'login.php';
        break;
    case 'recettes':
        switch ($action) {
            case 'edition':
                $file .= 'recipe_update.php';
                break;
            case 'creation':
                $file .= 'recipe_create.php';
                break;
            default:
                $file .= 'recipe.php';
                break;
        }
        break;
    case 'articles':
        switch ($action) {
            case 'importation':
                $file .= 'article_import.php';
                break;
            case 'edition':
                $file .= 'article_update.php';
                break;
            default:
                $file .= 'article.php';
                break;
        }
        break;
    case 'utilisateurs':
        switch ($action) {
            case 'creation':
                $file .= 'user_create.php';
                break;
            case 'edition':
                $file .= 'user_update.php';
                break;
            case 'commandes':
                $file .= 'user_order.php';
                break;
            default:
                $file .= 'user.php';
                break;
        }
        break;
    case 'statistiques':
        $file .= 'statistic.php';
        break;
    default:
        $file = PATH_ERROR . 'error404.html';
        break;
}
include $file;
