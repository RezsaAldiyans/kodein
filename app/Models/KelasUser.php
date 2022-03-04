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
        $where = "id_akun='$id_akun' and id_kelas='$id_kelas'";
        $old_progress = $this->select('id_akun,progress,id_kelas')->where($where)->first();
        $progresss = (int) $old_progress["progress"] + (int) $progress;
        // print_r($id_akun);
        // return $this->db->query("UPDATE `kelas_user` SET `progress`= '$progress' WHERE id_kelas='$id_kelas' and id_akun='$id_akun'");
        return $this->db->query("UPDATE kelas_user ku JOIN akun a ON (ku.id_akun = a.id_akun) SET a.exp = '100', ku.progress='1' WHERE a.id_akun='$id_akun' and ku.id_kelas='$id_kelas'");
    }
}