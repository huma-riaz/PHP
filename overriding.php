<?php 

class first{
    public $name = "Parent Class";
}

class second extends first{
    public $name = "Child Class";
}

$check = new second();
echo $check->name;

?>