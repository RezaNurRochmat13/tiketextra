<?php
/**
 * Author Reza Nur Rochmat
 * CodeIgniter 3.1.7
 * All Right Reserved 2018
 * Class Controller Login
 */

class Login extends CI_Controller{

    //Constructor Login Class Controller
    public function __construct(){
        parent::__construct();
        $this->load->model('Login_Model');
        $this->load->database();
    }

    //Function Load Pages
    public function index(){
        $this->load->view('include/header_login');
        $this->load->view('content_login');
        $this->load->view('include/footer_login');
    }

    //Function Verify When Activity Login Running
   public function verifyLogin(){
		$nama_user 		= $this->input->post('nama_user');
		$password_user 	= $this->input->post('password_user');
		$level		    = $this->input->post('level');
		$where = array(
			'nama_user' => $nama_user,
			'password_user' => sha1($password_user)
			);
		$cek = $this->Login_Model->cek_login("user",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama_user' 	=> $nama_user,
				'level_user'	=> $level_user
				);
 
			$this->session->set_userdata($data_session);
 
			if ($level_user == 0) {
				redirect('Administrator');
            }
 
		}else{
			echo "<script>
		    window.alert('Login gagal. Kombinasi nama user dan password salah');
		    window.location.href='index';
		    </script>";
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		echo "<script>
		    window.alert('Logout berhasil');
		    window.location.href='index';
		    </script>";
	}

    //Function Register New User
    public function register(){
        $this->form_validation->set_rules('nama_user','Nama User','required');
        $this->form_validation->set_rules('password_user','Password User','required');
        $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin User','required');
        $this->form_validation->set_rules('alamat','Alamat User','required');
        $this->form_validation->set_rules('nomor_telepon','Nomor Telepon User','required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('include/header_login');
            $this->load->view('content_register');
            $this->load->view('include/footer_login');
        } else {
            $this->Login_Model->registerUser();
            echo "<script>
		    window.alert('User registered successfully');
		    window.location.href='index';
		    </script>";
        }
        
    }
}