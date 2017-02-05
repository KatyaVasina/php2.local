<?php
/**
 * Created by PhpStorm.
 * User: vazhdaev
 * Date: 02.02.2017
 * Time: 14:06
 */

namespace App\Models;


class User
{
    public $name;
    public $email;
    public $id;

    public static function findAll ()
    {
        $db = new \App\Db();
        return $db->query('Select * from users', \App\Models\User::class);
    }
}