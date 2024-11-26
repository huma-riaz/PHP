<?php

$students = ['Ali', 'Noor','Saad', 'Amna', 'Fiza'];
// is_array($students);
// echo 'Yes Miss';

if (is_array($students)){
    echo 'Yes this is array <br>';}
    else {
        echo 'No array <br>';
    };

    echo count($students).'<br>';

    unset($students[2]);
    print_r($students);
    echo '<br>'; 

    //ADD NEW NAME:
    array_push($students,"Huma");
    print_r($students);
    echo '<br>'; 

    //FOR LAST ELEMENT:
    array_pop($students);
    print_r($students);
    echo '<br>'; 


?>