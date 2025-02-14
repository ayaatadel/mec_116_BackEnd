<?php

echo "<h3 style='text-align:center'> Day 4 </h3>";

/**
 * functions
 * string ==> functions
 * OOP
 */

/**
 * function  => block of code => resuable 
 * function functionNme(){ body}
 * call function ==> functionNme()
 * 
 * ======types=====
 * 
 * userDefined functions ==> function user write code of it
 * 
 * user defined funstion ==> return value (return) , not return value   ==> void
 * 
 * prametarized  , non parametarized
 * 
 * 
 * function ==> proto type ==> name (parameters) , body{}
 * 
 * preDefined Functions ==> php==> count()=> length, push
 */

// not return  ==> void , not parametarized
// function display1()
// {
//     echo "hello world"  ;
// }
// display1();


// return function   , parametarized
// function display()
// {
//     return "hello world";
// }
// echo display();



// array_push(values)  ===> parametarized ==> take parameters
// pop()==>not parametarized ==> don't take any parameters

//  summation ==> 
// $x1=5;
// $x2=10;
// echo $x1+$x2;
// function sum($n1,$n2)
// {
//     return $n1+$n2;
// }
// echo sum(20,30),"<br>";
// echo sum(50,30),"<br>";
// echo sum(20,100),"<br>";
// // echo sum(46,16),"<br>";
// function average($n1,$n2)
// {
//     // $result=($n1+$n2)/2;
//     $result=(sum($n1,$n2)/2);
//     return $result;
// }

// echo average(3,5);


// $display=function()
// {
//     return "hello";
// };


// User Defined functions
/**
 * normal ==>prototype{body}
 * anounomus => function without Name
 * callBack
 * recursive 
 *  */ 

// function display()
// {
//     return("Hello");
// }
// echo display();

// $result= function()
//  {
//      return("Hello");
//  };

//  echo $result(),"<br>";


// $summation=function ($n1,$n2)
// {
//     return $n1+$n2;
// };
// print $summation(10,15);

/////////////////////////   string  //////////

// $text="Hello Group PHP";
// get length of string
// echo strlen($text),"<br>";

// replace word in string in newString => can't change in main string 
// $newString=str_replace("PHP" ,"116 Back End",$text);
// echo $newString ,"<br>";
// echo $text ,"<br>";

// conert string to array according to sperator  explode("sepeartor,$stringName)
// var_dump(explode(" ",$text)) ;
// $newStringArray=explode(".",$text);
// foreach ($newStringArray as $value) {
//     # code...
//     echo $value,"<br>";
// }


// convert  string to lowercase
// echo $text,"<br>";
// echo strtolower($text),"<br>";
// // convert  string to upper case
// echo strtoupper($text);


// get postion 

// $text="Hello Group PHP";
// echo strpos(strtoupper($text),"E");


?>