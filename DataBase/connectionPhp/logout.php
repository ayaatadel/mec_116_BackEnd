<?php 

require('./connection.php');
session_destroy();
// ==> end session
header('location:login.php');
exit;

?>