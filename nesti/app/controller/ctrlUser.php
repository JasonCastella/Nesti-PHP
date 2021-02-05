<?php
include('app/model/user.php');
$model = new User ();
$user = $model -> readall(); 

var_dump($user);