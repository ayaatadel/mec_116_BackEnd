<?php
require('./connection.php');
// id
// session_start(); // start session

// var_dump($_SESSION);
// exit;
echo "<h1>User Profile </h1>";
// select id   ==> $_GET['ID]
// if (isset($_GET['id'])) {
//     // var_dump($_GET['id']);
//     // exit;
//     $userID = $_GET['id'];

//     $query = "select * from users where id='$userID'";
//     $sqlQuery = $connection->prepare($query);
//     $sqlQuery->execute();
//     $result = $sqlQuery->fetch(PDO::FETCH_ASSOC);
//     // var_dump($result);
//     if (!$result) {
//         header("location:login.php?message='You must login first'");
//         exit();
//     }
// }

// Select data ==> session
// select id
if (isset($_SESSION['loginID'])) {
    // var_dump($_SESSION['loginID']);
    // exit;
    $userID = $_SESSION['loginID'];

    $query = "select * from users where id='$userID'";
    $sqlQuery = $connection->prepare($query);
    $sqlQuery->execute();
    $result = $sqlQuery->fetch(PDO::FETCH_ASSOC);
    var_dump($_COOKIE['userEmail']);
    // 2026-02-28T09:12:33.018Z
    echo "<br> <br>";
    var_dump($result);
    // if (!$result) {
    //     header("location:login.php?message='You must login first'");
    //     exit();
    // }
}else{
    header("location:login.php?message='You must login first'");
    exit();
}
/***
 * session  => server ==> hidden 
 * time ==> browser
 * cookies ==> client , sesrver
 * localstorage  ==> client (front)
 * 
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>logout</title>
</head>

<body>
    <div class="m-5">
        <a href="logout.php">
            <button class="btn btn-danger">
                logout
            </button>
        </a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>