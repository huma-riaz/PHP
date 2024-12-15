<?php 
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<form action="" method = "POST">
   <br> <input type="text" name="name" placeholder="Your Name"> <br><br>
    <input type="text" name="email" placeholder="Your Email"> <br><br>
    <input type="number" name="age" placeholder="Your Age"> <br><br>
    <input type="submit" name="save_btn" value="Submit"> <br><br>
</form>


<?php
if (isset($_POST['save_btn'])) {
    $myname = $_POST['name'];
    $myemail = $_POST['email'];
    $myage = $_POST['age'];

    $query = "INSERT INTO myform (name,email,age) values ('$myname', '$myemail', $myage)";

    $res = mysqli_query($con, $query);    
}
if($res){
    echo 'Data Save';
}else {
    echo 'Try Again';
}
?>

</body>
</html>

