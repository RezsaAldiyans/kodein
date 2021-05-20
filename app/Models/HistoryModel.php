<?php namespace App\Models;

use CodeIgniter\Model;

class historyModel extends Model{
    protected $table = 'history';
    protected $allowedFields = ['id_history','id_akun','id_kelas','tgl_selesai','nama_materi'];
    protected $primaryKey = "id_history";
    public function getHistory($idakun){
        return $this->where('id_akun',$idakun)->findAll();
    }
}