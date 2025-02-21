<?php  
require('./index.php');
if(isset($_POST['deleteBtn']))
{
    // var_dump($_POST);
    // exit;
    $id=$_POST['id'];
    $result=$database->delete('users',$id);
    if($result)
    {
        // var_dump($result);

        header("location:allUsers.php?message=user Deleted Successfully");
        exit();
    }else{
        // var_dump($result);
        header('location:allUsers.php?error=user Not Deleted ');
        exit();
    }
}

if(isset($_POST['addUser']))
{
    $userName=$_POST['name']??null;
    $userEmail=$_POST['email']??null;
    $userPassword=$_POST['password']??null;
    $database->insert2("users",["name"=>$userName,"email"=>$userEmail,"password"=>$userPassword]);
    header('location:allUsers.php?error= user Added Successfully ');
    // $database->insert("users",["name"=>$userName,"email"=>$userEmail,"password"=>$userPassword]);
    // header('location:allUsers.php?error= user Added Successfully ');
        exit();
}

if(isset($_POST['editUser']))
{
    $userName=$_POST['name']??null;
    $userEmail=$_POST['email']??null;
    $userPassword=$_POST['password']??null;
    $id=$_POST['id']??null;
    $database->update("users",$id,["name"=>$userName,"email"=>$userEmail,"password"=>$userPassword]);
    header('location:allUsers.php?message= user updated Successfully ');
    // $database->insert("users",["name"=>$userName,"email"=>$userEmail,"password"=>$userPassword]);
    // header('location:allUsers.php?error= user Added Successfully ');
        exit();
}


?>