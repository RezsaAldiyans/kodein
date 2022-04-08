<?php namespace App\Controllers;

use App\Models\HistoryModel;
use App\Models\LoginModel;
use App\Models\PengunjungModel;
use App\Models\ProfileModel;
use App\Models\LeaderboardModel;
use App\Models\KelasModel;
use App\Models\KelasUser;
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

		$data_insert =[
			'id_akun' => 'pelajar-'.$tgl_gabung,
			'nama_lengkap' => $nama_lengkap,
			'email' => $email,
			'password' => md5($password),
			'tgl_gabung' => $tgl_gabung,
			'profile_user' => 'assets/images/default.jpg',
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
		if($email == '' || $password == ''){
			$session->setFlashdata('msgerr', 'Harap isi data dengan benar!');
            return redirect()->to('/login');
		}
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
	}
	public function logout(){
		$session = session();
		$session->destroy();
		return redirect()->to('/');
	}
	// public function testDB(){
	// 	return view('testDB');
	// }

	// function leaderboard
	public function leaderboard(){
		$model = new LoginModel();
		// $leaderboardModel = new LeaderboardModel();
		$akun = $model->getLeadAkun();
		$data = [
			"data"=>$akun
		];
		return view('testLeadBoard',$data);
	}
	public function viewCoder(){
		return view('playground/inCoders');
	}
	public function detailsKelas($id_kelas){
		$kelasModel = new KelasModel();
		$kelas_user = new ProfileModel();
		$kelas = $kelasModel->findKelas($id_kelas);
		$status = $kelas_user->kelasUser(session()->get("id_akun"),$id_kelas);
		$set =[
			"kelas"=>$kelas['kelas'][0],
			"mulai_materi" => $kelas['mulai_materi'][0]["mulai_materi"],
			"status"=>$status,
		];
		// print_r($set);
		return view("detailkelas",$set);
	}
	public function mulaiKelas($id_kelas,$id_soal,$array_soal){
		$session = session();
		if(!$session->get("logged_in")){
			return redirect()->to('/login');
		}
		//update kelas user
		$profilemodel = new ProfileModel();
		$kelasModel = new KelasModel();
		$kelas_user = new KelasUser();
		$user = new LoginModel();
		$kelas = $kelasModel->findKelas($id_kelas);
		$data=[
			"id_kelas"=> $id_kelas,
			"id_akun"=> session()->get("id_akun"),
			"status_kelas"=>"masih berjalan",
			"progress"=> 0
		];
		$res;
		$cek = $profilemodel->kelasUser(session()->get("id_akun"),$id_kelas);
		$kelas_MS = $kelasModel->kelasSoal($id_kelas,$id_soal);
		$cek_materi_selesai = $kelas_user->cekMateriSelesai(session()->get("id_akun"),$id_kelas,$id_soal);
		// print_r($kelas_MS['next_soal']);
		$res = [
			"total_materi" => $kelas["kelas"][0]["total_materi"],
			"id_kelas" => $cek["id_kelas"],
			"id_akun" => $cek["id_akun"],
			"status_kelas" => $cek["status_kelas"],
			"progress" => $cek["progress"],
			"kelas" => $kelas_MS["kelas"][0],
			"next_soal" => $kelas_MS["next_soal"],
			"selesai" => $cek_materi_selesai
		];
		// print_r($res["selesai"]);
		$cekBoolean = $cek["id_kelas"] ? TRUE : 0;
		$cek_materi_id = $kelas_MS["kelas"][0]["id_materi"] == $id_soal ? TRUE : 0;
		$tipe_materi = $res["kelas"]["tipe_soal"];
		if($cekBoolean){
			if($cek_materi_id){
				if($tipe_materi == "1"){
					return view('playground/inCoders',$res);
				}else if($tipe_materi == "2"){
					// return view('playground/inCoders',$res);
					return "<h1>Tahap Perkembangan!</h1>";
				}
			}
			else{
				return redirect()->back();
			}
		}else{
			$profilemodel->insertKelasUser($data);
			return view('playground/inCoders',$res);
		}
		// $user = new LoginModel();
		// $c = $user->updateExp($session->get("id_akun"),100,$id_kelas,$id_soal)["status"];
		// $kelas_user = new KelasUser();
		// $d = $kelas_user->updatesProgress($session->get("id_akun"),$id_kelas,$id_soal)["status"];
		// var_dump($c,$d);
	}
	public function cekBantuanSoal($id_kelas,$id_soal,$tipe_soal){
		$kelas_model = new KelasModel();
		$cek = $kelas_model->cekBantuan($id_kelas,$id_soal,$tipe_soal);
		// print_r($this->bantuan);
		return json_encode($cek,true);
	}
	public function cekBenarSoal($id_kelas,$id_soal,$tipe_soal){
		$session = session();
		$kelas_model = new KelasModel();
		$kelas_user = new KelasUser();
		$user = new LoginModel();
		$textarea = $this->request->getPost("jawaban_user");
		$bantuan = $this->request->getPost("bantuan");
		$id_soal = $this->request->getPost("id_soal");
		$cek = $kelas_model->cekKebenaran($id_kelas,$id_soal,$tipe_soal);
		// print_r($textarea,$bantuan);
		if($session->get("id_akun")){
			$cek_akun = $user->getAkun($session->get("id_akun"));
			if(!$cek_akun){
				$ses = array("failed");
				return json_encode($ses,TRUE);
			}else{
				// menggunakan bantuan dan jawaban dari database
				if($bantuan == 1 && $cek[0]["jawaban_code"] == $textarea){
					$d = $kelas_user->updatesProgress($session->get("id_akun"),$id_kelas,$id_soal)["status"];
					$ses = array(1,'nexp',$d);
					return json_encode($ses,TRUE);
				}
				// tidak menggunakan bantuan sama sekali
				if($bantuan == 0 && $cek[0]["jawaban_code"] == $textarea){
					$c = $user->updateExp($session->get("id_akun"),100,$id_kelas,$id_soal)["status"];
					$d = $kelas_user->updatesProgress($session->get("id_akun"),$id_kelas,$id_soal)["status"];
					$ses = array(1,$c,$d);
					return json_encode($ses,TRUE);
				}
				else{
					$ses = array(0);
					return json_encode($ses,TRUE);
				}
			}
		}
	}
	public function dummy(){
		$kelas = ["html-1","js-1","css-1"];
		for($i = 4; $i < 50; $i++){
			$getKelas = $kelas[rand(0,2)];
			$data_kelas_materi = [
				"id_materi" => $i,
				"id_kelas" => $getKelas,
				"id_soal" => $i,
				"materi_title" => "Materi $getKelas $i",
				"submateri_title" => "Submateri $getKelas $i",
				"tipe_materi" => 1,
				"text_slides" => "",
				"gambar_slides" => "",
				"subject_card" => "",
				"konteks_card" => "",
				"subject_codesite" => "",
			];
			// $data_kelas_soal = [
			// 	"id_soal" => $i,
			// 	"id_materi" => $i,
			// 	"tipe_soal" => 1,
			// 	"soal_code" => "ujicoba $getkelas $i",
			// 	"jawaban_code" => "ujicoba $getkelas $i",
			// ];
			$kelas_model = new KelasModel();
			$c = $kelas_model->insertKelasMateri($data_kelas_materi);
			// $d = $kelas_model->insertKelasSoal($data_kelas_soal);
			// var_dump($c);
			if($c){
				echo "berhasil";
			}else{
				echo "gagal";
			}
		}
	}
	//--------------------------------------------------------------------

}
