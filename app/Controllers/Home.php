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
		// do nothing
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
	private function uid(){
		// generate random uid for register
		$n = 3;
		$result = bin2hex(random_bytes($n));
		return $result;
	}
	private function convertSecondToHour($second){
		$hours = floor($second / 3600);
		$minutes = floor(($second / 60) % 60);
		$seconds = $second % 60;

		return "$hours:$minutes:$seconds";
	}
	private function expiredToken($token,$email){
		/**
		*cek tanggal gabung pertama kali ketika dia register gunain model untuk mengambil tgl_gabung
		*cek waktu expired pada database lalu dijumlahin dengan tgl_gabung lalu di cek apakah waktu expired sudah lebih dari yang ditentukan
		*jika expired maka harus resend code
		*jika tidak expired maka tidak perlu resend code
		*resend code bisa dikirim berulang kali dan mengganti token yang lama dengan yang baru
		**/
		// cek tanggal gabung
		$loginModel = new LoginModel();
		$tgl_gabung = $loginModel->getTglGabung($email);
		$str = str_replace(" ", ",",$tgl_gabung[0]["tgl_gabung"]);
		$split = explode(",",$str);
		$waktu_split = explode(":",$split[1]);
		$theday = explode("-",$split[0]);

		$conv = explode(":",$this->convertSecondToHour($tgl_gabung[0]["expired_token"]));
		$hour = $waktu_split[0] + $conv[0];
		$minutes = $waktu_split[1] + $conv[1];
		$seconds = $waktu_split[2] + $conv[2];
		// echo $hour.":".$minutes.":".$seconds;
		// check if token is expired
		$dates = date("Y:m:d:H:i:s");
		$time = explode(":",$dates);
		if($tgl_gabung[0]["status_token"] == 'true'){
			return 'selesai';
		}
		if($tgl_gabung[0]["token"] == sha1($token)){
			if ($theday[0] == $time[0] && $theday[1] == $time[1] && $theday[2] == $time[2] && $time[3] <= $hour && $time[4] <= $minutes) {
				$loginModel->updateStatusToken($email);
				return "berhasil";
			}else{
				return "expired";
			}
		}
		else{
			return "invalid";
		}
	}
	public function cekToken($email){
		return view('cekToken/cekToken',["email"=>$email]);
	}
	public function cekTokenPost(){
		$session = session();
		$email = $this->request->getVar('email');
		$token = $this->request->getVar('token');
		$cek = $this->expiredToken($token,$email);
		if($cek == "selesai"){
			$session->setFlashdata('selesai', 'Akun anda sudah teraktivasi silakan login!');
			// return redirect()->to(base_url('login'));
			return redirect()->to(base_url('cekToken/'.$email));
		}
		if($cek == "berhasil"){
			$session->setFlashdata('berhasil', 'Register berhasil. Silakan login!');
			// return redirect()->to(base_url('login'));
			return redirect()->to(base_url('cekToken/'.$email));
		}
		else if($cek == "expired"){
			$session->setFlashdata('expired', 'Token anda sudah expired. Silakan resend code!');
			return redirect()->to(base_url('cekToken/'.$email));
		}
		else{
			$session->setFlashdata('invalid', 'Token anda tidak valid. Silakan cek kembali email anda!');
			return redirect()->to(base_url('cekToken/'.$email));
		}
	}
	public function resetToken($email){
		$session = session();
		$loginModel = new LoginModel();
		$generateUid = $this->uid();
		$reset = $loginModel->resetToken($email,sha1($generateUid),date("YmdHis", time()));
		$this->email($email,$generateUid);
		$session->setFlashdata('berhasil', 'berhasil mereset token');
		return redirect()->to(base_url('cekToken/'.$email));
	}
	public function register(){
		$nama_lengkap = $this->request->getVar("nama");
		$email = $this->request->getVar("email");
		$password = $this->request->getVar("password");
		$no_hp = $this->request->getVar("no_hp");
		$tgl_gabung = date("YmdHis");
		$generateUid = $this->uid();

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
			'level' => 0,
			'token' => sha1($generateUid),
			'expired_token' => 60
		];
		$loginModel = new LoginModel();
		$result = $loginModel->register($data_insert);
		if($result){
			$session = session();
			$session->setFlashdata('berhasil', 'Register berhasil. Silakan cek email anda!');
			$this->email($email,$generateUid);
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
			$cek = $model->getTglGabung($email);
			if($cek[0]["status_token"] == "false"){
				$session->setFlashdata('inactivated', 'Akun anda belum terverifikasi silakan cek email anda!');
                return redirect()->to('/login');
			}
			$pass = $data['password'];
			// cek passwordnya apakah sama dengan yang ada di data
			if($pass == $password){
				//get data kelas_user
				$profilModel =  new ProfileModel();
				$dataProfil = $profilModel->getKelasUser($data["id_akun"]);
				$ses_data = [
					'id_akun' => $data["id_akun"],
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
		return view('dashboard',$ses_data);
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
	public function detailsKelas($id_kelas){
		$kelasModel = new KelasModel();
		$profilModel = new ProfileModel();
		$kelas_user = new KelasUser();
		$kelas = $kelasModel->findKelas($id_kelas);
		$status = $profilModel->kelasUser(session()->get("id_akun"),$id_kelas);
		$set =[
			"kelas"=>$kelas['kelas'][0],
			"mulai_materi" => $kelas['mulai_materi'][0]["mulai_materi"],
			"status"=> $status,
			"progress" => $kelas_user->getProgress(session()->get("id_akun"),$id_kelas)
		];
		// print_r($set);
		return view("detailkelas",$set);
	}
	public function mulaiKelas($id_kelas,$id_soal){
		$session = session();
		if(!$session->get("logged_in")){
			return redirect()->to('/login');
		}
		//update kelas user
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
		$cek = $kelas_user->kelasUser(session()->get("id_akun"),$id_kelas);
		$kelas_MS = $kelasModel->kelasSoal($id_kelas,$id_soal);
		$cek_materi_selesai = $kelas_user->cekMateriSelesai(session()->get("id_akun"),$id_kelas,$id_soal);
		$progress = $kelas_user->getProgress(session()->get("id_akun"),$id_kelas);
		// print_r($progress);
		// array
		$index = 0;
		$i = 0;
		foreach($kelas_MS["next_soal"] as $val){
			$i++;
			if($val["km_id"] == $id_soal){
				$index = $i;
			}
		}
		$res = [
			"total_materi" => $kelas["kelas"][0]["total_materi"],
			"id_kelas" => $cek["id_kelas"],
			"id_akun" => $cek["id_akun"],
			"status_kelas" => $cek["status_kelas"],
			"progress" => $progress,
			"kelas" => $kelas_MS["kelas"][0],
			"next_soal" => $kelas_MS["next_soal"][$index],
			"selesai" => $cek_materi_selesai
		];
		// print_r($res["next_soal"]);
		$cekBoolean = $cek["id_kelas"] ? TRUE : 0;
		$cek_materi_id = $kelas_MS["kelas"][0]["id_materi"] == $id_soal ? TRUE : 0;
		$tipe_materi = $res["kelas"]["tipe_soal"];
		if($cekBoolean){
			if($cek_materi_id){
				if($tipe_materi == "1"){
					return view('playground/inCoders',$res);
				}else if($tipe_materi == "2"){
					// return view('playground/inCoders',$res);
					return view('playground/pilgan',$res);
				}
			}
			else{
				return redirect()->back();
			}
		}else{
			$kelas_user->insertKelasUser($data);
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
		$cek = $kelas_model->cekKebenaran($id_kelas,$id_soal,$tipe_soal);
		// print_r($textarea,$bantuan);
		if($session->get("id_akun")){
			$cek_akun = $user->getAkun($session->get("id_akun"));
			if(!$cek_akun){
				$ses = array("failed");
				return json_encode($ses,TRUE);
			}else{
				if($tipe_soal == 1){
					$textarea = $this->request->getPost("jawaban_user");
					$bantuan = $this->request->getPost("bantuan");
					$id_soal = $this->request->getPost("id_soal");
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
				}else if($tipe_soal == 2){
					$radioValue = $this->request->getPost("jawaban_user");
					if($cek[0]["jawaban_pilgan"] == $radioValue){
						// $c = $user->updateExp($session->get("id_akun"),100,$id_kelas,$id_soal)["status"];
						// $d = $kelas_user->updatesProgress($session->get("id_akun"),$id_kelas,$id_soal)["status"];
						$ses = array(1);
						return json_encode($ses,TRUE);
					}
					else{
						$ses = array(0);
						return json_encode($ses,TRUE);
					}
				}
			}
		}
	}
	private function email($email,$token = null){
	    // initialize email setting from emailConfig function.
		$config['protocol']   = 'smtp';
        $config['SMTPHost']   = 'mail.kodein.codes';
        $config['SMTPUser']   = 'admin@kodein.codes';
        $config['SMTPPass']   = 'miraimiyuki06';
        $config['SMTPPort']   = 465;
        $config['SMTPCrypto'] = 'ssl';
        $config['mailType']   = 'html';
		$this->email->initialize($config);
		// Set sender email and name from .env file
		$this->email->setFrom($config['SMTPUser'], getenv('email_config_senderName'));
		// target email or receiver
		$this->email->setTo($email);
		// Email subject
		$this->email->setSubject('Admin Test');
		// Email message
		$this->email->setMessage(view('MailTemplate/verifikasi',["name"=>$email,"token"=>$token]));

		// make sure email is send
		if($this->email->send()){
			return True;
		}else {
			return False;
		}
	}
	public function testPilgan(){
		return "test";
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
	public function test(){
		return view('test/dashboard.php');
	}
	//--------------------------------------------------------------------

}
