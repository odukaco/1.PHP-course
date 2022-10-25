<?php
class Person {
    public $name;
    public $age;
    private $salary;

    public function __construct($name, $age, $salary){
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;

    }
    
    public function getSalary(){
        return $this->salary;
    }

    public function setSalary($salary){
        $this->salary = $salary;
    }
}