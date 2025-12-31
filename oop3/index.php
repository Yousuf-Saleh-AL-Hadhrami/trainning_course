<?php 

require './vendor/autoload.php';

use App\Oop3\Employee\Daily_Employee;
use App\Oop3\Employee\Employee;



$employee1 = new Employee();
$employee2 = new Daily_Employee();

echo $employee2->setData(30)
               ->getTotalSalary();