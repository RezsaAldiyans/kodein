<?php namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model{
    protected $table = 'kelas_koding';
    protected $allowedFields = ['id_kelas','nama_kelas','deskripsi_kelas','total_materi','icon_kelas','estimasi_belajar','level','pelajar_terdaftar'];
    protected $primaryKey = "id_kelas";
    function _construct()
    {
        $this->db = db_connect();
    }
    public function getAllKelas(){
        return $this->db->query("select * from kelas_koding")->getResultArray();
    }
    public function findKelas($id_kelas){
        return $this->where("id_kelas",$id_kelas)->findAll();
    }
}