<?php


// echo "<h1>Revisio</h1>"; 
// var_dump(['ayaat','karas','yousef']);
// echo "<br>";
// print_r(['ayaat','karas','yousef']);

//variable=> decleration assignment
$userName="ayat";
//!= !== 

// var_dump('5'!=5); //  false  ==>value
// echo "<br>";
// var_dump('5'!==5); //true  ==>value,datatype 
// echo "<br>";
// $x=5;

// var_dump($x++); //   5 ==> 6
// echo "<br>";
// var_dump(++$x);   //7 ==>  7
// echo "<br>"; 
// var_dump($x--);  //7===>    6
// echo "<br>"; 
// var_dump(--$x);  //5==>      5
// $y=3;
// $y++;//===>4
// echo "<br>",3+$y++;  //7   y ===>5
// echo "<br>",$y;  //5
// $y=3+$y++; 
// echo "<br>",$y;  //8


// if  , switch , ternary operator ==> condition
$x=5;
$y=10;
// if($x>$y)
// {
//     echo $x,"<br>";
// }else{
//     echo "$y","<br>";
// }
/// 
// switch ($x) {
//     case 5:
//            echo 5,"<br>";
//         break;
//     case 6:
//            echo 6,"<br>";
//         break;
    
//     default:
//     echo "undeined value","<br>";
//         break;
// }
// ($x>$y)?print($x):print($y);
// echo($x>$y)?($x):($y);
// echo "$y";
// print("$x");

// // undefined => variable not defined or defined but has no value, null==> value in php 
// // $z=null;
print($z ?? "test");
// echo "<br>";
// var_dump($z ?? null);


// variable of variable
// $x="y";
// $$x=10;
// $y=10;
// echo $y;
//  $z=5;
// function test()
// {
//  global $z;
//  print( $z);
// }

//  function test2($y)
//  {
//     global $z;
//      $y=$z;
//  }
      
?>