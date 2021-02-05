<?php
include('app/model/statistic.php');
$model = new Stastistic ();
$statistic = $model -> readall(); 

var_dump($statistic);
