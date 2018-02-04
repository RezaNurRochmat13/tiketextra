<?php
/**
 * Author Reza Nur Rochmat
 * CodeIgniter 3.1.7
 * All Right Reserved 2018
 * Class Login
 */

class Login extends CI_Controller{

    //Constructor Login Class
    public function __construct(){
        parent::__construct();
    }

    //Function Load Pages
    public function index(){
        $this->load->view('include/header_login');
        $this->load->view('content_login');
        $this->load->view('include/footer_login');
    }

    //Function Verify When Activity Login Running
    public function verify(){
        $this->load->view('include/header');
        $this->load->view('admin/content_dashboard');
        $this->load->view('include/footer');
    }

    //Function Register New User
    public function register(){
        $this->load->view('include/header_login');
        $this->load->view('content_register');
        $this->load->view('include/footer_login');
    }
}