<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 06.02.2017
 * Time: 23:38
 */

namespace App;


class Model
{
    const TABLE = '';

    public static function findAll ()
    {
        $db = new \App\Db();
//        return $db->query('Select * from users', \App\Models\User::class);
//        return $db->query('Select * from users', self::class);
        return $db->query('Select * from ' . static::TABLE, static::class);

    }
}