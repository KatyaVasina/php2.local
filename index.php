<?php
require __DIR__ . '/autoload.php';

$data = \App\Models\User::findAll();


echo (App\Models\User::class);
var_dump($data);


