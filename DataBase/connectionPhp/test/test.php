<?php 
require("../connection.php");
if(isset($_POST['loginBtn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "select * from users where email='$email' and password='$password'";

    $sqlQuery = $connection->prepare($query);

    $sqlQuery->execute();

    $existUser = $sqlQuery->fetch(PDO::FETCH_ASSOC);  // null or one record


    if($existUser){
        var_dump($existUser);
    
    }
}



/**
 * sql injection 
 * value or 1=1
 */
 

//  ================= 1 or 1=1 == true ==> ? 1 or 1=1
if(isset($_POST['submit'])){
    $id = $_POST['id']; // 1 or 1=1 "or""="  ==>   = " "
    // $email = $_POST['email']; // 1 or 1=1   
    // $password = $_POST['password']; // 1 or 1=1
    // $query = "select * from users where id =$id"; // true
    // $query = "select * from users where id =1 or 1=1"; // true
    // $query = "select * from users where id =1; drop table users"; // true
    
    $query = "select * from users where email=:em and password= :pass"; // \\
    
    // $sqlQuery = $connection->prepare($query);
    // $sqlQuery->bindParam("em", $email); // ignore any sql statement 
    // $sqlQuery->bindParam("pass", $password);
    
    // $sqlQuery->execute();
    $query = "select * from users where id =:id"; // true :id 
    // $query = "select * from users where id = ?"; // true
    // $query = "select * from users where email=? and password= ?"; // \\
    
    $sqlQuery = $connection->prepare($query);
    $sqlQuery->bindParam("id", $id); // ignore any sql statement 
    $sqlQuery->bindParam("em", $email); // ignore any sql statement 
    $sqlQuery->bindParam("pass", $password);
    
    $sqlQuery->execute([$email, $password]);
    $sqlQuery->execute([$id]);
    // $sqlQuery->execute();
    
    // $connection->query($query); // prepare and execute query
    
    // $result = $sqlQuery->fetch(PDO::FETCH_ASSOC); // return first record 
    $result = $sqlQuery->fetchAll(PDO::FETCH_ASSOC); // return all records

    var_dump($result);

}
// if (isset($_POST['submit'])) {
//     try {
//         // Assuming $connection is a valid PDO connection object
//         $id = $_POST['id'];

//         // Prepare the SQL query == :id 1 or 1=1
//         $query = "SELECT * FROM users WHERE id = :id";
//         $sqlQuery = $connection->prepare($query);

//         // Execute the query with the provided id
//         $sqlQuery->execute([$id]);

//         // Fetch all records (or use fetch() for a single record)
//         $result = $sqlQuery->fetchAll(PDO::FETCH_ASSOC);

//         // Do something with the result
//         // For example, print the result
//         print_r($result);

//     } catch (PDOException $e) {
//         // Handle any errors that occur during the execution of the query
//         echo "Error: " . $e->getMessage();
//     }
// }
?>
