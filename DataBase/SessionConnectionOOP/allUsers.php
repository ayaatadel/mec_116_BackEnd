<?php

// select method index
require('./index.php');
$usersData = $database->index("users");
// var_dump($usersData);
// exit;
// $rowKeys = array_keys($usersData[0]); // extract associative array get keys
// var_dump($rowKeys);
// exit;
?>
<!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>users Data</title>

            <!-- boot strap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        </head>

        <body>
            <h1 class="text-center text-info">All Users Data</h1>


            <table class="table table-striped w-75 m-auto border bordered p-1">
                <thead>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                    <?php
                    // foreach($rowKeys as $row)
                    // {
                    //     echo "<th>$row</th>";
                    // }

                    if (!$usersData) {
                        echo "<p class='alert alert-danger text-center'>" . "No Users Data" . "</p>";
                        exit();
                    }
                    if (isset($_GET['message'])) {
                        echo "<p class='alert alert-success text-center'>".$_GET['message']."</p>";
                        exit();
                    }
                    if (isset($_GET['error'])) {
                        echo "<p class='alert alert-danger text-center'>".$_GET['error']."</p>";
                        exit();
                    }

                    ?>
                </thead>
                <tbody>
                    <?php
                    foreach ($usersData as $user) {
                        echo "<tr>";
                        // var_dump($user);

                        // foreach($user as $value)
                        // {
                        //     // echo $value ,"<br>";
                        //     echo "<td> $value </td>";
                        // }
                        echo "<td>" . $user['id'] . "</td>";
                        echo "<td>" . $user['name'] . "</td>";
                        echo "<td>" . $user['email'] . "</td>";
                        // echo "<td>" .$user['password']. "</td>";
                        echo "<td>
                        <a href='./show.php?id=".$user['id']."'> <button class='btn btn-warning'>Show </button></a>
                        
                       <form action='./manageUser.php' method='POST'> 
                       <input type='hidden' name='id' value=".$user['id'].">
                        <button class='btn btn-danger' type='submit' name='deleteBtn'>delete </button> 
                       </form>

                        
                        </td>";

                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <!-- <?php var_dump($usersData) ?> -->





            <!-- boot strap -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        </body>

    </html>