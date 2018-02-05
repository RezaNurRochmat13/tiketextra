<?php
/**
 * Author Reza Nur Rochmat
 * CodeIgniter 3.1.7
 * All Right Reserved 2018
 * Class Model Login
 */

 class Login_Model extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function registerUser(){
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

        $this->db->insert('user', $data);
    }

    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
 }