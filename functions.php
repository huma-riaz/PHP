<?php

function hello(){
    echo '<b>Functions: </b> <br><br>';
}
hello();


function student($user) {
    echo 'Welcome ' . $user . '<br>';
}
student ('Huma');
student ('Hassan');
echo '----------------<br>';


function add($val1,$val2){
    return $val1+$val2;
}

$result1 = add(10,10);
    echo $result1. '<br>';

$result2 = add(50,50);
    echo $result2. '<br>';

    




?>