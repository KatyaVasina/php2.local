<?php

namespace App;

echo ' - Db - ';

//echo (file_exists("App/Singleton.php"))?"Существует":"Не существует";
require "App/Singleton.php";


//trait Singleton
//{
//    protected static $instance;
//
//    protected function __construct()
//    {
//    }
//    public static function instance()
//    {
//        if (null === static::$instance) {
//            static::$instance = new static;
//            //echo '--Singleton instance--';
//            //\App\showMessage::showM(' - Singleton instance - ');
//        }
//        return static::$instance;
//    }
//}

class Db
//extends Singleton
{
    use Singleton;

    protected $dbh;

    protected function __construct()
    {
        //echo " - db 001 - "; 
        //\App\showMessage::showM(' - db construct - ');
        //die();
        echo (' - Db constr');
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');

        //var_dump($this->dbh);
        
    }

    // выполняет переданный SQL-запрос и возвращает данные
    public function query($sql, $class)
    {
        //\App\showMessage::showM(' - db query - ');
        echo ' - db query - ';
        //\App\showMessage::showM($sql);

        $sth = $this->dbh->prepare($sql); // подготавливаем запрос
        $res = $sth->execute();
        //var_dump($sth);
//        var_dump($res);

        $data = $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        echo "</br>";
        //var_dump($data);

        if (false !== $res){
            return $data;
        }
        return [];
    }

}