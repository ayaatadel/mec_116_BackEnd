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

class Human{
  public $name;
  public $age;
  public $email;
  function __construct($n="userName",$a="userage",$e="useremail.com")  // parametarized constructor
  {
    // this => variable Refers to the current object
    // $h1->name="ayaat";
      $this->name=$n;
      $this->age=$a;
      $this->email=$e;
  }
  function walk()
  {
    echo "Human can Walk";
  }
}

$omar=new Human("omar",24,"omar@gamil.com");
print_r($omar);
echo "<br>***********<br>";
$karas=new Human("karas",21,"karas@gamil.com");
print_r($karas);
echo "<br>***********<br>";
// $mec=new Human("mec",null,"mec@gmail.com");
// $mec = new Human("mec", e: "mec@gmail.com");
$mec = new Human(e: "mec@gmail.com");
print_r($mec);


?>
