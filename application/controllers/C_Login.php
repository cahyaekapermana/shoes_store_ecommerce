<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_Login extends CI_Controller {
        
        
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->load->model('M_login');
            $this->load->library('form_validation');

        }
        
        public function index()
        {
            $this->load->view('template/header');
            $this->load->view('Modul_login/V_login');
            $this->load->view('template/footer');
        }

        public function c_aksi_login()
        {
            // jika form login disubmit
            if($this->input->post()){
                if($this->M_login->M_aksi_login()) redirect(site_url('C_Home'));
            }

            // tampilkan halaman login
            $this->load->view("Modul_home/V_home.php");

        }

        function logout(){
            $this->session->sess_destroy();
            redirect('C_Login');
        }
    
    }
    
    /* End of file C_Login.php */
    