<?php

require "./Person.php";
require "./Student.php";


$person1 = new Person( 'Mohammed', 'Rustaq', ['Reading']);

$person2 = new Person( 'Mohammed', 'Rustaq', ['Reading']);

$person3 = new Person( 'Mohammed', 'Rustaq', ['Reading']);


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
    ->getInfo();
