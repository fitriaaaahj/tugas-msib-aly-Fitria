<?php

// Class Hewan
class Hewan {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function suara() {
        echo "Suara hewan...";
    }
}

// Class Kucing mewarisi dari Hewan
class Kucing extends Hewan {
    public function suara() {
        echo "Meong!";
    }
}

// Class Anjing mewarisi dari Hewan
class Anjing extends Hewan {
    public function suara() {
        echo "Guk guk!";
    }
}

// Membuat objek
$kucing = new Kucing("Kitty");
$anjing = new Anjing("Buddy");

// Memanggil metode suara
$kucing->suara(); 
$anjing->suara();






