<?php
class Dispenser{
  protected $volume;
  protected $hargaSegelas;
  private $volumeGelas;
  public $namaMinuman;

  function  volume($vol){
    $this->volume = $vol;
  }
}

class Minuman extends Dispenser
{
  public $uang;
  function __construct($uang, $merkMinuman, $volumeGelas, $harga)
  {
    $this->uang = $uang;
    $this->merkMinuman = $merkMinuman;
    $this->hargaSegelas = $harga;
    $this->volumeGelas = $volumeGelas;
  }

  function pembelian($uang)
  {
    $this->uang = $uang;
    return  $this->uang - $this->hargaSegelas;
  }

  function volumeSetelahdibeli()
  {
    $this->volume = $this->volume - $this->volumeGelas;
    return $this->volume;
  }

  function cetak()
  {
    echo '<h2>'. 'Data Penjualan Minimarket '.'</h2>';
    echo '<hr>';
    echo '<br>merk Minuman : ' . $this->merkMinuman;
    echo '<br>Uang Saat ini : ' . $this->uang;
    echo '<br>Kapasistas (volume) Dispenser : ' . $this->volume . 'ml';
    echo '<br>Harga Bayar Segelas Minuman : ' . $this->hargaSegelas;
    echo '<br>Volume Dispenser setelah dibeli : ' . $this->volumeSetelahDibeli() . 'ml';
    echo '<br>Sisa uang : ' . $this->pembelian($this->uang);
  }
}

$minuman = new Minuman(5000, 'coca cola', 1000, 2500);
$minuman->pembelian($minuman->uang);
$minuman->volume(3000);
$minuman->cetak();