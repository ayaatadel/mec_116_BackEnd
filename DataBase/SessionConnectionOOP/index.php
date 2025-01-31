<?php

/**
 * CRUDs Operation ==> Create Read Update Delete ==> OOP
 * Read , Delete , Show Specific User  ==> handele errors(try catch)
 * 
 * Sql Injection
 * Update store 
 * login ==> check data ==> show
 * Register  ==> store data
 */

/*
 $dbType = "mysql";
$host = "localhost";
$dbName = "mec_project_116";
$userName = "root";
$uerPsaaword = "";
$connection = new PDO("$dbType:host=$host;dbname=$dbName", $userName, $uerPsaaword); 
  */

class DB
{
    // secure  , constructor
    protected $dbType, $host, $dbName, $userName, $userPassword, $connection;
    function __construct($dbType, $host, $dbName, $userName, $userPassword)
    {
        $this->dbType = $dbType;
        $this->host = $host;
        $this->dbName = $dbName;
        $this->userName = $userName;
        $this->userPassword = $userPassword;
        $this->connection = new PDO("$this->dbType:host=$this->host;dbname=$this->dbName", $this->userName, $this->userPassword);
    }


    function index($table)  // get all data
    {
        try {
            $query = "select * from $table";
            // $sqlQuery=$this->connection->prepare($query);
            // $sqlQuery->execute();
            $sqlQuery = $this->connection->query($query);
            return $sqlQuery->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $error) {
            // echo $error;
            // exit;
            // echo $error->getMessage();
            // exit;
            return null;
        }
    }
    function show($table, $id)  
    // show data for specific user
    {
      try{
        $query="select * from $table where id=$id";
        $sqlQuery = $this->connection->query($query);
        return $sqlQuery->fetch(PDO::FETCH_ASSOC);
      }
      catch(Exception $error){
       return null;
      }
       
    }
    function delete($table,$id) // delete user
    {
        try{
            $query="delete from $table where id=$id";
            $sqlQuery=$this->connection->prepare($query);
            $sqlQuery->execute();
            return true;
      
          }
          catch(Exception $error){
           return null;
          }
    }
}
$database = new DB(dbType: "mysql", dbName: 'mec_project_116', host: "localhost", userName: "root", userPassword: "");
// var_dump($database);


// var_dump($database->index("users"));
