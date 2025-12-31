<?php

require './vendor/autoload.php';

use Moe1\Oop\Database\Database;
use Moe1\Oop\Database\Mysql;
use Moe1\Oop\Database\SqlServer;
use Moe1\Oop\Contract\Register;
use Moe1\Oop\Notifications\Notification;
use Moe1\Oop\Student\Student;
use Moe1\Oop\Person\Person;
use YousufAlhadhrami\Math;
use YousufAlhadhrami\Math\Calculator;

use Carbon\Carbon;

$start = Carbon::parse('2025-12-20')->locale('ar');
$end   = Carbon::parse('2025-12-23');

echo $start->diffForHumans($end);



$person1 = new Person( 'Mohammed', 'Rustaq', ['Reading']);

$person2 = new Person( 'Mohammed', 'Rustaq', ['Reading']);

$person3 = new Person( 'Mohammed', 'Rustaq', ['Reading']);


$mysql = new Mysql();
$sqlserver = new Sqlserver();


echo $mysql->select();
echo "<br>";
echo $sqlserver->select();
echo "<br>";






 //setName("Yousuf")
    //->setAddress("Izki")
    //->setHobbies(["Programming", "Football"])
    echo $person1->getInfo();

echo $person2->setName("Salim")
    ->setAddress("Nizwa")
    ->setHobbies(["Chess", "VollyBall"])
    ->getInfo();


echo $person3->setName("Nasser")
    ->setAddress("Muscat")
    ->setHobbies(["Writting", "Tennis"])
    ->getInfo();


echo (new Person( 'Mohammed', 'Rustaq', ['Reading']))
->setName('Hilal')
->setAddress('Manah')
->setHobbies(['Walking','Swimming'])
->getInfo();

//echo Person::getCount();

//echo $person1->getInfo();

echo "<br>";
echo "============================================";
echo "<br>";


echo (new Student(
        "Yousuf",
        "Izki",
        ["Programming", "Photography"],
        1002,
        "Software Engineering",
        "1.7"
    ))
    ->setCredentials(["username" => "admin", "password" => "admin"])
    ->login(["username" => "admin", "password" => "123456"])
    //->notifyAdmin()
    ->getInfo();

    echo "<br>";
echo "============================================";
echo "<br>";


$operation = new Calculator();

echo $operation->add( 10 , 35);
