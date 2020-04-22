<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_Login extends CI_Controller {
    
        public function index()
        {
            $this->load->view('template/header');
            $this->load->view('Modul_login/V_login');
            $this->load->view('template/footer');
        }
    
    }
    
    /* End of file C_Login.php */
    