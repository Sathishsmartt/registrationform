<?php
$conn = mysqli_connect('localhost','root','','registerdb');
if($conn)
{
    echo "connected";
}
else{
    echo "NOt connected";
}
?> 
