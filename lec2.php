<?php 


/**
 * //////////////////  search
 * setType => code  == what is it and what is usage of it
**What is isset() and empty() functions and the
**difference between them?
**What is the meaning of variable of variable?
**What is variable scope and its types?
**What is the difference between ? And ??
 */

 // setType  in php
//  https://www.geeksforgeeks.org/php-settype-function/
 // parsing ==> covert from datatype to another datatype
 /**
  * =============== php => losely typed language===> 
  *integer
  * string
  * boolean
  *float  ==> double
  *array
  *object 
   */ 

//   $month= (int) (($age%365)/30);

// $var1 = "123xyz"; 
// $var2 = 3; 
// $r = true; // true  => 1   , false ==>0
// settype($var1, "integer"); 
// settype($var2,"float"); 
// settype($r, "string"); 
// echo $var1."<br>"; 
// echo(gettype($var1));  // get data type of variable
// echo $var2."<br>"; 
// echo gettype($var2),"<br>";
// echo $r."<br>";
// echo gettype($r),"<br>";


//**What is the meaning of variable of variable?
// declartion  , assign
//https://www.geeksforgeeks.org/what-does-dollar-dollar-or-double-dollar-means-in-php/?ref=header_outind
// $x="ayaat";
// $$x="ahmed";
// // $ayaat="ahmed";
// print($ayaat);



// conditional statement if if else , switch , ternary operator (?)
// $x=6;
// if($x>5)
// {
//     print("more than 5");
// }else if($x<5){
//     print("less than 5");
// }else{
//     echo "equal 5";
// }
//////////////// ternary operator  => ?=>(condition)?true:false
// ($x>5)? print("more than 5"): print("less than 5");
// ($x>5)?print("more than 5"):(($x<5)?print("less than 5"):print("equal 5"));

/// ??
// $y;
// echo($y??"yousef")


// ************************   session ********************/
/**
 * Loops 
 *  For loop 
 *  While loop 
 *  Do while loop 
 *  Foreach loop 
 * */ 

//  echo 1,"<br>";
//  echo 2,"<br>";
//  echo 3,"<br>";
//  echo 4,"<br>";
//  echo 5,"<br>";
//  echo 6,"<br>";
//  echo 7,"<br>";
//  echo 8,"<br>";
//  echo 9,"<br>";
//  echo 10,"<br>";

// for  ==> perefered usage if i know number of repeats 
/**
 * for(;;)
 * 1- initialization
 * 2- condition  => true {}
 * 3- increment , decrement 
 * 4- condition ==> true{}
 * 
 * == repeat step 3 ,4 until condition => false
 */
// for($x=1;$x<=10;$x++)
// {
//    echo $x,"<br>";
// //    $x++;
// }

// for(;;){}===>  infinity loop


/// while  => perefered usage if i don't know number of repeats 
/**
 * 1- initialization
 * 2- condition  => true {}
 * 3- increment , decrement 
 * 4- condition ==> true{}
 * 
 * == repeat step 3 ,4 until condition => false
 */
// $x=1;
// while($x<=5)
// {
//     echo $x,"<br>";
//     $x++;
// }

// while(true)
// {
//     $x=10;
//     if($x>=10)
//     {
//        print($x);
//        break;
//     }else{
//         echo "not declared";
//     }
// }

// do-while

/***
 * execute code only 1 time until codition false
 */
// $x=10;
// do{
//     echo($x);  ///10
//     $x++;
// }while($x<10);
// $x=1;
// do{
//     echo($x);  //1   2   3  4  5
//     $x++;
// }while($x<=5);

////////////
// $n=10;
// for($i=1;$i<=10;$i++)  // 2 4 6 8 10
// {
//     if($i%2==0)
//     {
//         echo $i ,"<br>";
//     }
// }
// for($i=2;$i<=10;$i+=2)  // 2 4 6 8 10
// {
   
//         echo $i ,"<br>";
  
// }

// Flow control Keywords
// break  continue

// break ==> stop loop => exit from loop 
// continue  => ignore value => continue

// for($x=1;$x<=5;$x++)
// {
//     if($x==3)
//     {
//         break;   //==> stop  ==> loop 
//     }
//     echo $x,"<br>";
// }
// echo "*********************** <br>";
// for($x=1;$x<=5;$x++)
// {
//     if($x==3)
//     {
//         continue;   //==>  ignore => value after it
//     }
//     echo $x,"<br>";  //1 2  4   5
// }

///////////  array  /////////////////

//    0     1  2  3   4   5  => index
                    //    0  1
// $x=["ayaat",5,12,30,true,[1,2]];  // length => 6
// // // print array
// print_r($x);  // index of each value => value of index
// echo "*********************** <br> <br>";
// var_dump($x); // length of array ,index value =>datatype=>value
// index length dataType
// array    ==> index => 0   , length==> number of values of array

/** types of array
 * indexed array
 * multidimension array
 * associative array
 */

// indexed array  => [1,2,3]
// $x=[1,"ayaat",2];  // length=3
// print($x[0]);
// echo "<br>";
// print($x[1]);
// echo "<br>";
// print($x[2]);
// echo "<br>";
/*** get lenght of array ==> count($x==> name of array) */
// print(count($x));
// for($index=0;$index<count($x);$index++)
// {
// print($x[$index]);
// echo "<br>";
// }

///      add values to array  from last of array
// $x=[1,"ayaat",2];  // length=3
// $x[3]="ahmed";
// $x[]="shimaa";
// // $x[15]=15;
// $x[]="mec";
// print_r($x);
// for($index=0;$index<count($x);$index++)
// {
// print($x[$index]);
// echo "<br>";
// }

//  push
// array_push($x,15,16,"mahmoud","karas","yousef");
// // // array_push($x,[4,5]);

// print_r($x);
// echo "************************ <br>";
// for($index=0;$index<count($x);$index++)
// {
// print($x[$index]);
// echo "<br>";
// }

// remove elements from array  from last of array  // array_pop

// array_pop($x);
// array_pop($x);
// array_pop($x);
// 


// $x=[1,"ayaat",2];
// add elemnts of array from start  shift unshift
// array_unshift($x,"mec");
// print_r($x);  // mec 1 ayaat 2
// echo "<br>************************ <br>";
// remove elemts of array from start

// array_shift($x);
// array_shift($x);
// array_shift($x);
// print_r($x);  //2
// echo "<br>************************ <br>";

// merege between arrays
// $x=[1,"ayaat",2,5];
// $y=["mohamed","Shimaa","yousef","karas",100];
// $y=$x+$y;
// print_r($y);


// array_merge
// $newArray=array_merge($x,$y);
// echo "<br>array before sort <br> ";
// print_r($newArray);
// echo "<br>array after sort <br> ";
// asort($newArray);
// print_r($newArray)






/// multidimension array
// $x=[1,2,30];
// $x[1];
// row cols
// $arr=[[1,2],[25,30]];
// 00  01
// 10  11

// print($arr[0][0]);
// // echo "<br>";
// print($arr[0][1]);
// echo "<br>";
// print($arr[1][0]);
// echo "<br>";
// print($arr[1][1]);
// echo "<br>";
// $arr=[[1,2],[25,30]];
// for ($i=0; $i < count($arr); $i++) {
//     // [1,2]    [25,30]
//     # code...
//     // print($arr[$i]);
//     // print_r($arr[$i]);
//     for ($j=0; $j <count($arr[$i]) ; $j++) { 
//         # code...
//        print ($arr[$i][$j]);
//        echo"<br>";
//     }
//     echo"*************** <br>";
// }
// $arr=[1,2,3];
// foreach ($arr as $key => $value) {
//     // print($key);   // index
//     // print($value); // value of array

//     # code...
// }
// foreach ($arr as $shimaa ) {
   
//     print($shimaa); // value of array
// }

// $arr=[[1,2],[25,30]];

// foreach ($arr as $value) {
//     # code...
//     // print_r($value);  // array => [1,2],[25,30]
//     foreach ($value as $newValue) {
//         # code...
//         print($newValue); // 1,2,25,30
//         echo"<br>";
//     }

// }

/////////////////////////// associative array  "key"=>value
//========== key

// $users=["ayaat",24,"eman",26,"yousef",22];
// $users=["name"=>"ayaat","age"=>24];
// print($users["name"]);
// echo "<br>";
// print($users["age"]);
$users=[
    ["name"=>"ayaat","age"=>24],
    ["name"=>"eman","age"=>26],
    ["name"=>"yousef","age"=>22]
];
// // print($users[2]["name"]);
// // print($users[1]["age"]);

// foreach ($users as  $arrayValue) {
//     # code...
//     foreach ($arrayValue as $key => $value) {
//         # code...
//         echo "$key : $value <br>";
//     }
// }
/////////////////////   task 
// echo "<table border='1px'>";
//     echo "<thead>";
//         echo "<tr>";
//         echo "<td>";
//         echo"name";
//         echo "</td>";
//         echo "<td>";
//         echo"age";
//         echo "</td>";
//         echo "</tr>";
//     echo "</thead>";

//     echo"<tbody>";

//     foreach ($users as  $arrayValue) {
//         # code...
//         echo"<tr>";
//         // namee    age
//         foreach ($arrayValue as $key => $value) {
//             # code...
//             // [ayaat 24]
//             // echo "$key : $value <br>";
//             echo "<td>";
//             echo"$value";
//             echo "</td>";
        
//         }
//         echo"</tr>";
//     }
//     echo"</tbody>";

// echo"</table>";

// $numbers=[15,30,0,105,150];


?>