<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('Modul_home/V_home');
        $this->load->view('template/footer');
    }
}
    
    /* End of file C_Home.php */
