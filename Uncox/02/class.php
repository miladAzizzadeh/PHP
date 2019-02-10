<?php

class Cat
{
    private $weight;
    private $height;
    public $color = "red";

    public function miu()
    {
        echo "miu " . $this->color;
    }
}

class car
{
    private $weight;
    private $height;
    public $color = "red";
    public static $capacity = 60;
    public static function getCapacity(){
        echo self::$capacity;
    }
    public function getColor()
    {
        echo "Color is:  " . $this->color;
    }
}
global $a;
$a = 10;