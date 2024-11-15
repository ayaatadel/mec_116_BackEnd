<?php 

// methodology or paradigm for writing code  
// pp ==> Procedural  programming  => function()
// oop  ==> obect oriened programming => way for writing code  => dependant on object => ex: car , home , human 
// object  => properities ,( Operation ( ),functions , methods)
//==  car ==> properities=>,model , color , price  ==> methods => walk , return

// class (blue print)==> car ,  => class className
//====>  object (instance)

// class Human{
//     // properities
// public $name="nada";
// public $age=15;
// // operations , functions
// function walk()
// {
//   echo "Human can Walk";
// }
// }

// class ==> object
// $h1=new Human();
// // $h1->name="ayaat";
// // $h1->age=24;
// // $h1->walk();
// print_r($h1);

/** constructor => function with out return ==> call after make object from class 
 * 
 * ====> intial values for properities 
 * ===> print any thing after create object
 * defalut constructor ==> built in function 
 * parametarized constructor
 * (non parametarized , no args) construtor
 * 
*/

// noArgs or non parametarized Constructor 

// class Human{
//   public $name;
//   public $age;
//   public $email;
//   function __construct()  // constructor
//   {
//     // this => variable Refers to the current object
//       $this->name="ayaat";
//       $this->age=24;
//       $this->email="email.com";
//   }
//   function walk()
//   {
//     echo "Human can Walk";
//   }
// }
// $ayaat=new Human();  // instance ==> copy
// $ayaat->name="ayaat";
// $ayaat->age=24;
// $omar=new Human();
// $omar->name="omar";
// $omar->age=24;

// print_r($ayaat);
// echo"<br>******* <br>";
// print_r($omar);

// prametarized constructor

// class Human{
//   public $name;
//   public $age;
//   public $email;
//   function __construct($n="userName",$a="userage",$e="useremail.com")  // parametarized constructor
//   {
//     // this => variable Refers to the current object
//     // $h1->name="ayaat";
//       $this->name=$n;
//       $this->age=$a;
//       $this->email=$e;
//   }
//   function walk()
//   {
//     echo "Human can Walk";
//   }
// }

// $omar=new Human("omar",24,"omar@gamil.com");
// print_r($omar);
// echo "<br>***********<br>";
// $karas=new Human("karas",21,"karas@gamil.com");
// print_r($karas);
// echo "<br>***********<br>";
// // $mec=new Human("mec",null,"mec@gmail.com");
// // $mec = new Human("mec", e: "mec@gmail.com");
// $mec = new Human(e: "mec@gmail.com");
// print_r($mec);


/**
 * OOP Principles
*1) Encapsulation  ==> كبسوله ==> hiddden data protected
*  ===> setter , getter
*2) Inheritance
*3) Abstraction
*4) Polymorphism  // overRiding , overLoading
*/ 
/**
 * Acess modifier ==> privalges of dealing with  data
 * public => any one can access it
 * private => خاص => class 
 */
// class Human{
//     private $name;
//     private $age;
//     public $email;
//     function __construct()  // constructor
//     {
//       // this => variable Refers to the current object
//         $this->name="ayaat";
//         $this->age=24;
//         $this->email="email.com";
//     }
//     function setName($userName)
//     {
//         $this->name=$userName;
//     }
//     function getName()
//     {
//       return $this->name;
//     }
//     function setAge($userAge)
//     {
//         $this->age=$userAge;
//     }
//     function getAge()
//     {
//       return $this->age;
//     }
//     function walk()
//     {
//       echo "Human can Walk";
//     }
// }
// $test=new Human();
// // $test->name="ayaat";
// $test->setName("ayaat");
// echo $test->getName();



/**
 * inheritance  => الوراثه => child can inherit from parent
 * superClass ==> parent ,, supClass => child
 */

class Human{
    public $name;
    public $age;
    private $password;
  
    function __construct($n="userName",$a="userAge",$p="userPassword")  // constructor
    {
        $this->name=$n;
        $this->age=$a;
        $this->password=$p;
    }
    function setPassword($pas)
    {
      $this->password=$pas;

    }
    function getPassword ()
    {
      return $this->password;

    }
    function walk() // (name , parameters)=>(prototype)
    {
      echo "Human can Walk";
    }
}
class Person extends Human{
// public $name;
// public $age;
public $email;
function __construct($n="userName",$a="userAge",$e="userEmail")  // constructor
{
    // $this->name=$n;
    // $this->age=$a;
    parent::__construct($n,$a); // refer to parent class
    $this->email=$e;
}
function walk()  // parameters ==> overriding //  accepted in php
{
  echo "hello";
}
}
// $h=new Human();
$p=new Person();
// $p2=new Person(n:"ayaat",e:"ayaat@gamil.com");
// $p2->walk();
// $p->password="222";
// echo $p->password;
// $p2->setPassword("55555");
// $p2->getPassword();
print_r($p);



/**
 * polymorphisim ==> overriding , overloading
 * 
 * overloading =>   not accepted in php
 * i have more than funions with same Name but
 * with different in parameters 
 * 
 * Ex: function display($c1){echo $c1}
 * Ex: function display($c1,$c2){echo $c1, $c2}
 * 
 * ===============================
 * overriding  =>  accepted in php
 * I have more than funions with same Name , and same number of parameters but  with different in body 
 *
 * Ex: function display(){echo "hello"}
 * Ex: function display(){echo "php group"}
 */








?>
