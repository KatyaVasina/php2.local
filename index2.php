<?php
//require __DIR__ . '/autoload.php';
require 'App\showMessage.php';
require 'App\Models\User.php';

showMessage::showM(' - index findAll');

$data = App\Models\User::findAll();


//echo (App\Models\User::class);
var_dump($data);


