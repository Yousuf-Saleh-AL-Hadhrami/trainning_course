<?php 

namespace Moe1\Oop\Database;
abstract class Database{

    public $database;

    public function Hello()
    {
        return 'Hello Database';
    }

    public abstract function connect();
   

    public abstract function select();
}

