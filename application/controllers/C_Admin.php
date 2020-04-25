<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_Admin extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        // Cek session dari login
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('C_User');
        }
    }
    

    public function index()
    {
        $this->load->view('template/header');
        // Allow Access Admin Only
        if($this->session->userdata('s_level')=="Admin"){
            $this->load->view('modul_admin/V_home');
        }else{
            echo "Access Denied";
        }
        $this->load->view('template/footer');
    }
}
    
    /* End of file C_Home.php */
