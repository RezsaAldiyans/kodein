<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\HistoryModel;

class restfulApi extends ResourceController{
    public function ApiHistory(){
		$session = session();
		$id_akun = $session->get('id_akun');
		if($id_akun){
			$history = new HistoryModel();
			return $this->respond($history->getHistory($id_akun), 200);
		}else{
			// $history = new HistoryModel();
			return "Data tidak ditemukan!";
		}
	}
}