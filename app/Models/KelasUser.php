<?php namespace App\Models;

use CodeIgniter\Model;

class KelasUser extends Model{
    protected $table = 'kelas_user';
    protected $allowedFields = ['ids_KU','id_kelas','id_akun','status_kelas','progress'];
    protected $primaryKey = "ids_KU";
    function _construct()
    {
        $this->db = db_connect();
    }
    public function updatesProgress($id_akun,$id_kelas,$progress){
        $cek_kelas_koding = $this->db->table("kelas_koding")->select("id_kelas,total_materi")->where("id_kelas",$id_kelas)->get()->getResultArray();
        $total_materi = $cek_kelas_koding[0]["total_materi"];

        $where = "id_akun='$id_akun' and id_kelas='$id_kelas'";
        $old_progress = $this->select('id_akun,progress,id_kelas')->where($where)->first();
        $progresss = (int) $old_progress["progress"] + (int) $progress;
        if($progresss <= $total_materi){
            return $this->db->query("UPDATE kelas_user SET progress='$progresss' WHERE id_akun='$id_akun' and id_kelas='$id_kelas'");
        }
        // print_r($id_akun);
    }
}