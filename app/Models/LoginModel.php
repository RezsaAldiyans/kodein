<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{
    protected $table = "akun";
    protected $allowedFields = ['id_akun','nama_lengkap','email','password','tgl_gabung','profile_user','asal_kota','exp','badges','level','linkedin','instagram','twitter'];
    protected $primaryKey = "id_akun";
    function _construct()
    {
        $this->db = db_connect();
    }
    public function register($data){
        return $this->db->table("akun")->insert($data);
    }
    public function getLeadAkun(){
        $where = "level>=20 AND kategori_user='end-user'";
        return $this->select('id_akun, nama_lengkap, exp, level, badges')->where($where)->orderBy('exp DESC')->findAll();
    }
    public function levelingUp($data){
        switch($data["level"]){
            case 1:
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
                if($data["exp"] >= 200){
                    $data=[
                        "id_akun" =>$data["id_akun"],
                        "exp" => $data["exp"],
                        "badges" => "rookie",
                        "level" => 3
                    ];
                    echo "sudah naik level";
                    return $this->save($data);
                }
                break;
            case 3:
                if($data["exp"] >= 300){
                    $data=[
                        "id_akun" =>$data["id_akun"],
                        "exp" => $data["exp"],
                        "badges" => "rookie",
                        "level" => 4
                    ];
                    echo "sudah naik level";
                    return $this->save($data);
                }
                break;
            case 4:
                if($data["exp"] >= 400){
                    $data=[
                        "id_akun" =>$data["id_akun"],
                        "exp" => $data["exp"],
                        "badges" => "rookie",
                        "level" => 5
                    ];
                    echo "sudah naik level";
                    return $this->save($data);
                }
                break;
            case 5:
                if($data["exp"] >= 500){
                    $data=[
                        "id_akun" =>$data["id_akun"],
                        "exp" => $data["exp"],
                        "badges" => "rookie",
                        "level" => 6
                    ];
                    echo "sudah naik level";
                    return $this->save($data);
                }
                break;
            case 6:
                if($data["exp"] >= 600){
                    $data=[
                        "id_akun" =>$data["id_akun"],
                        "exp" => $data["exp"],
                        "badges" => "rookie",
                        "level" => 7
                    ];
                    echo "sudah naik level";
                    return $this->save($data);
                }
                break;
            case 6:
                if($data["exp"] >= 700){
                    $data=[
                        "id_akun" =>$data["id_akun"],
                        "exp" => $data["exp"],
                        "badges" => "rookie",
                        "level" => 8
                    ];
                    echo "sudah naik level";
                    return $this->save($data);
                }
                break;
            case 7:
                if($data["exp"] >= 800){
                    $data=[
                        "id_akun" =>$data["id_akun"],
                        "exp" => $data["exp"],
                        "badges" => "rookie",
                        "level" => 9
                    ];
                    echo "sudah naik level";
                    return $this->save($data);
                }
                break;
            case 8:
                if($data["exp"] >= 900){
                    $data=[
                        "id_akun" =>$data["id_akun"],
                        "exp" => $data["exp"],
                        "badges" => "rookie",
                        "level" => 9
                    ];
                    echo "sudah naik level";
                    return $this->save($data);
                }
                break;
            case 9:
                if($data["exp"] >= 900){
                    $data=[
                        "id_akun" =>$data["id_akun"],
                        "exp" => $data["exp"],
                        "badges" => "rookie",
                        "level" => 10
                    ];
                    echo "sudah naik level";
                    return $this->save($data);
                }
                break;
            case 10:
                if($data["exp"] >= 1100){
                    $data=[
                        "id_akun" =>$data["id_akun"],
                        "exp" => $data["exp"],
                        "badges" => "rookie",
                        "level" => 11
                    ];
                    echo "sudah naik level";
                    return $this->save($data);
                }
                break;
            case 11:
                if($data["exp"] >= 1200){
                    $data=[
                        "id_akun" =>$data["id_akun"],
                        "exp" => $data["exp"],
                        "badges" => "rookie",
                        "level" => 12
                    ];
                    echo "sudah naik level";
                    return $this->save($data);
                }
                break;
            default:
                // echo "tidak masuk";
                break;
        }
    }
    public function getAkun($id){
        // $this->select("id_akun, nama_lengkap, email, CONVERT(varchar(100),tgl_gabung, 100) as tgl_gabung, profile_user, asal_kota, exp ,badges, level")->where('id_akun',$id)->first();
        return $this->db->query("select id_akun, nama_lengkap, email, DATE_FORMAT(tgl_gabung,'%d/%m/%Y') tgl_gabung, profile_user, asal_kota, exp ,badges, level, linkedin, instagram, twitter from akun where id_akun='$id'")->getResultArray();
    }
    public function getTglGabung($email){
        // $this->select("id_akun, nama_lengkap, email, CONVERT(varchar(100),tgl_gabung, 100) as tgl_gabung, profile_user, asal_kota, exp ,badges, level")->where('id_akun',$id)->first();
        return $this->db->query("select tgl_gabung,token,expired_token,status_token from akun where email='$email'")->getResultArray();
    }
    public function updateStatusToken($email){
        $data=[
            "status_token"=>"true"
        ];
        return $this->db->table("akun")->where("email",$email)->update($data);
    }
    public function resetToken($email,$token,$tgl_gabung){
        $data=[
            "tgl_gabung"=>$tgl_gabung,
            "token" => $token,
        ];
        return $this->db->table("akun")->where("email",$email)->update($data);
    }
    public function updateExp($id_akun,$new_exp,$id_kelas,$id_soal){
        $where = "id_akun='$id_akun'";
        $old_exp = $this->select('exp,id_akun')->where($where)->first();
        $where = "id_kelas='$id_kelas' AND id_akun='$id_akun'";
        $cek_progress_user = $this->db->table("kelas_user")->select("progress")->where($where)->get()->getResultArray();
        $current_progress = explode(",", $cek_progress_user[0]["progress"]);
        // print_r($cek_progress_user[0]["progress"]);
        if(!in_array((string) $id_soal, $current_progress, true)){
            $exp = (int) $old_exp["exp"] + (int) $new_exp;
            $data=[
                "id_akun" => $id_akun,
                "exp" => $exp,
            ];
            $this->save($data);
            return array("status" => "success");
        }else{
            return array("status" => "selesai");
        }
    }
    // for admin
    public function adminLogin($email,$password){
        $where = "email='$email' AND password='$password'";
        return $this->select("id_akun, nama_lengkap, email, foto, tgl_gabung, kategori_user")->where($where)->first();
    }
    public function adminUpdateSiswa($data){
        return $this->db->table("akun")->where("id_akun",$data["id_akun"])->update($data);
    }
    public function adminDeleteSiswa($id){
        return $this->db->table("akun")->where("id_akun",$id)->delete();
    }
}