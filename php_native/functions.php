<?php 

declare(strict_types=1);

define("NAME","PHP_NATIVE");

//https://www.domain.com/users/index?name=yousuf7id=20#Anchor URL + URI 

function sayHello(string $name, array $hobbies):string|int|float|bool   // parameter
{
    return 'Hello '. $name . 'Your hobbies ' . implode(" and ", $hobbies);
}

//echo sayHello("Yousuf", ["Reading","Programming"]); // value passed is called argument


function add($x , $y)
{
     return $x + $y;
}

$sum = add(5 , 6);

$sum + 20;

echo $sum;