<?php 
class Person{
    private $id;
    private $name;
    function __construct($id,$name)
    {
        $this->id=$id;
        $this->name=$name;
    }
    function getId()
    {
        return $this->id;
    }
    function setId($id)
    {
         $this->id=$id;
    }
    function getname()
    {
        return $this->name;
    }
    function setname($name)
    {
         $this->name=$name;
    }
    function printPersonData()
    {
        echo $this->getID(),$this->getName();
    }
}

class Emloyee extends Person {
    private $company;
    private $salary;
    function __construct($company,$salary)
    {
        $this->company=$company;
        $this->salary=$salary;
    }
    function getcompany()
    {
        return $this->company;
    }
    function setcompany($company)
    {
         $this->company=$company;
    }
    function getsalary()
    {
        return $this->salary;
    }
    function setsalary($salary)
    {
         $this->salary=$salary;
    }
    function printPersonData()
    {
        echo $this->getID(),$this->getname(), $this->getcompany(),$this->getsalary();
    }
}





?>