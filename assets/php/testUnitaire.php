<?php
include "class/User.php";

$user = new User();
$user->addUser("test", "test@gmail.com", "123456", "heho");

var_dump($user->addUser("test", "test@gmail.com", "123456", "heho"));

