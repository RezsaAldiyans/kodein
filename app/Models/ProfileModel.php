<?php namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model{
    protected $table = 'kelas_user';
    function _construct()
    {
        $this->db = db_connect();
    }

    //from kelas_user table
    public function getKelasUser($id_akun){
        // return $this->where('id_akun',$id_akun)->findAll();
        return $this->db->table("kelas_user")->join("kelas_koding","kelas_koding.id_kelas=kelas_user.id_kelas")->where("kelas_user.id_akun",$id_akun)->get()->getResultArray();
    }
    public function kelasUser($id_akun,$id_kelas){
        $where = "id_akun='$id_akun' and id_kelas='$id_kelas'";
        return $this->where($where)->first();
    }
    public function findKelasWithidakun($id_akun){
        return $this->where("id_akun",$id_akun)->findAll();
    }
    public function insertKelasUser($data){
        return $this->db->table("kelas_user")->insert($data);
    }
}