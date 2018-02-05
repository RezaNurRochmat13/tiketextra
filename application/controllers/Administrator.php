<?php

/**
 * Author Reza Nur Rochmat
 * CodeIgniter 3.1.7
 * All Right Reserved 2018
 * Class Controller Administrator
 */

 class Administrator extends CI_Controller{

    //Constructor Administrator Class Controller
    public function __construct(){
        parent::__construct();
        $this->load->model('admin/Administrator_Model');
        $this->load->database();
    }

    //Function View All User
    public function index(){
        $jumlah_data = $this->Administrator_Model->jumlah_data();
	    $config['base_url'] = base_url().'index.php/Administrator/index/';
	    $config['total_rows'] = $jumlah_data;
	    $config['per_page'] = 2;
	    $from = $this->uri->segment(3);
	    //Konfigurasi pagination bootrap
	    $config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = true;
	    $config['last_link'] = true;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = '&laquo';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = '&raquo';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $this->pagination->initialize($config);   
	    $data['user'] = $this->Administrator_Model->data($config['per_page'],$from);
        $this->load->view('include/header');
        $this->load->view('admin/content_user', $data);
        $this->load->view('include/footer');
        
    }

    //Function Add New User
    public function addNew(){
        $this->form_validation->set_rules('nama_user','Nama User','required');
        $this->form_validation->set_rules('password_user','Password User','required');
        $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin User','required');
        $this->form_validation->set_rules('alamat','Alamat User','required');
        $this->form_validation->set_rules('nomor_telepon','Nomor Telepon User','required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('include/header');
            $this->load->view('admin/content_add');
            $this->load->view('include/footer');
        } else {
            $this->Administrator_Model->addUser();
            echo "<script>
		    window.alert('Added data successfully');
		    window.location.href='index';
		    </script>";
        }
    }

    public function edit($kode){
		$where = array('id_user' => $kode);
		$data['edit'] = $this->Administrator_Model->edit_data($where,'user')->result();
		$this->load->view('include/header');
		$this->load->view('admin/content_edit', $data);
		$this->load->view('include/footer');
	}
	public function update(){
        $id 			= $this->input->post('id_user');
        $nama_user      = $this->input->post('nama_user');
        $password_user  = $this->input->post('password_user');
        $jenis_kelamin  = $this->input->post('jenis_kelamin');
        $alamat         = $this->input->post('alamat');
        $nomor_telepon  = $this->input->post('nomor_telepon');
        $level          = 1;

		$data = array(
            'nama_user'         => $nama_user,
            'password_user'     => sha1($password_user),
            'jenis_kelamin'     => $jenis_kelamin,
            'alamat'            => $alamat,
            'nomor_telepon'     => $nomor_telepon,
            'level'             => $level
        );

		$where = array(
			'id_user' => $id
			);
		$this->Administrator_Model->update_data($where,$data,'user');
		echo "<script>
		    window.alert('Updated data successfully');
		    window.location.href='index';
		    </script>";
	}
	public function delete($id){
		$where = array('id_user' => $id);
		$this->Administrator_Model->delete($where,'user');
		$msg2 = "<div class='alert alert-danger'>Deleted data successfully </div>";
        $this->session->set_flashdata("msg2", $msg2); 
		redirect('Administrator/index');
	}
 }