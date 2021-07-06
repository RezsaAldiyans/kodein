<?php namespace App\Controllers;

use App\Models\HistoryModel;
use App\Models\LoginModel;
use App\Models\PengunjungModel;
use App\Models\ProfileModel;
use App\Models\LeaderboardModel;
date_default_timezone_set("Asia/Jakarta");

function levelUp($data){
	$model = new loginModel();
	$up = $model->levelingUp($data);
}

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}
	public function viewLogin(){
		return view('login');
	}
	public function viewRegister(){
		return view('register');
	}
	public function register(){
		$nama_lengkap = $this->request->getVar("nama");
		$email = $this->request->getVar("email");
		$password = $this->request->getVar("password");
		$no_hp = $this->request->getVar("no_hp");
		$tgl_gabung = date("Ymdhis", time());

		$valid = $this->validate([
			'nama' => 'required|min_length[1]',
			'email' => 'required|valid_email',
			'password' => 'required|min_length[8]|max_length[12]',
		]);
		if(!$valid){
			session()->setFlashdata('errorRegister', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}

		$data_insert =[
			'id_akun' => 'pelajar-'.$tgl_gabung,
			'nama_lengkap' => $nama_lengkap,
			'email' => $email,
			'password' => md5($password),
			'tgl_gabung' => $tgl_gabung,
			'profile_user' => 'assets/images/kodein-logo-k-560x560.png',
			'asal_kota' => '',
			'exp' => 0,
			'badges' => 'rookie',
			'level' => 0
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
		// pengambilan data dari post
		$email = $this->request->getVar("email");
		$password = md5($this->request->getVar("password"));
		// end pengambilan data
		// jika datanya tidak valid langsung masuk ke bagian ini
		// bagian ini diambil dari model LoginModel untuk mengambil data dari database table akun
		$model = new LoginModel();
		$data = $model->where('email',$email)->first(); //pencarian data dari model LoginModel menurut email yang sudah di input
		if($data){
			$pass = $data['password'];
			// cek passwordnya apakah sama dengan yang ada di data
			if($pass == $password){
				//get data kelas_user
				$profilModel =  new ProfileModel();
				$dataProfil = $profilModel->getKelasUser($data["id_akun"]);
				$ses_data = [
					'id_akun' => $data["id_akun"],
					'nama_lengkap' => $data["nama_lengkap"],
					'email' => $data["email"],
					'tgl_gabung' => $data["tgl_gabung"],
					'profile_user' => $data["profile_user"],
					'asal_kota' => $data["asal_kota"],
					'exp' => $data["exp"],
					'badges' => $data["badges"],
					'level' => $data["level"],
					//sessiond data kelas
					// "id_kelas" => $dataProfil["id_kelas"],
					// "status_kelas" => $dataProfil["status_kelas"],
					// "nama_kelas" => $dataProfil["nama_kelas"],
					'kelas_user' => $dataProfil,
					"total_kelas" => count($dataProfil),
					'logged_in' => TRUE
				];
				// setting session agar session dapat dipanggil di file manapun
				$session->set($ses_data);
				return redirect()->to('/dashboard');
			}
			else{
				// jika salah email atau passwordnya
				$session->setFlashdata('msgerr', 'Email / Password Salah');
                return redirect()->to('/login');
			}
		}else{
			// jika akunnya tidak ada sama sekali
			$session->setFlashdata('msgerr', 'Akun belum terdaftar silahkan daftar terlebih dahulu!');
            return redirect()->to('/login');
		}
	}
	public function dashboard_user(){
		// selalu update data ketika user mengunjungi dashboard_user
		$session = session();
		if(!$session->get("logged_in")){
			return redirect()->to('/');
		}
		$model = new LoginModel();
		$data = $model->where('email',$session->get("email"))->first();
		//get data kelas_user
		$profilModel =  new ProfileModel();
		$dataProfil = $profilModel->getKelasUser($data["id_akun"]);
		$ses_data = [
			'id_akun' => $data["id_akun"],
			'nama_lengkap' => $data["nama_lengkap"],
			'email' => $data["email"],
			'tgl_gabung' => $data["tgl_gabung"],
			'profile_user' => $data["profile_user"],
			'asal_kota' => $data["asal_kota"],
			'exp' => $data["exp"],
			'badges' => $data["badges"],
			'level' => $data["level"],
			'kelas_user' => $dataProfil,
			"total_kelas" => count($dataProfil),
			'logged_in' => TRUE
		];
		levelUp($ses_data);
		$session->set($ses_data);
		// return view('dashboard-user');
	}
	public function selesai(){
		return "selesai";
	}
	public function logout(){
		$session = session();
		$session->destroy();
		return redirect()->to('/');
	}
	public function testDB(){
		return view('testDB');
	}

	// function leaderboard
	public function leaderboard(){
		$model = new LoginModel();
		$leaderboardModel = new LeaderboardModel();
		$akun = $model->getLeadAkun();
		$data = [
			"data"=>$akun
		];
		return view('testLeadBoard',$data);
	}

	public function inCoder(){
		return view('inCoder');
	}

	//--------------------------------------------------------------------

}