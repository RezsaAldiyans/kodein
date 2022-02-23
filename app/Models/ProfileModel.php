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
        return $this->where('id_akun',$id_akun)->findAll();
    }
}