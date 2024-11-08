<?php  

// comment  => hint for me ==>   single line
# comment => single line
/*
comment on multi line

*/
/// print
// print("Hello from day1");
// echo "Group 116 BackEnd";
// echo "<br>";
// print("Hello from day1");
// echo "Group 116 BackEnd";
// echo "<br>";


// varibale => place store in memory =>$variableName

/**
 * can't start with number
 * can't start with % # @ * &
 * _====> $_hh   => underScore
 * ===> descriptive => $userName   ===> camelCase =>sC  ==>sxxx_nxxxxx       => underScore
 * 
 * ==> caseSensitive => $age => variable , $Age => another variable

 * ======= declarion variable   => تعرف متغير
 *                   $variableName
 * ====== asign variable       =>  تعطي المتغير قيمه
 *                  $variableName=value
 */                 
 
/***
 * variables constant => pi=22/7  ====> قيمته ثابته
 * 
 * define( string $name , $value [ bool $case_insensitive ])
 * /// ==> capital  => DATA_BASE_NAME
 * define("DATA_BASE_NAME","group1",true)
 */
///  variable  => age , Age
//  pi=3.14      PI=3.14
//  define("DATA_BASE_NAME","group1");
//  print(DATA_BASE_NAME);


// $group=5;
// $test="ayaat";
// $day_one="0";
// $dayTwo="hhhhh";
// $_text="ayaat";
// $user_Name="phpGroup";
// $age=24;
// // over ride => change value of variable
// $age=28;
// $age=30;
// $age="hhhh";
// $Age=25;
// // print($group);
// print($age);   /// 30   /// hhh
// echo "<br>";
// print($Age);
// echo $test;



//////////////////   Different between  echo , print

/**
 * 
 * == echo, print ==> variables ==> that take single value
 * echo can take more than parameter  =>echo "",""
 * echo()===> one parameter
 * 
 * print => take one parameter
 */

// $name="mohammed";
// $age=21;
// echo "Name : ",$name,"<br>","age: ",$age ,"<br>";
// // echo( "Name : ",$name,"<br>","age: ",$age);

// print("Name : "); 
// print($name); 
// print("<br>");
// print("Age : "); 
// print($age); 
// print("<br>")


/**
 * =====>  data types
 * number 
 * int  => 2,3,8, double => 2.5 ,13.14 , float =>13.14
 * string   => "php g1"
 * boolean  => true , false
 * array    => []
 * object => {name=> ayaat, age=>25}
 */

//  $name="ayaat";
//  $age=24;
// $opinion=true;
// $users=["ayaat",25];
// $salary=50000.500;
// echo  gettype($age) ,"<br>";
// echo  gettype($name),"<br>";
// echo  gettype($opinion),"<br>";
// echo  gettype($salary),"<br>";
// echo  gettype($users),"<br>";
/**
 * losely typed language   => already know dataType of variable from value of variable
 */


 /// isInt() , isDouble   => true  => 1 ===> false    , 

//   var_dump (is_int($users));  
//   echo is_bool($opinion);
//   echo is_array($users);
//   echo is_float($salary)


// operators => artethmatic operator
            // comparison operator
            // logical operator
            // asignment operators
            
/**
 * atrthmatic operator
 * +   -  / *   % 
 */


//  $num1=5;
//  $num2=2;
//  echo "num1+num2  = ",$num1+$num2 ,"<br>";
//  echo "num1-num2  = ",$num1-$num2 ,"<br>";
//  echo "num1*num2  = ",$num1*$num2 ,"<br>";
//  echo "num1/num2  = ",$num1/$num2 ,"<br>";
//  echo "num1%num2  = ",$num1%$num2 ,"<br>";
//  echo "num1%num2  = ",$num1%$num2 ,"<br>";
//  echo "num1**num2 =",$num1**$num2,"<br>";


// 2^2 ==>4   ==> 2**2=4
// 5%2   == 5/2  = 2   ,1
// 15 %3 => 0
//15%4 =>3
// 18%4 =>2


//============================  logical  operators
/**
 * logical  operator
 * &&  || !
 * && => value(true)==> true && true
 * ||  => value(true)  => true || false
 * ||  => value(false)  => false || false
 * 
 * !=> value (true)  => false
 * !=> value (false)  => true
 * 
 */


// echo(true&&true);
// echo "<br>";
// var_dump(true&&false);
// var_dump ("<br>");
// var_dump(false||false);
// echo "<br>";
// echo(true||false);
// echo "<br>";
// echo(!false);
// echo "<br>";
// var_dump(!true);



/**
 * comparison operators
 * > < <= >= != <> , !==
 * 
 * ==   :=>value 
 * ===  :=> value , dataType
 * !=   :=>value 
 * !==  :=> value , dataType
 */

//  var_dump(2=="2","<br>");
//  var_dump(2==="2","<br>");
//  var_dump(2!=="2","<br>");  // true 2==="2"  => !false  => true 
//  var_dump(2!="2","<br>");  // false 2=="2"  => !true  => false
//  var_dump(2!==2);     // false   2===2  => !true => false
  


///   concatination operator    .   
// $fName="ayaat";
// $lName="adel";
// $fullName=$fName." ".$lName;
// echo $fullName;


// asignment operators

/**
 * increment   +
 * decrement   -
 * preIncrement  =>  ++ x
 * PostIncrement  => x  ++
 */

$x=5;
// $x++;    //5==> 6 
// echo $x,"<br>";
// ++$x;/// 7 ===>7
// echo $x,"<br>";
// $x--;     // 7  => 6  
// echo $x,"<br>";   //==6
// --$x;/// 6 ===>5
// echo $x,"<br>";   //5

// $x=$x+1;
// $x++;
// $x+=1;
// $x+=2;// x=x+2
// $x=$x-1;  // $x-=1 , $x--
// // $x-=2;// x=x-2

//$x*=2;  => $x=$x*2
//$x/=2;  => $x=$x/2
//$x%=2;  => $x=$x%2
//$x.=$y;  => $x=$x.$y


// $age=400;   //  400 day   
// /**
//  * 400/365  => 1  ===> 35
//  * // month => 35 /30  => 1  , 5day
//  * day   =>   35%30
//  */
// $year=(int)($age/365) ;
// echo "years : ",$year,"year" ,"<br>";
// $month= (int) (($age%365)/30);
// echo "month : ",$month,"month","<br>";
// $day= (int) (($age%365)%30);
// echo "day : ",$day,"days","<br>";



// castint => datatype  => datatype
// 1.333336   => 1
// double  => integer

//(int)(222)

// echo (int)(5.5);
// $x=5000.55;
// // $x=5(double)
// echo gettype($x),"<br>";
// // var_dump((float)($x)) ;
// $x=(integer)($x) ;
// // $x=(string)($x) ;
// // echo gettype($x);
// echo ($x);


/////////////   conditional statement  => الجمل الشرطيه
//  if , if else , if elseif else , switch statement

// $x=5;
// if ($x>5) {
//     # code...
//     print("Greater than 5");
// }

/////////////  if else
// if ($x>5) {
//     # code...
//     print("Greater than 5");
// }else{
//     print(" Not Greater than 5");
// }


//////////  if elseif else
// $x=15;
// if ($x>5) {
//     # code...
//     print("x is greater than 5");
// }else if($x<5)
// {
//     print("x is less than 5");
// }
// else{
//     print("x qual 5");
// }


//////////////////////

// $grade=90;

/**
 * >=85  A
 * >=75    B
 * >= 65   c
 * >=50    d
 * <50     f
 */
// $grade=70;
//  if($grade>=85)
//  {
//     print("Grade A");
//  }
//  elseif ($grade>=75)
// {
//         print("Grade B");
//  }
//  elseif ($grade>=65)
// {
//         print("Grade C");
//  }
//  elseif ($grade>=50)
// {
//         print("Grade D");
//  }else{
//     print ("sorry you failed");
// }

// $grade="A";
/***
 * grade => A  => Cs
 *          B  => IT
 *          C   => IS 
 *          Mathematics
 *          
 */

//  if($grade=="A")
//  {
//     print("Welcome in Cs");
//  }elseif($grade=="B")
//  {
//     print("Welcome in IT");
//  }
//  elseif($grade=="C")
//  {
//     print("Welcome in IS");
//  }
//  else{
//     print("Welcome in Mathematics");
//  }
// $grade="A";
// switch ($grade) {
//     case "A":
//     // case $grade:
//         print("Welcome in Cs");
//           break;
//     case "B":
//         print("Welcome in IT");
//         break;
    
//     case "C":
//         print("Welcome in IS");
//         break;
    
//     default:
//         # code...
//         print("Welcome in mathematics");
//         break;
// }



////////////////////////  apply
// $name="ayaat";
// // echo "hello,",$name;
// echo "hello,".$name;

// $X=500;
// if(($X%2)==0)
// {
//     print("Even");
// }else{
//     print("Odd");
// }

// $x="ahmed";
// $$x="khaled";
// print($ahmed);
$y;
echo($y??"yousef")

?>

