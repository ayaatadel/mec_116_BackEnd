<?php
include './bootstrap.php';
require('./index.php');
$id = $_GET['id'] ?? null;
if (!$id) {
    include('./pageNotFound.php');
    exit();
}
$user = $database->show('users', $id);
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
    <title>>Edit User</title>

    <!-- boot strap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <h1 class="text-center text-info">Edit User</h1>
    <a href="./allUsers.php" class="btn btn-primary m-3">Back</a>
    <?php

    if (isset($_GET['message'])) {
        echo "<p class='alert alert-success text-center'>" . $_GET['message'] . "</p>";
        exit();
    }
    if (isset($_GET['error'])) {
        echo "<p class='alert alert-danger text-center'>" . $_GET['error'] . "</p>";
        exit();
    }

    ?>
    <form class="container my-3" action="./manageUser.php" method="post">
        <input type="hidden" name="id"
        <?php echo "value='" . $user['id'] . "'"; ?>
        >
        <div class="mb-3">
            <label for="exampleInputname1" class="form-label"> User Name </label>
            <input type="text" class="form-control" required name="name" id="exampleInputname1"
                <?php echo "value='" . $user['name'] . "'"; ?>>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                <?php echo "value='" . $user['email'] . "'"; ?>>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="text" class="form-control" name="password" id="exampleInputPassword1"
                <?php echo "value='" . $user['password'] . "'"; ?>>
        </div>

        <button type="submit" class="btn btn-primary" name="editUser">Submit</button>
    </form>



    <!-- boot strap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<?php include 'footer.php' ?>
</body>

</html>