<?php

// Parent Class
Class Buah{
    public $nama;
    public $warna;

    // method construct
    public function __construct($nama, $color)
    {
        $this->nama = $nama;
        $this->warna = $color;
    }

    // Method intro
    public function intro(){
        echo "Ini adalah buah dengan nama : {$this->nama} dan warna {$this->warna}";
    }
}

// Child Class
class mangga extends Buah {
    // method biji
    public function biji(){
        echo 'Buah ini berbiji 1';
    }
}

// Buah Objek
$mangga_indramayu = new Mangga('Mangga Indramayu', 'Hijau');
$mangga_indramayu->intro();
?>