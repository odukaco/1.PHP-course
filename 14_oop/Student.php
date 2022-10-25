<?php
require_once './Person.php';

class Student extends Person
{
    public int $stId;
    public function __construct($name, $age, $stId){
        parent::__construct($name,$age,null);
        $this->stId = $stId;

    }
}