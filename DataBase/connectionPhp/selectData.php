<?php

// include('./connection1.php');  // warining message ==> execute code

require('./connection.php');  // error stop

// print_r($connection);

$query = "select * from users"; //  string ==> qurey
$sqlQuery=$connection->prepare($query);
$sqlQuery->execute();   //===  fetch data
// $result=$sqlQuery->fetch();  // one line ==> index ,asssociative
// $result=$sqlQuery->fetch(PDO::FETCH_ASSOC);  // one line
$result=$sqlQuery->fetchAll(PDO::FETCH_ASSOC);  // all lines
print_r($result);

