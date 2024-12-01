<?php

echo '<b>TABLES: </b> <br><br>';
echo 'Table Of 2: <br><br>';
$table = 2 ;
$end = 10;

for( $n= 1; $n <= $end; $n++){
    echo $table . ' x ', $n . ' = '. $n * $table. '<br>';
}
echo '-----------------<br><br>';

echo 'Table Of 10: <br><br>';
$tablee = 10;
$ending = 10; 

for ($n = 1; $n <= $ending; $n++){
    echo $tablee . ' x '. $n . ' = '. $n * $tablee . '<br>';
};

echo '-----------------<br>';

?>