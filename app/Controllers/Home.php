<?php namespace App\Controllers;

use App\Models\HistoryModel;

class Home extends BaseController
{
	public function index()
	{
		$session = session();
		$ses_data = [
			'id_akun'=>'test1',
			'nama_lengkap'=>'Mikhael Hosea',
			'email'=>'mikhael.hosea@gmail.com',
			'no_hp'=>'087878307558',
			'logged_in'=> TRUE
		];
		$session->set($ses_data);
		return view('index');
	}
	public function dashboard_user(){
		// $history = new HistoryModel();
		// $data = [
		// 	"data"=>$history->getHistory("test1")
		// ];
		echo view('dashboard-user');
	}
	public function selesai(){
		return "selesai";
	}

	//--------------------------------------------------------------------

}
