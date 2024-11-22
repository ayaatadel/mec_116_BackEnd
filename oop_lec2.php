<?php

use Random\Engine as RandomEngine;

echo "<h2> OOP Lec2  </h2>";
/**
 * polymorphism ==> override ==> (accepted ==> chage print of function), overloading(not accepted==> prototype or return(parameters of function))
 */

/**
 * Access modifier
 * public  ==>  any one can access it
 * proteted  ==> only supClasses(inherit from class) can use it
 * private ==> only accessed in the same class
 * static  ==> variable of class ,function 
 * abstract
 * final  ==>
 * const  ==> constatnt value ==> can't be changed ==> only with class
 */
// class Human{
//     public const TEST ="cost value"; /** variable => class */
//     protected $name; 
//     static $count=0;
//     public $age;
//     private $address;

//     function __construct($name="userName",$age="userAge")
//     {
//         $this->name=$name;
//         $this->age=$age;
//         self::$count++;
//     }

//     static function PrintCount()  // varible of class  ==> const ,static 
//     {


//         echo self::$count,"<br>";
//         echo self::TEST;
//         // echo $this->name;  // isnot class variable but it refer to object
//     }

//     function setAddress($address)
//     {
//     $this->address=$address;
//     }
//     function getAddress()
//     {
//         return $this->address;
//     }
//     function printData()
//     {
//         echo "userName: $this->name, userAge:$this->age";
    
//     }
//     function printConst()
//     { 

//     /**  self => variable refer to class */
//         return self::TEST;
//     }
// }
// class User extends Human{
//    public $email;
//    public $password;
//    function __construct($email="userEmail",$password="userPassword",$name="userName",$age="userAge")
//    {
//     parent::__construct($name,$age);
//     // $this->name=$name;
//     // $this->age=$age;
//     $this->email=$email;
//     $this->password=$password;
//    }

// }
// class Employee extends Human{
//     public $position;

//     function __construct($name="userName",$age="userAge",$position="userPosition")
//     {
//     parent::__construct($name,$age); 
//     $this->position=$position;
//     }
//     /**
//      * polymorphism ==> override ==> (accepted ==> chage print of function), overloading(not accepted==> prototype or return(parameters of function))
//      */
//     function printData()
//     {
//         echo "userName: $this->name, userAge:$this->age, userPosition: $this->position,<br>";
//     }
// }
// $h=new Human();
// $h2=new Human();
// $h3=new Human();
// $h->TEST="ayaat";
// $h->PrintCount();
// echo Human::TEST;
// echo Human::$count;
// $h->printConst();
// $e=new Employee();
// $e->printData();
// // echo $e->$address;
// $u=new User(name:"ayaat",age:25);
// $u->printData();
// $u2=new User(email:"ayaat@gmail.com",password:"12345");
// print_r($u);
// echo "<br>";

// $h1=new Human("ayaat",25);
// $h2=new Human("eman",24);
// $h1->name="ayaat";
// echo $h1->name,"<br>";
// print_r($h);
// echo "<br>";
// print_r($h1);

// compostion  => الاعتماديه
//  class Engine{
//     public $gasType;
//      private $count=3.14;
//     function __construct($gasType)
//     {
//         $this->gasType=$gasType;
//     }
//     final function setCount($count)
//     {
//         $this->count=$count;

//     }
//     final function getCount()
//     {
//         return $this->count;

//     }
//     function engineStart()
//     {
//         echo "Engine Start <br>";
//     }
// }

// final class Car{
  
//     public $model;
//     public $type;
//     public $engine;
//     function __construct($model,$type,Engine $engine)
//     {
//         $this->model=$model;
//         $this->type=$type;
//         $this->engine=$engine;
//     }

//     function carStart()
//     {
//         echo "car Start <br>";
//        $this->engine->engineStart();
//     }

// }
// class Test extends Engine{
//     function __construct($gasType)
//     {
//         parent::__construct($gasType);
//     }
//   function printHello()  {
//     echo "Hello Final <br>";
//   }
// }
// $t=new Test("gas");
// $t->getCount();
// $e=new Engine("gas");
// // $e->engineStart();
// $c=new Car("mmj","marcedes",$e);
// // print_r($c);
// $c->carStart();
// $c->engine->engineStart();
// echo $c->engine->gasType;

/** Abstraction   ==> hidden implementation of function*/
// abstract class Human{
//     public const TEST ="cost value"; /** variable => class */
//     protected $name; 
//     public $age;
//     function __construct($name="userName",$age="userAge")
//     {
//         $this->name=$name;
//         $this->age=$age;
//     }
//   abstract function printData():void;
//   abstract function printString():string;
//   function printConst()
//   {
//     echo self::TEST;
//   }

// }

// class Employee extends Human{
//     public $position;

//     function __construct($name="userName",$age="userAge",$position="userPosition")
//     {
//     parent::__construct($name,$age); 
//     $this->position=$position;
//     }
//     function printData():void
//     {
//         echo "userName: $this->name, userAge:$this->age, userPosition: $this->position,<br>";
//     }
//     function printString():string
//     {
//         return "userName: $this->name, userAge:$this->age, userPosition: $this->position,<br>";
//     }
// }
// class manager extends Human{
//     public $data;

//     function __construct($name="userName",$age="userAge",$data="userdata")
//     {
//     parent::__construct($name,$age); 
//     $this->data=$data;
//     }
//     function printData(): void
//     {
//         echo "userName: $this->name, userAge:$this->age, userdata: $this->data,<br>";
//     }
//     function printString():string
//     {
//         return "userName: $this->name, userAge:$this->age, userdata: $this->data,<br>";
//     }
// }

interface Animal{
    function sound():void; // abstract function
    function printName();
}
interface Mammel{
    function type():string;  
}
class Dog implements Animal{
    function sound():void{
        echo "park";
    }
    function printName(){
        echo "Name";
    }
}
class cat implements Animal ,Mammel{
    function sound():void{
        echo "meaw";
    }
    function type():string{
        return "cat";
    }
    function printName(){
        echo "Name";
    }
}
?>