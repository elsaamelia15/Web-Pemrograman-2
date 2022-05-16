<?php 
class Matakuliah_model extends CI_Model{
    public $nama;
    public $sks;
    public $kode;

    public function getAll(){
        // menampilkan seluruh data yang ada di table mahasiswa query builder
        $query = $this->db->get('matakliah');
        return $query->result();
    }
    public function getById(){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('matakuliah',['id']);
        return $query->row();
    }
}
?>