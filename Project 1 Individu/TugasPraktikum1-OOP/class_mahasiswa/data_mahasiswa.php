<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data Mahasiswa Di STT Nurul Fikri</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c875de6e86.js" crossorigin="anonymous"></script>
  </head>
<body>
<div>
  <h1>Data Mahasiswa Di STT Nurul Fikri</h1>
</div>
<hr>
<br>
<br>
<br>
<?php
  include_once "class_mahasiswa.php";

  echo'<h4>Data Nilai</h4>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">NO.</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Prodi</th>
      <th scope="col">Thn Angkatan</th>
      <th scope="col">IPK</th>
      <th scope="col">Predikat</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>';

  $data_siswa1 = new Mahasiswa (02011, "Ahmad Ridwan", "SI", "2019", 2.8);
  $data_siswa2 = new Mahasiswa (02012, "Nabila Khairunnisa", "TI", "2020", 3.6);
  $data_siswa3 = new Mahasiswa (01011, "Satria Nur Firdaus", "SI", "2021", 3.68);
  $data_siswa4 = new Mahasiswa (01012, "David Firmasnyah", "TI", "2017", 2.68,);
  $aray = [$data_siswa1, $data_siswa2, $data_siswa3, $data_siswa4];
  $nomor = 1;

  foreach($aray as $data_siswa1){
  echo '<tr><th>'. $nomor.'</th>';
  echo '<td>'.$data_siswa1->getNim().'</td>';
  echo '<td>'.$data_siswa1->getNama().'</td>';
  echo '<td>'.$data_siswa1->getProdi().'</td>';
  echo '<td>'.$data_siswa1->getThn_angkatan().'</td>';
  echo '<td>'.$data_siswa1->getIpk().'</td>';
  echo '<td>'.$data_siswa1->predikat().'</td>';
  echo '<td><i class="fas fa-eye" style="color: blue;"></i><i class="fas fa-pen" style="color: blue;"></i></td></tr>';
  $nomor++;
  }

  echo '</tbody>
  </table>';
?>
<br>
<br>
<br>
<hr>
  <div class="row">
        <div class="col-12 pt-3">
            <p>Develop by Mahasiswa STT NF</p>
        </div>
  </div>

</body>
</html>


  