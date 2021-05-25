<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{
    protected $table = 'akun';
    protected $allowedFields = ['id_akun','nama_lengkap','email','password','no_hp'];
    protected $primaryKey = "id_akun";
    function __construct()
    {
        $this->db = db_connect();
    }
    public function register($data){
        return $this->db->table("akun")->insert($data);
    }
}