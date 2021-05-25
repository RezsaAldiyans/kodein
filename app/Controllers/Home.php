<?php namespace App\Controllers;

use App\Models\HistoryModel;
use App\Models\LoginModel;
use App\Models\PengunjungModel;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}
	public function register(){
		$nama_lengkap = $this->request->getVar("nama_lengkap");
		$email = $this->request->getVar("email");
		$password = $this->request->getVar("password");
		$no_hp = $this->request->getVar("no_hp");

		$data_insert = [
			'nama_lengkap'=>$nama_lengkap,
			'email'=>$email,
			'password'=>md5($password),
			'no_hp'=>$no_hp
		];
		$loginModel = new LoginModel();
		$loginModel->register($data_insert);
	}
	public function login(){
		$email = $this->request->getVar("email");
		$password = md5($this->request->getVar("password"));

		$loginModel = new LoginModel();
		$data = $model->where('email', $email)->first();
		if($data){
			$pass = $data['password'];
			if($pass == $password){
				$session = session();
				$ses_data = [
					'id_akun'=>'test1',
					'nama_lengkap'=>'Mikhael Hosea',
					'email'=>'mikhael.hosea@gmail.com',
					'no_hp'=>'087878307558',
					'logged_in'=> TRUE
				];
				$session->set($ses_data);
				return redirect()->to('/user');
			}
			else{
				$session->setFlashdata('msg', 'Email / Password Salah');
                return redirect()->to('/login');
			}
		}else{
			$session->setFlashdata('msg', 'Email / Password Salah');
            return redirect()->to('/');
		}
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
