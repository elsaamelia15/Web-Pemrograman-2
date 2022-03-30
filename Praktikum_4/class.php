<?php

// Cara Membuat Class
class Mahasiswa{
    // proprty (variabel)
    public $nama;
    public $alamat;
    public $jurusan;

    // method (fungsi)
    function CekNama(){
        echo 'Nama Saya Adalah : ' . $this->nama;
    }
    function __construct($datanama, $dataalamat, $datajurusan)
    {
        $this->nama = $datanama;
        $this->alamat = $dataalamat;
        $this->jurusan = $datajurusan;
    }
}

// Cara Membuat Object
$mahasiswa1 = new Mahasiswa('Elsa','Bogor','Informasi');
$mahasiswa2 = new Mahasiswa('Amelia','Bandung','Informatika');

// Cara Mengakses property
echo $mahasiswa1->nama;
echo '<br>';

// Cara Mengakses Method
$mahasiswa1->CekNama();


?>