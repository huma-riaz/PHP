<?php

echo '<h1>LOOP:</h1>';

echo '<br> <b>While:</b> <br>';
$nmbr = 1;
while ($nmbr <= 5){
    echo $nmbr . '<br>';
    $nmbr++;
};
 print '--------------------------------<br><br>';

 
echo '<br> <b> Do-While: </b> <br>';
$n = 1;
do {
    echo 'do-while = '. $n . '<br>';
$n++;
} while( $n <= 6);
 print '--------------------------------<br><br>';


echo '<br> <b> For: </b> <br>';
for($n1= 21; $n1 <= 25; $n1++){
    echo 'Number = '. $n1. '<br>';
};
print '--------------------------------<br><br>';


echo '<br> <b> Continue: </b> <br>';
for ($a = 11; $a <= 16; $a++){
     if ($a == 13){
        continue;
     }
    echo 'Continue = '. $a . '<br>';
};
print '--------------------------------<br><br>';


echo '<br> <b> Break: </b> <br>';
 for($b = 1; $b <= 10; $b++){
    if($b == 5){
        break;
    }
    echo 'Break = ' . $b . '<br>';
 };
print '--------------------------------<br><br>';

print 'XXX----XXX----XXX';

?>