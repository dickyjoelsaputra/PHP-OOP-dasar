<?php

class Orang{
    public $nama, $umur;
    public function __construct($nama , $umur){
        $this->nama = $nama;
        $this->umur = $umur;
    }

    // public function sayHello(){
    //     echo "hallo nama sayaaaaaa adalahh {$this->nama}, dan umur saya {$this->umur} tahun.";
    // }

    // Guru tidak bisa overide di class Orang
    final public function sayHello(){
        echo "hallo nama sayaaaaaa adalahh {$this->nama}, dan umur saya {$this->umur} tahun.";
    }
}