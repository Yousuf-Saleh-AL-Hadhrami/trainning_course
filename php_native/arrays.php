<?php 

// Indexed Array 
// $persons = array(

//     "Ahmed", "Ali", "Salim","Yousuf"
// );

$persons = ["Ahmed", "Ali", "Salim","Yousuf"];

// Associative Array
$countries = [

     "om" => "Oman",
     "uae" > "United Arab Emarates",
     "sa" => 20
];


// echo $persons[3];

// echo $countries["sa"];


// Multidiemensional Array 

$students = [

    ["id" => 20 , "name" => "Yousuf AL Hadhrami", "address" => ["Sumail", "Izki"]],
    ["id" => 30 , "name" => "Ali Salim Al Mahrouqi", [] , []],
];


echo $students[1]["name"];
