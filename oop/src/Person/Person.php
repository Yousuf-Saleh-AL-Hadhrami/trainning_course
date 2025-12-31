<?php 

namespace Moe1\Oop\Person;
class Person
{
// public + protected + private // Access Modifiers or visibility markers 
public $name;
public $address;
public $hobbies = [];
public const AGE = 18; 

public static $counter = 0; 

protected $email = 'This email is comming from outside class';

public function __construct( $n , $add , $hobb)
{
    /* 
    give Intial Values when object is created
    passing a value to the object 
    printing something when object is created
    */

    //$this->email = $email;
    $this->name = $n;
    $this->address = $add;
    $this->hobbies = $hobb;

    self::$counter ++;

    echo "قمت بأخذ نسخة من الكائن Person <br>";
}

public static function getCount()
{
    return self::$counter;
 
}

public function setName($n)
{
   $this->name = $n;

   return $this;
}

public function setAddress($add)
{
   $this->address = $add;

   return $this;

}

public function setHobbies($hobb)
{
   $this->hobbies = $hobb;

   return $this;

}

public function getName()
{
    return $this->name;
}

public function getAddress()
{
    return $this->address;
}


public function getHobbies()
{
    return implode(" and ", $this->hobbies) . "<br> <br>";
}


 public function getInfo()
{
    return " The Name is " . $this->getName() . " and Address is " . $this->getAddress() . 
           " The Hobbies are " . $this->getHobbies();
}


}