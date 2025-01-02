<?php
class employee{
    public $name;
    public $age;
    public $salary;

    function work() {
        echo 'My name is ' .$this->name. '<br>'. 'I am ' . $this->age. ' years old <br>';
    }
}
$first= new employee();
$first->name = "John";
$first->age = "24";
$first->salary = "20,000";
$first-> work();
// print_r($first);




?>