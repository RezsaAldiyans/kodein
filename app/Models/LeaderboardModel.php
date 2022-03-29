<?php namespace App\Models;

use CodeIgniter\Model;

class LeaderboardModel extends Model{
    protected $table = 'leaderboard';
    protected $allowedFields = ['id_akun','nama_legkap','level','exp','badges'];
    protected $primaryKey = "id_akun";
    public function getAllLeaderboard(){
        return $this->select('id_akun, nama_legkap, level, exp, badges')->findAll();
    }
    public function insertLeaderboad($data){
        $old = $this->select('id_akun, nama_lengkap, level, exp, badges')->findAll();
        if(!$old){
            $this->db->table("leaderboard")->insert($data);
        }
        foreach($old as $akun){
            if($data["id_akun"] == $akun["id_akun"]){
                $datas = [
                    'nama_lengkap' => $data["nama_lengkap"],
                    'level'  => $data["level"],
                    'exp'  => $data["exp"],
                    'badges'=> $data["badges"]
                ];
                $this->db->table("leaderboard")->where('id_akun', $data["id_akun"])->update($datas);
            }
            else{
                $this->db->table("leaderboard")->insert($data);
            }
        }
    }
}