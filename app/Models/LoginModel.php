<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{
    protected $table = "akun";
    protected $allowedFields = ['id_akun','nama_lengkap','email','password','tgl_gabung','profile_user','asal_kota','exp','badges','level'];
    protected $primaryKey = "id_akun";
    function _construct()
    {
        $this->db = db_connect();
    }
    public function register($data){
        return $this->db->table("akun")->insert($data);
    }
    public function getLeadAkun(){
        return $this->select('id_akun, nama_lengkap, exp, level, badges')->where("level>=20")->orderBy('level ASC, exp DESC')->findAll();
    }
    public function levelingUp($data){
        switch($data["level"]){
            case 1:
                echo "level 1 rookie ";
                if($data["exp"] >= 100){
                    $data=[
                        "id_akun" =>$data["id_akun"],
                        "exp" => $data["exp"],
                        "badges" => "rookie",
                        "level" => 2
                    ];
                    echo "sudah naik level";
                    return $this->save($data);
                }
                break;
            case 2:
                echo "level 2 beginner";
                break;
            default:
                echo "tidak masuk";
                break;
        }
    }
}