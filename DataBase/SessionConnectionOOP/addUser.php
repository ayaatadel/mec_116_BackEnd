<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>>Add New User</title>

    <!-- boot strap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <h1 class="text-center text-info">Add New User</h1>
    <a href="./allUsers.php" class="btn btn-primary m-3">Back</a>



    <form class="container my-3" action="./manageUser.php" method="post">
        <div class="mb-3">
            <label for="exampleInputname1" class="form-label"> User Name </label>
            <input type="text" class="form-control"  name="name" id="exampleInputname1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control"  name="email" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control"  name="password" id="exampleInputPassword1">
        </div>
    
        <button type="submit" class="btn btn-primary" name="addUser">Submit</button>
    </form>



    <!-- boot strap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>