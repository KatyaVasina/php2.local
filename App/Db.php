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
        //echo ('Hello DB!');
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
        //var_dump($this->dbh);
        
    }

    // выполняет переданный SQL-запрос и возвращает данные
    public function query($sql)
    {
        $sth = $this->dbh->prepare($sql); // подготавливаем запрос
        $res = $sth->execute();
        //var_dump($sth);
        echo "</br>";
        var_dump($res);

        $data = $sth->fetchAll();
        echo "</br>";
        var_dump($data);

        if (false !== $res){
            return $data;
        }
        return [];
    }

}