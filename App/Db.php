<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 28.01.2017
 * Time: 13:24
 */

namespace App;


class Db
{
    protected $dbh;

    public function __construct()
    {
        echo ('Hello DB!');
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
        
    }

}