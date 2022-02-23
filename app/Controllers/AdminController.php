<?php
namespace App\Controllers;

use App\Models\LoginModel;
class AdminController extends BaseController{
    public function __construct(){
        $this->session = session();
    }
    public function index(){
        return view("admins/index");
    }
    public function login(){
        $email = $this->request->getPost("email");
        $password = md5($this->request->getPost("password"));
        if($email == '' || $password == ''){
			$this->session->setFlashdata('error', 'Harap isi data dengan benar!');
            return redirect()->to('/admin');
		}
        $loginModel = new LoginModel();
        $data = $loginModel->where("email='$email' and password='$password' and kategori_user='administrator'")->first();
        if($data){
            $ses_data =[
                "id_akun"=>$data["id_akun"],
                "nama"=>$data["nama_lengkap"],
                "email"=>$data["email"],
                "foto"=>$data["profile_user"],
                "tgl_gabung"=>$data["tgl_gabung"],
                "kategori_user"=>$data["kategori_user"],
                "logged_in"=>TRUE
            ];
            $this->session->set($ses_data);
            return redirect()->to("/admin/dashboard");
        }else{
            $this->session->setFlashData('error','Email / Password Salah!!!');
            return redirect()->to("/admin");
        }
    }
    public function dashboardAdmin(){
        if(!$this->session->get("logged_in")){
            return redirect()->to('/admin');
        }
        // if($this->session->get("kategori_user") != "administrator"){
        //     return "error";
        // }
        return view("admins/dashboard");
    }
    public function searchData(){
        $search = $this->request->getPost("search");
        $this->session->set(["search"=>$search]);
        return view('admins/dashboard');
    }
    public function updateSiswa($id){
        if(!$this->session->get("logged_in")){
            return redirect()->to('/admin');
        }
        $loginModel = new LoginModel();
        $sql = $loginModel->where("id_akun='$id' and kategori_user='end-user'")->first();
        $data = ["data"=>$sql];
        return view("admins/update_akun",$data);
    }
    public function prosesUpdatesSiswa(){
        $data = [
            "id_akun" => $this->request->getPost("id_akun"),
            "nama_lengkap" => $this->request->getPost("nama_lengkap"),
            "email" => $this->request->getPost("email"),
            "tgl_gabung" => $this->request->getPost("tgl_gabung"),
            "profile_user" => $this->request->getPost("profile_user"),
            "asal_kota" => $this->request->getPost("asal_kota"),
            "exp" => $this->request->getPost("exp"),
            "badges" => $this->request->getPost("badges"),
            "level" => $this->request->getPost("level"),
            "kategori_user" => $this->request->getPost("kategori_user")
        ];
        $loginModel = new LoginModel();
        $update = $loginModel->adminUpdateSiswa($data);
        if($update){
            return redirect()->to("/admin/dashboard");
        }else{
            return redirect()->back()->withInput();
        }
    }
    public function deleteUpdatesSiswa($id){
        $loginModel = new LoginModel();
        // $delete = $loginModel->adminDeleteSiswa($id);
        $delete = FALSE;
        if($delete){
            return redirect()->to('/admin/dashboard');
        }else {
            return redirect()->to('/error/400');
        }
    }

}