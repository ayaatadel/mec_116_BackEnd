
<?php
 require('./index.php');
 $id=$_GET['id']??null;
if(!$id)
{
    include('./pageNotFound.php');
    exit();
}
 $user=$database->show('users',$id);
 if (!$user) {
    include('./pageNotFound.php');
    exit();
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>

    <!-- boot strap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

<?php  echo "<h1 class='text-center text-info '>".$user['name'] . " Profile"."</h1>" ?>
    <table class="table table-striped w-75 m-auto border bordered p-1">
        <thead>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
         
        </thead>
        <tbody>
            <?php
          
                echo "<tr>";
            
                echo "<td>" . $user['id'] . "</td>";
                echo "<td>" . $user['name'] . "</td>";
                echo "<td>" . $user['email'] . "</td>";
                echo "<td>
                  <a> <button class='btn btn-warning'>Show </button></a>
                  <a><button class='btn btn-danger'>delete </button> </a>
                  <a href='allUsers.php'> <button class='btn btn-success'>Back </button> </a>
                
                </td>";

                echo "</tr>";
     
            ?>
        </tbody>
    </table>
    <!-- <?php var_dump($usersData) ?> -->





    <!-- boot strap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>