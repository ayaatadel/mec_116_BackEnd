<?php 



// form  ==> method get , post ==>use
//$_POST
// var_dump($_POST) // array

//isset  ==> value , isempty ==> aleardy exist

/*** Register ==> insert data  */
require('./connection.php');
if(isset($_POST['BtnRegister']))
{
    $userName=$_POST['name'];
    $userPassword=$_POST['password'];
    $userEmail=$_POST['email'];

/** regular expression   ==> expreesion   ==> "/^ => start  $/==>end"*/

// Password Regular Expression  

$passwordPattren="/^[0-9]{5,10}$/";
///  preg_match ==>Perform a regular expression match
if(!preg_match($passwordPattren,$userPassword))
{
    {
        header("location:./register.php?message=password must be more than 5 numbers and less than 10");
        exit();  // prevent header execute code after it
    } 
}

// Name Regular Expression
$namePattren="/^[a-zA-Z ]{3,}$/";
if(!preg_match($namePattren,$userName))
{
    
        header("location:./register.php?message=name must be characters more than 3 numbers and less than 20");
        exit();  // prevent header execute code after it
  
}

if(!filter_var($userEmail,FILTER_VALIDATE_EMAIL))
{
    header("location:./register.php?message= your email is incorrect check your email");
    exit(); 
}

    /** Encrypt password   ==> md5*/
    $encryptedPassword=md5($userPassword);

    /***   check Email  Exist  */
    $checkEmail="select * from users where email='$userEmail'";
    // print_r($checkEmail);
    $emailSqlQuery=$connection->prepare($checkEmail);
    // print_r($emailSqlQuery);
    $emailSqlQuery->execute();
    $result=$emailSqlQuery->fetch(PDO::FETCH_ASSOC);//data ==> exist,null=> email not exist
    // print_r($result);
    if($result)
    {
        header("location:./register.php?message=Email already exist");
        exit();  // prevent header execute code after it
    }// email not exist
    else{
        $query="insert into users(name,email,password)values('$userName','$userEmail','$encryptedPassword')";
        $sqlQuery=$connection->prepare($query);
        // print_r($sqlQuery);
       $response= $sqlQuery->execute();

       if($response)
       {
        header("location:register.php?message=register successfully");
        exit();
       }
    }
    // echo("hello");

}











?>