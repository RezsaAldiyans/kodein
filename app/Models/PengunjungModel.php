<?php namespace App\Models;

use CodeIgniter\Model;

class PengunjungModel extends Model{
    protected $table = 'pengunjung';
    protected $allowedFields = ['id_pengunjung','tgl_pengunjung','os','device'];
    protected $primaryKey = "id_pegunjung";
    function __construct()
    {
        $this->db = db_connect();
    }
    public function add_visit($data){
        return $this->db->table("pengunjung")->insert($data);
    }
}