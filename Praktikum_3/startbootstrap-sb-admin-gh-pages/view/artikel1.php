<?php
include '../layout/header.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container">
        <div><h1>Form Nilai Siswa</h1></div>
<form method="GET" action="artikel1.php">
  <div class="form-group row">
    <label class="col-4 col-form-label" for="nama">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar Dasar Pemrograman</option>
        <option value="BD1">Basis Data 1</option>
        <option value="WEB1">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="Simpan" name="proses">
    </div>
  </div>
</form>

<!-- Kode PHP -->
<?php
 $proses = $_GET['proses'];
 $nama_siswa = $_GET['nama'];
 $mata_kuliah = $_GET['matkul'];
 $nilai_uts = $_GET['nilai_uts'];
 $nilai_uas = $_GET['nilai_uas'];
 $nilai_tugas = $_GET['nilai_tugas'];

    echo 'proses : '. $proses;
    echo '<br/>Nama Lengkap : '. $nama_siswa;
    echo '<br/Mata Kuliah : '. $mata_kuliah;
    echo '<br/>Nilai UTS : '. $nilai_uts;
    echo '<br/>Nilai UAS : '. $nilai_uas;
    echo '<br/>Nilai Tugas : '. $nilai_tugas;
?>

<?php
include '../layout/footer.php';
?>