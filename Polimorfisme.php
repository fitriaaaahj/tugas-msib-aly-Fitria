<?php

// Interface Hewan
interface Hewan {
    public function suara();
}

// Class Burung mengimplementasikan Hewan
class Burung implements Hewan {
    public function suara() {
        echo "Burung berkicau...";
    }
}

// Class Kambing mengimplementasikan Hewan
class Kambing implements Hewan {
    public function suara() {
        echo "Kambing mengembik...";
    }
}

// Membuat objek
$burung = new Burung();
$kambing = new Kambing();

// Memanggil metode suara
$burung->suara(); 
$kambing->suara();

?>