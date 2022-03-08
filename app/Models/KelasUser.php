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
        return $this->db->query("UPDATE kelas_user SET progress= '$progresss' WHERE id_akun='$id_akun' and id_kelas='$id_kelas'");
    }
}