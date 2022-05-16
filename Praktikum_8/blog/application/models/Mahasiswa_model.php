<?php
class Mahasiswa_model extends CI_Model{
    // Buat Property atau variable
    public $id, $nama, $nim, $gender, $tmp_lahir, $tgl_lahir, $ipk;

    public function predikat(){
        $predikat = ($this->ipk >= 3,75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
    public function getAll(){
        // menampilkan seluruh data yang ada di table mahasiswa query builder
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }
    public function getById(){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('mahasiswa',['id']);
        return $query->row();
    }
}
?>