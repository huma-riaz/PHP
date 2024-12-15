<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "form_crud";

$con = mysqli_connect($server, $username, $password, $database);

if ($con) {
    echo 'FORM:';
}else {
    echo "It's Wrong";
}


?>