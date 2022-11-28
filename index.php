<?php

// require "Model/Robot.php";
require "Model/Guru.php";
// require "Model/Makanan.php";
require "Model/Buah.php";
require "Model/Buwung/Ayam.php";
require "Model/Buwung/Burung.php";
require "Model/Buwung/Capung.php";

// $robot1 = new Robot("Buble Bee" , "Yellow" , "Large");
// $robot1->setName("Bumble Bee");
// $robot1->setColor("Yellow");
// $robot1->setSize("Medium");
// $robot1->name = "Bumble Bee"; 
// $robot1->size = "Small";
// $robot1->color = "Yellow";

// unset

// constructor->fungsi yang berjalan pertama kali ketika objek di buat (_construct())
// destructor->fungsi yang berjalan ketika object sudah selesai (_destruct())

// $robot2 = new Robot();
// $robot2->setName("Megatron");
// $robot2->setColor("White");
// $robot2->setSize("Large");

// var_dump($robot1);
// var_dump($robot2);



// CLASS INHERITANCE
$guru1 = new Guru("budi",20);
// var_dump($guru1);
// echo "<br/>";
// echo $guru1->nama;

$guru1->sayHello();
echo "<br/>";
$guru1->aktifitasGuru();

echo "<br/>";
echo "=========================";
echo "<br/>";

// VISIBILITY
// bentuk default dari visibility , bisa di akses dimana saja
// private hanya bisa di akses oleh kelas tersebut
// protected hanya bisa di akses oleh kelas tersebut dan child nya / kelas turunanya
// Makanan

$makanan1 = new Makanan();
echo $makanan1->nama;
echo "<br/>";
echo $makanan1->getJenis();
echo "<br/>";
$buah1 = new Buah();
// error 
echo $buah1->jenis;
// echo $buah1->harga;
echo $buah1->getHarga();


echo "<br/>";
echo "=========================";
echo "<br/>";
// TRAITS =================================================================================

$ayam1 = new Ayam();
$burung1 = new Burung();

$ayam1->Bertelur();
echo "<br/>";
$burung1->Bertelur();

// trait
echo "<br/>";
$burung1->Terbang();

echo "<br/>";
$capung1 = new Capung();
$capung1->Terbang();
