<?php
/**
 * Author Reza Nur Rochmat
 * CodeIgniter 3.1.7
 * All Right Reserved 2018
 * Class Model Administrator
 */

 class Administrator_Model extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function data($number,$offset){
		$this->db->select('*');
		return $query = $this->db->get('user',$number,$offset)->result();		
	}
 
	public function jumlah_data(){
		$this->db->select('*');
		return $this->db->get('user')->num_rows();
    }
    
    public function addUser(){
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

    public function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
 }