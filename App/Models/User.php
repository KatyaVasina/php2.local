<?php
/**
 * Created by PhpStorm.
 * User: vazhdaev
 * Date: 02.02.2017
 * Time: 14:06
 */

namespace App\Models;


use App\Model;

class User extends Model
{
    const TABLE = 'users';
    
    public $name;
    public $email;
    public $id;


}