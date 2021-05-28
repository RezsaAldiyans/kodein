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
	public function viewLogin(){
		return view('login');
	}
	public function register(){
		$nama_lengkap = $this->request->getVar("nama_lengkap");
		$email = $this->request->getVar("email");
		$password = $this->request->getVar("password");
		$no_hp = $this->request->getVar("no_hp");

		$data_insert = [
			'id_akun'=>'pelajar-'.date("Ymdhis", time()),
			'nama_lengkap'=>$nama_lengkap,
			'email'=>$email,
			'password'=>md5($password),
			'no_hp'=>$no_hp,
			'level'=>'pelajar'
		];
		$loginModel = new LoginModel();
		$result = $loginModel->register($data_insert);
		if($result){
			$session = session();
			$session->setFlashdata('berhasil', 'Register berhasil. Silakan login');
			return redirect()->to('/login');
		}
	}
	public function login(){
		$session = session();
		$email = $this->request->getVar("email");
		$password = md5($this->request->getVar("password"));
		$model = new LoginModel();
		$data = $model->where('email',$email)->first();
		if($data){
			$pass = $data['password'];
			if($pass == $password){
				$ses_data = [
					'id_akun'=>$data["id_akun"],
					'nama_lengkap'=>$data["nama_lengkap"],
					'email'=>$data["email"],
					'no_hp'=>$data["no_hp"],
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
		$session = session();
		if(!$session->get("logged_in")){
			return redirect()->to('/');
		}
		echo view('dashboard-user');
	}
	public function selesai(){
		return "selesai";
	}
	public function logout(){
		$session = session();
		$session->destroy();
		return redirect()->to('/');
	}

	//--------------------------------------------------------------------

}
