<?php
class Dosen_model extends CI_Model{
    public $nidn;
    public $pendidikan;

    public function getAll(){
        // menampilkan seluruh data yang ada di table mahasiswa query builder
        $query = $this->db->get('dosen');
        return $query->result();
    }
    public function getById(){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('dosen',['id']);
        return $query->row();
    }
?>