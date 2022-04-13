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
        $data = $this->where($where)->first();

        // split the progress because the progress still in string,
        // and we need to count the total progress of user
        $counter = count(explode(",", $data["progress"]));
        # update progress in data variable
        $data["progress"] = $counter -1;

        return $data;
    }
    public function findKelasWithidakun($id_akun){
        return $this->where("id_akun",$id_akun)->findAll();
    }
    public function insertKelasUser($data){
        return $this->db->table("kelas_user")->insert($data);
    }
}