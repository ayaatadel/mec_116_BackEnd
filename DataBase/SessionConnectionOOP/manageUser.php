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
    $userName=$_POST['name'];
    $userEmail=$_POST['email'];
    $userPassword=$_POST['password'];
    $database->insert2("users",["name"=>$userName,"email"=>$userEmail,"password"=>$userPassword]);
    header('location:allUsers.php?error= user Added Successfully ');
    // $database->insert("users",["name"=>$userName,"email"=>$userEmail,"password"=>$userPassword]);
    // header('location:allUsers.php?error= user Added Successfully ');
        exit();
}


?>