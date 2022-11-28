<?php 

class Makanan {
    public $nama = "Semangka";
    private $jenis = "pencuci mulut";
    protected $harga = 15000;

    public function getJenis(){
        return $this->jenis;
    }
}