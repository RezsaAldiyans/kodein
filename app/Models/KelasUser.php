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
                $this->db->query("UPDATE kelas_user SET progress='$new_progress' WHERE id_akun='$id_akun' and id_kelas='$id_kelas'");
                return array("status" => "success");
            }
        }
        else {
            return array("status" => "selesai");
        }
        // if($new_progress > $cek_progress_user[0]["progress"]){
        //     if($new_progress <= $total_materi){
        //         return $this->db->query("UPDATE kelas_user SET progress='$new_progress' WHERE id_akun='$id_akun' and id_kelas='$id_kelas'");
        //     }
        // // }
        // print_r($id_akun);
    }
    public function cekMateriSelesai($id_akun,$id_kelas,$id_soal){
        $where = "id_akun='$id_akun' and id_kelas='$id_kelas'";
        $progress = $this->select('progress')->where($where)->first();
        $current_progress = explode(",", $progress["progress"]);

        // get kelas answer
        $where = "kelas_soal.id_soal='$id_soal'";
        $cek_kelas = $this->db->table("kelas_soal")->select("tipe_soal")->where($where)->get()->getResultArray();
        $jawaban_kelas = $cek_kelas[0]["tipe_soal"] == 1 ? $this->db->table("kelas_soal")->select("jawaban_code")->where($where)->get()->getResultArray()[0]["jawaban_code"] : $this->db->table("kelas_soal")->select("jawaban_pilgan")->where($where)->get()->getResultArray()[0]["jawaban_pilgan"];
        // print_r($this->db->table("kelas_soal")->select("jawaban_code")->where($where)->get()->getResultArray()[0]["jawaban_code"]);
        if(in_array((string) $id_soal, $current_progress, true)) {
            return array("status" => "selesai","jawaban_kelas" => $jawaban_kelas);
        }
        else {
            return array("status" => "belum");
        }
    }
}