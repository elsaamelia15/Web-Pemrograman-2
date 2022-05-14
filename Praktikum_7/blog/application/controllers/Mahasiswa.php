<?php
class Mahasiswa extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('mahasiswa_model','mhs1');

        // membuat object model 1 dan nilainya
        $this->mhs1->id=1;
        $this->mhs1->nim='0111';
        $this->mhs1->nama='Elsa';
        $this->mhs1->gender='P';
        $this->mhs1->ipk=3,80;

        $this->load->model('mahasiswa_model','mhs2');

         // membuat object model 2 dan nilainya
         $this->mhs2->id=2;
         $this->mhs2->nim='0222';
         $this->mhs2->nama='Dudi';
         $this->mhs2->gender='L';
         $this->mhs2->ipk=3,50;
 
        // Menyimpan object yang di buat tadi kedalam array
        $list_mhs = [$this->mhs1, $this->mhs2];
        // Menyiapkan data untuk dikirim ke dalam view, dimana data yang diambil dari object yang disimpan ke dalam array
        $data['list_mhs'] = $list_mhs;
        $this->load->view('mahasiswa/index', $data);
    }
    // Method Dosen
    public function index(){
        $this->load->model('dosen_model','dsn1');

        // membuat object model 1 dan lainnya
        $this->dsn1->id=1;
        $this->dsn1->nidn='011';
        $this->dsn1->pendidikan='S1';

        $this->load->model('dosen_model','dsn2');

         // membuat object model 2 dan nilainya
         $this->dsn2->id=2;
         $this->dsn2->nidn='012';
         $this->dsn2->pendidikan='S2';
 
         $this->load->model('dosen_model','dsn3');

         // membuat object model 3 dan nilainya
         $this->dsn3->id=3;
         $this->dsn3->nidn='013';
         $this->dsn3->pendidikan='S3';
 
        // Menyimpan object yang di buat tadi kedalam array
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        // Menyiapkan data untuk dikirim ke dalam view, dimana data yang diambil dari object yang disimpan ke dalam array
        $data['list_dsn'] = $list_dsn;
        $this->load->view('dosen/index', $data);
    }
    // Method Matakuliah
    public function index(){
        $this->load->model('matakuliah_model','matkul1');

        // membuat object model 1 
        $this->matkul1->id=1;
        $this->matkul1->nama='Pemweb';
        $this->matkul1->sks='3';
        $this->matkul1->kode='PW2';

         // Menyimpan object yang di buat tadi kedalam array
         $list_matkul = [$this->matkul1];
         // Menyiapkan data untuk dikirim ke dalam view, dimana data yang diambil dari object yang disimpan ke dalam array
         $data['list_matkul'] = $list_matkul;
         $this->load->view('matakuliah/index', $data);
     }
}
?>