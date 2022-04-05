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
        // progress = id_soal
        $cek_kelas_koding = $this->db->table("kelas_koding")->select("id_kelas,total_materi")->where("id_kelas",$id_kelas)->get()->getResultArray();
        $total_materi = $cek_kelas_koding[0]["total_materi"];

        $where = "id_akun='$id_akun' and id_kelas='$id_kelas'";
        // old progress ngambil data yang lama
        $old_progress = $this->select('id_akun,progress,id_kelas')->where($where)->first();

        // $new_progress = $old_progress["progress"] .",". (string) $progress;
        // $cek_progress_user = $this->db->table("kelas_user")->select("id_kelas,progress")->where($where)->get()->getResultArray();

        // get user current progress
        $current_progress = explode(",", $old_progress["progress"]);
        if(!in_array((string) $progress, $current_progress, true)) {

            # check if the current progress is empty
            if ($current_progress[0] == "" && count($current_progress) == 1) {
                # set the new progress to the current progress
                $new_progress = (string) $progress;
            } else {
                # update the new progress with the old progress
                $new_progress = $old_progress["progress"] .",". (string) $progress;
            }

            if(count($current_progress) - 1 <= $total_materi){
                return $this->db->query("UPDATE kelas_user SET progress='$new_progress' WHERE id_akun='$id_akun' and id_kelas='$id_kelas'");
            }
        }
        else {
            return array("selesai");
        }
        
        // if($new_progress > $cek_progress_user[0]["progress"]){
        //     if($new_progress <= $total_materi){
        //         return $this->db->query("UPDATE kelas_user SET progress='$new_progress' WHERE id_akun='$id_akun' and id_kelas='$id_kelas'");
        //     }
        // // }
        // print_r($id_akun);
    }
}