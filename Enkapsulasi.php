<?php

// Class Mahasiswa
class Mahasiswa {
    private $nama;
    protected $usia;

    public function __construct($nama, $usia) {
        $this->nama = $nama;
        $this->usia = $usia;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setUsia($usia) {
        $this->usia = $usia;
    }
}

// Membuat objek
$mahasiswa = new Mahasiswa("Fitria", 21);

// Mengakses properti melalui metode
echo "Nama mahasiswa: " . $mahasiswa->getNama(); // Output: "Nama mahasiswa: Fitria"
$mahasiswa->setUsia(21);
echo "Usia mahasiswa: " . $mahasiswa->usia; // Error karena usia adalah private

?>