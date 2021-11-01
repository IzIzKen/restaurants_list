<?php
class Human
{
    static $class_name = "Human";

    function init(){
        $this->name = "大泉";
        $this->adress = null;
    }

    public function show(){
        print($this->name."\n");
        print($this->adress."\n");
    }
}

class Actor extends Human{}

$actor = new Actor();
$actor->name = "大泉";
$actor->adress = "北海道";

$actor->show();

?>