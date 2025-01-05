<?php 

class first{
    public $name = "Parent Class";

    public function calc($a, $b){
    return $a + $b;
    }
}

class second extends first{
    public $name = "Child Class";

    public function calc($a, $b){
    return $a - $b;
    }
}

$check = new second();
echo $check->name;
echo '<br>';

$res = new second();
echo $res->calc(15, 10);

?>