<?php 

namespace App\Oop3\Employee;

class Daily_Employee extends Employee  
{

    public $daysWork;

    public $daily_amount;

    public function setData($days , $amount = 7)
    {
        $this->daysWork = $days; 
        $this->daily_amount = $amount; 

        return $this;
    
    }

    public function getTotalSalary($deduction = 0)
    {
        return $this->daysWork * $this->daily_amount;
    }


}