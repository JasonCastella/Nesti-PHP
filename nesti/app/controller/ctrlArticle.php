<?php
include('app/model/article.php');
$model = new Article ();
$article = $model -> readall(); 

var_dump($article);
