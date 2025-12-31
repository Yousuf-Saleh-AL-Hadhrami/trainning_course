<?php 

namespace App\Oop3\Employee;

class Employee{

    public $bSalary;
    public $bounus;

    public $totalSalary;

    public function setBsalary($bSalary)
    {
        $this->bSalary = $bSalary;

        return $this;
    }    
    public function getBsalary()
    {
         return $this->bSalary ;
    }

    public function setBounus($bounus)
    {
        $this->bounus = $bounus;

        return $this;
    }



    public function getTotalSalary($deduction = 0)
{
    $totalSalaryWithoutDeduction = $this->bSalary + $this->bSalary * $this->bounus;

    $totalSalaryWithDeduction =  $totalSalaryWithoutDeduction - $totalSalaryWithoutDeduction * $deduction;

    return $totalSalaryWithDeduction;

}

}