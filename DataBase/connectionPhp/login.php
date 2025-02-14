<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<?php 
if(isset($_GET['message']))
{
  echo "<p class='alert alert-info w-50 my-5  mx-5 text-center'>".$_GET["message"]."</p>";
}
?>
<body>
    <form action="./server.php" class="w-75 m-auto" method="post">

    <label class="form-control m-3 p-2" for="email">User Email</label>
    <input class="form-control m-3 p-2" type="text" name="email" id="email">
    <label class="form-control m-3 p-2" for="password">User Password</label>
    <input class="form-control m-3 p-2" type="text" name="password" id="password">

    <button type="submit" class="btn btn-primary m-5" name="BtnLogin">Login</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>