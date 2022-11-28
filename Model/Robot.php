<?php

// public , private , protected

class Robot {
    // // assign properti secara default
    // public $name = "Optimus Prime";
    // public $color = "Red";
    // public $size = "Large";

    public $name;
    public $color;
    public $size;

    // KONSTRUKTOR
    function __construct($name,$color,$size){
        $this->name = $name;
        $this->color = $color;
        $this->size = $size;
    }

    function tes(){
        echo "function test";   
    }

//     function setName($name){
//         $this->name = $name;
//     }

//     function setColor($color){
//         $this->color = $color;
//     }

//     function setSize($size){
//     $this->size = $size;
// }

    // DESTRUKTOR
    function __destruct()
    {
        echo "functon desturc dijalankan";
    }

}