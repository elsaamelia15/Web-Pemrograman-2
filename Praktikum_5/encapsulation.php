<?php

// Class Buah
Class Buah{
    public $nama;
    protected $warna;
    private $berat;
}

// Buat Objek
$mangga = new Buah();

// Akses Property Public
echo $mangga->nama = 'Mangga'; // Berhasil

// Akses Property Private
echo $mangga->berat = 30;

// Akses Property Protected
echo $mangga->warna = 'Hijau'; // Error
?>