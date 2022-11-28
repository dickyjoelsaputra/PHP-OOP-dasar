<?php
require "Model/Orang.php";

// child dari orang
class Guru extends Orang{

    public function aktifitasGuru(){
        echo "saya mengajar TIK";
    }


    //overide method sayHello() yang ada di parent dari Guru (Orang); 
    // public function sayHello(){
    //     echo "hallo nama saya adalahh {$this->nama}, dan umur saya {$this->umur} tahun.";
    // }

}