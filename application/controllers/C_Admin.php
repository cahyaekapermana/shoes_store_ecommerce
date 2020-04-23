<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_Admin extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        // Cek session dari login
        if($this->session->userdata('status') != "login"){
			redirect(base_url("C_login"));
		}
    }
    

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('Modul_home/V_home');
        $this->load->view('template/footer');
    }
}
    
    /* End of file C_Home.php */
