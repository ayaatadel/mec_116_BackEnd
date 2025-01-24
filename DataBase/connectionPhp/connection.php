<?php

echo "<h1 style='text-align:center; color:red; margin:10px'> connection with data base </h1>";

/** connection with data base
 * 
 * PDO ==> class in php  ==> object  ==> constructor ==> parametarized constructor
 * Set Craditionals  ==> parameters PDO(db,userName,password)
 */

$dbType = "mysql";
$host = "localhost";
$dbName = "mec_project_116";
$userName = "root";
$uerPsaaword = "";

// host   dbname
$connection = new PDO("$dbType:host=$host;dbname=$dbName", $userName, $uerPsaaword); // dbTpye
// var_dump($connection);
session_start();



?>