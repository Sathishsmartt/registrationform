<?php
require_once 'user.php';
$username = $_POST['username'];
$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$msg = $_POST['msg'];

$insert = "insert into student values('$username','$id','$email','$password','$msg')";
$run_query = mysqli_query($conn,$insert);
if($run_query)
{
    echo 'registered successfully';
}
else
{
    echo 'not success';
}

?>
