<?php namespace App\Controllers;

use App\Models\HistoryModel;
use App\Models\LoginModel;
use App\Models\PengunjungModel;
use App\Models\ProfileModel;
use App\Models\LeaderboardModel;
<<<<<<< Updated upstream
date_default_timezone_set("Asia/Jakarta");

function levelUp($data){
	$model = new loginModel();
	$up = $model->levelingUp($data);
}
=======
use App\Models\KelasModel;
// use App\Controllers\Maintenance;
>>>>>>> Stashed changes

date_default_timezone_set("Asia/Jakarta");

function levelUp($data){
	$model = new loginModel();
	$up = $model->levelingUp($data);
}
class Home extends BaseController
{
	public function __construct(){
		//nothing
	}
	public function index(){
		$kelasModel = new KelasModel();
		$dataKelas = $kelasModel->getAllKelas();
		$set_data = [
			"kelas"=>$dataKelas
		];
		return view('index',$set_data);
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
<<<<<<< Updated upstream

		$valid = $this->validate([
			'nama' => 'required|min_length[1]',
			'email' => 'required|valid_email',
			'password' => 'required|min_length[8]|max_length[12]',
		]);
		if(!$valid){
			session()->setFlashdata('errorRegister', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}

=======

		$valid = $this->validate([
			'nama' => 'required|min_length[1]',
			'email' => 'required|valid_email',
			'password' => 'required|min_length[8]|max_length[12]',
		],
		[
			'nama'        => [
				'required' => 'Nama lengkap wajib diisi',
				'min_length' => 'Minimal 1 Karakter'
			],
			'email'        => [
				'required' => 'Email wajib diisi',
				'valid_email' => 'isi email yang valid '
			],
			"password" => [
				'required' => "Password wajib diisi",
				'min_length' => 'Password minimal 8 karakter dan tidak lebih dari 12 karakter',
				'max_length' => 'password maksimal 12 karakter'
			]
		]
		);
		if(!$valid){
			session()->setFlashdata('errorRegister', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}

>>>>>>> Stashed changes
		$data_insert =[
			'id_akun' => 'pelajar-'.$tgl_gabung,
			'nama_lengkap' => $nama_lengkap,
			'email' => $email,
			'password' => md5($password),
			'tgl_gabung' => $tgl_gabung,
<<<<<<< Updated upstream
			'profile_user' => 'assets/images/kodein-logo-k-560x560.png',
=======
			'profile_user' => 'assets/images/default.jpg',
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
		if($email == '' || $password == ''){
			$session->setFlashdata('msgerr', 'Harap isi data dengan benar!');
            return redirect()->to('/login');
		}
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
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
=======
		$data = $model->getAkun($session->get("id_akun"));
		//get data kelas_user
		$profilModel =  new ProfileModel();
		$dataProfil = $profilModel->getKelasUser($data[0]["id_akun"]);
		$ses_data = [
			'id_akun' => $data[0]["id_akun"],
			'nama_lengkap' => $data[0]["nama_lengkap"],
			'email' => $data[0]["email"],
			'tgl_gabung' => $data[0]["tgl_gabung"],
			'profile_user' => $data[0]["profile_user"],
			'asal_kota' => $data[0]["asal_kota"],
			'exp' => $data[0]["exp"],
			'badges' => $data[0]["badges"],
			'level' => $data[0]["level"],
			'kelas_user' => $dataProfil,
			"total_kelas" => count($dataProfil),
			"sosmed"=>[
				"linkedin"=>$data[0]["linkedin"],
				"instagram"=>$data[0]["instagram"],
				"twitter"=>$data[0]["twitter"]
			],
			'logged_in' => TRUE
		];
		levelUp($ses_data);
		return view('dashboard-user',$ses_data);
>>>>>>> Stashed changes
	}
	public function logout(){
		$session = session();
		$session->destroy();
		return redirect()->to('/');
	}
<<<<<<< Updated upstream
	public function testDB(){
		return view('testDB');
	}
=======
	// public function testDB(){
	// 	return view('testDB');
	// }
>>>>>>> Stashed changes

	// function leaderboard
	public function leaderboard(){
		$model = new LoginModel();
<<<<<<< Updated upstream
		$leaderboardModel = new LeaderboardModel();
=======
		// $leaderboardModel = new LeaderboardModel();
>>>>>>> Stashed changes
		$akun = $model->getLeadAkun();
		$data = [
			"data"=>$akun
		];
		return view('testLeadBoard',$data);
	}
<<<<<<< Updated upstream

	public function inCoder(){
		return view('inCoder');
	}
=======
>>>>>>> Stashed changes

	public function inCoder(){
		$file = "test.txt";
		$handle = fopen($file,'r');
		$contentFile = fread($handle,filesize($file));
		$isi = str_replace(array("\n", "\r"), '', $this->request->getPost("data"));
		if($isi){
			$string = str_replace(array("\n", "\r"), '', $contentFile);
			if(preg_match("/$string/",$isi)){
				$dataResult = array("result"=>TRUE);
				echo json_encode($dataResult);
			}else{
				$dataResult = array("result"=>FALSE);
				echo json_encode($dataResult);
			}
			// if($isi == $string){
			// 	$dataResult = array("result"=>TRUE);
			// 	echo json_encode($dataResult);
			// 	// echo "benar";
			// }else{
			// 	$dataResult = array("result"=>FALSE);
			// 	echo json_encode($dataResult);
			// }
		}
	}
	public function viewCoder(){
		return view('playground/inCoderss');
	}
	public function detailsKelas($id_kelas){
		$kelasModel = new KelasModel();
		$kelas_user = new ProfileModel();
		$kelas = $kelasModel->findKelas($id_kelas);
		$status = $kelas_user->kelasUser(session()->get("id_akun"),$id_kelas);
		$set =[
			"kelas"=>$kelas[0],
			"status"=>$status,
		];
		// print_r($status);
		return view("detailkelas",$set);
	}
	public function mulaiKelas($id_kelas){
		$session = session();
		if(!$session->get("logged_in")){
			return redirect()->to('/login');
		}
		//update kelas user
		$kelas_user = new ProfileModel();
		$data=[
			"id_kelas"=> $id_kelas,
			"id_akun"=> session()->get("id_akun"),
			"status_kelas"=>"masih berjalan",
			"progress"=> 0
		];
		$cekBoolean;
		$cek = $kelas_user->kelasUser(session()->get("id_akun"),$id_kelas);
		if($cek["id_kelas"] == $id_kelas){
			$cekBoolean = 1;
		}else{
			$cekBoolean = 0;
		}
		if($cekBoolean){
			return redirect()->to("/kelas/$id_kelas");
		}else{
			$kelas_user->insertKelasUser($data);
			return redirect()->to("/kelas/$id_kelas");
		}
	}
	//--------------------------------------------------------------------

}