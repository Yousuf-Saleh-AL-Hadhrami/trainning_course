<?php 
namespace Moe1\Oop\Database;
class SqlServer extends Database
{
    public function connect()
    {
        return ' I will connect to database Using sqlserver';
    }


    public function select()
    {
        return ' SELECT FROM table';
    }
}