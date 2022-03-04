<?php namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model{
    protected $table = 'kelas_koding';
    protected $allowedFields = ['id_kelas','nama_kelas','deskripsi_kelas','total_materi','icon_kelas','estimasi_belajar','level','pelajar_terdaftar'];
    protected $primaryKey = "id_kelas";
    function _construct()
    {
        $this->db = db_connect();
    }
    public function getAllKelas(){
        return $this->db->query("select * from kelas_koding")->getResultArray();
    }
    public function findKelas($id_kelas){
        return $this->where("id_kelas",$id_kelas)->findAll();
    }
    public function kelasMateri($id_kelas){
        return $this->db->table("kelas_materi")->where("id_kelas",$id_kelas)->get()->getResultArray();
    }
    public function kelasSoal($id_kelas,$id_soal){
        $where = "kelas_soal.id_soal='$id_soal' and kelas_materi.id_kelas='$id_kelas'";
        $kelas = $this->db->table("kelas_materi")->join("kelas_soal","kelas_materi.id_materi=kelas_soal.id_materi","left")->where($where)->get()->getResultArray();
        return $kelas;
    }
    public function cekBantuan($id_kelas,$id_soal,$tipe_soal){
        if($tipe_soal == 1 || $tipe_soal == "1"){
            $kelas = $this->db->table("kelas_materi")->select("kelas_materi.id_kelas, kelas_materi.id_soal,kelas_soal.jawaban_code")->join("kelas_soal","kelas_materi.id_soal=kelas_soal.id_soal","left")->where("kelas_soal.id_soal",$id_soal)->get()->getResultArray();
        }
        else if($tipe_soal == 2 || $tipe_soal == "2"){
            $kelas = $this->db->table("kelas_materi")->select("kelas_materi.id_kelas, kelas_materi.id_soal,kelas_soal.jawaban_pilgan")->join("kelas_soal","kelas_materi.id_soal=kelas_soal.id_soal","left")->where("kelas_soal.id_soal",$id_soal)->get()->getResultArray();
        }
        return $kelas;
    }
    public function cekKebenaran($id_kelas,$id_soal,$tipe_soal){
        $kelas = $this->db->table("kelas_materi")->select("kelas_materi.id_kelas, kelas_materi.id_soal,kelas_soal.jawaban_code,kelas_soal.jawaban_pilgan")->join("kelas_soal","kelas_materi.id_soal=kelas_soal.id_soal","left")->where("kelas_soal.id_soal",$id_soal)->get()->getResultArray();
        return $kelas;
    }
}