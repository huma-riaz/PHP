<?php

echo 'Hellooo! <br>';

$file = '2nd-file';
echo 'This is my '. $file. '<br><br>';

$value1 = 'Huma';
$value2 = 1234;
$value3 = true;
$value4;
var_dump($value1);
var_dump($value2);
var_dump($value3);

$value = true;
if ($value){
    echo '<br><br> Everything is ok! <br><br>';
}
else {
    echo '<br><br> Everything is not ok! <br><br>';
};


$num = 8;
if ($num > 6) {
    echo $num.' is greater than 6';
}
elseif (10 < 5) {
    echo '10 is less than 5';
}
else {
    echo "wrong";
};
?>


