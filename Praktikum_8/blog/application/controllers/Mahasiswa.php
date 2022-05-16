<?php
class Mahasiswa extends CI_Controller{
    // membuat method index
    public function index(){
        // akses model mahasiswa
        $this->load->model('mahasiswa_model');
        $mahasiswa = $this->mahasiswa_model->getAll();
        $data['mahasiswa'] = $mahasiswa;
        // render data dan kirim data kedalam view
        $this->load->view('layout/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layout/footer');
     }
     public function detail($id){
        // akses model mahasiswa
        $this->load->model('mahasiswa_model');
        $siswa = $this->mahasiswa_model->getById($id);
        $data['siswa'] = $siswa;
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');
     }
     public function index(){
        // akses model dosen
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAll();
        $data['dosen'] = $dosen;
        // render data dan kirim data kedalam view
        $this->load->view('layouts/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
     }
     public function detail($id){
        // akses model dosen
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getById($id);
        $data['dosen'] = $dosen;
        $this->load->view('layouts/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
     }
     public function index(){
        // akses model matakuliah
        $this->load->model('matakuliah_model');
        $matakuliah = $this->matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;
        // render data dan kirim data kedalam view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer');
     }
     public function detail($id){
        // akses model dosen
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getById($id);
        $data['dosen'] = $dosen;
        $this->load->view('layouts/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
}
?>