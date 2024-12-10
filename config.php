<?php
// $server = "localhost";
// $username = "root";
// $password = "";
// $database = "myform";

// $conn = mysqli_conncet($server, $username, $password, $database);

// // print_r($conn)

// if ($conn){
//     echo 'Right';
// }else {
//     echo 'Wrong';
// }





$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'myform';
$con = mysqli_conncet($host,$user,$pass,$db);
if ($con)
echo 'Righttt!!!';

$sql = "insert into mytable (username, password, email) 
                values ('Huma', 1552130, 'humariaz@gmail.com')";

$query = mysqli_query($con, $sql);
if ($query){
    echo 'Successfully';
}else {
    echo 'Wrong';
}


?>