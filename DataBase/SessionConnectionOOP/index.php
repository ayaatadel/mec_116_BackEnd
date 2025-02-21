<?php
//  $test=["name" => "ayaat", "email" => "ayaat@gmail.com","password"=>"12346"];
//  var_dump(array_keys($test));
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
    try {
      $query = "select * from $table where id=$id";
      $sqlQuery = $this->connection->query($query);
      return $sqlQuery->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $error) {
      return null;
    }
  }
  function delete($table, $id) // delete user
  {
    try {
      $query = "delete from $table where id=$id";
      $sqlQuery = $this->connection->prepare($query);
      $sqlQuery->execute();
      return true;
    } catch (Exception $error) {
      return null;
    }
  }

  function insert($table, array $insertedData)
  {
    // [name=>"ayaat", email=>"ayaat@gmail.com", password=>"1234" ] 
    // get keys of array , get values of array
    // var_dump($table,$insertedData);
    $keys = array_keys($insertedData); //[name,email,password]
    $values = array_values($insertedData); // //[ayaat,ayaat@gmail.com,1234]
    $keysString = implode(',', $keys);               //' ayaat','ayaat@gmail.com','1234'
    $valuesString = "'" . implode("','", $values) . "'"; // 'ayaat','ayaat@gmail.com','1234'
    // print_r($valuesString);
    // echo "<br>";
    // print_r($keysString);
    // exit;
    // print_r($values);
    $query = "insert into $table ( $keysString) values ($valuesString)";
    $sqlQuery = $this->connection->prepare($query);
    $sqlQuery->execute();
    return true;
  }

  function insert2($table, array $insertedData)
  {
    // ? :key
    // [name=>"ayaat", email=>"ayaat@gmail.com", password=>"1234" ] 
    // get keys of array , get values of array
    // var_dump($table,$insertedData);
    $keys = array_keys($insertedData); //[name,email,password]
    $values = array_values($insertedData); // //[ayaat,ayaat@gmail.com,1234]
    $keysString = implode(',', $keys);               //[name,email,password
    $valuesString = array_fill(0, count($values), "?");   //[?,?,?]   // :key
    $valuesPlaceholder = implode(',', $valuesString);
    $query = "insert into $table ( $keysString) values ($valuesPlaceholder)";
    $sqlQuery = $this->connection->prepare($query);
    $sqlQuery->execute($values);
    return true;
  }

  // function update($table, $id, array $updatedData)
  // {
  //   // $updatedDate=["name"=>"ayaat", "email"=>"ayaat@gmail.com", "password"=>"1234" ]; 
  //   $placeholder = "";
  //   // $query="update $table set key=value where id=$id";

  //   foreach ($updatedData as $key => $value) {
  //     # code...
  //     $placeholder .= "$key = ?, "; // "name='ayat',email='ayaat@gmail.com',password='123',"
  //     // $placeholder.="$key='$value',";// "name='ayat',email='ayaat@gmail.com',password='123',"
  //     //$placeholder=rtrim($placeholder,", ")
  //     $placeholder = substr($placeholder, 0, -2);
  //   }
  //   // $query="update $table set $placeholder where id=$id";
  //   $query = "update $table set $placeholder where id = ?";
  //   var_dump($query);
  //   $sqlQuery = $this->connection->prepare($query);
  //   $values = array_values($updatedData);
  //   // $sqlQuery->execute();
  //   // $sqlQuery->execute($values);
  //   $sqlQuery->execute([...$values, $id]);
  // }

  function update($table, $id, array $updatedData){
    // // $query="update $table set key=value where id=$id";
    // update users set name="ayaat", email="ayaat@gmail.com",passwprd="1234558" where id=1
    // $updatedData = ["name"=>"eman", "email"=>"eman@gmail.com"];
    //  for loop , foreach

    $placeholder ="";
    foreach($updatedData as $key => $value){
        $placeholder.="$key = ?, ";
        // $placeholder.="$key = '$value', "; // $placeholder="name='ayaat',email='ayaat@gmail.com',password=''123456', "
    }
    
    // $placeholder = "name = 'eman', email = 'eman@gmail.com', ";
    $placeholder = rtrim($placeholder, ", "); //or
    // $placeholder="name='ayaat',email='ayaat@gmail.com',password=''123456'"
    // $placeholder = substr($placeholder,0,-2);
    $query = "update $table set $placeholder where id = ?";
    // $query = "update $table set $placeholder where id = $id";

    $sqlQuery = $this->connection->prepare($query);

    $values = array_values($updatedData);

    $sqlQuery->execute([...$values, $id]);
    $sqlQuery->execute();
}
}
$database = new DB(dbType: "mysql", dbName: 'mec_project_116', host: "localhost", userName: "root", userPassword: "");
// var_dump($database);

// $result = $database->insert("users", ["name" => "ayaat", "email" => "ayaat@gmail.com","password"=>"12346"]);
// var_dump($result);
// var_dump($database->insert("users",["name"=>"ayaat","email"=>"ayaat@gmail.com"]));
