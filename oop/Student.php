<?php 

class Student extends Person {

    public $stdId;
    public $sps;

    public $gpa;

    public function __construct($n, $add, $hobb , $stdId , $sps , $gpa)
    {
        parent::__construct($n, $add, $hobb);

        $this->stdId = $stdId;
        $this->sps = $sps;
        $this->gpa = $gpa;

    }

    // Method Overriding 

    public function getInfo()
    {
        return parent::getInfo() . " and Student id is " . $this->stdId . ' and Specialization is ' . 
                                    $this->sps . ' and  GPA is ' . $this->gpa;
    }


}