<?php
require "Model/Makanan.php";

class Buah extends Makanan{
    public function getHarga(){
        return $this->harga;
    }
}