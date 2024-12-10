<?php

print_r($_POST); 
echo '<br><br><br><br>';

$name = $_POST['name'];
echo 'My name is ' . $name .'<br><br>';

$id = $_POST['id'];
echo 'My student id is ' . $id .'<br><br>';

$age = $_POST['age'];
echo 'My age is ' . $age . '<br><br>';

$email = $_POST['email'];
echo 'This is my email:  ' . $email .'<br><br>';

$gender = $_POST['gender'];
echo 'Gender: ' . $gender . '<br><br>';

$city = $_POST['city'];
echo 'City Name: ' . $city . '<br><br>';

$skills = $_POST['skills'];
echo 'My interests are : <br>' . implode(',' , $_POST['skills']) . '<br><br>';

$message = $_POST['message'];
echo 'Message: ' . $message . '<br><br>';

?>