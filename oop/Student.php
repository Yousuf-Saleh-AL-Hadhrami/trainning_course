<?php

class Student extends Person {

    public $stdId;
    public $sps;
    public $gpa;

    public $isAuthorize = false;
    public $credentials = [];

    public function __construct($n, $add, $hobb, $stdId, $sps, $gpa)
    {
        parent::__construct($n, $add, $hobb);

        $this->stdId = $stdId;
        $this->sps = $sps;
        $this->gpa = $gpa;
    }

    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    public function login($credentials)
    {
        if (
            $credentials["username"] === $this->credentials["username"] &&
            $credentials["password"] === $this->credentials["password"]
        ) {
            $this->isAuthorize = true;
        }

        return $this; // IMPORTANT for chaining
    }

    // Method Overriding
    public function getInfo()
    {
        if ($this->isAuthorize) {
            return parent::getInfo() .
                " and Student ID is " . $this->stdId .
                " and Specialization is " . $this->sps .
                " and GPA is " . $this->gpa;
        }

        return "Student is not logged in";
    }
}
