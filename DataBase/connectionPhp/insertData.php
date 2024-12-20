<?php

// include('./connection.php');
require('./connection.php'); 


/***
 * select data
 * insert data
 * delete data
 */
/** insert in database in table users
 * insert into  users (name , email, password) values('ayaat','ayaat@gmail.com','123') 

 */

$query = "insert into users(name , email, password) values('karas','karas@gmail.com','123')"; //  string ==> qurey
//  var_dump($query); // string
$sqlQuery = $connection->prepare($query);
// //   var_dump($sqlQuery);  // sql
$sqlQuery->execute();

// $connection->query($query);  // prepare , execute
