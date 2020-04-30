<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_Customer extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here

        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('C_User');
        }
    }


    public function index()
    {
        $this->load->view('template/customer/header');

        // Allow Access Customer Only
        if ($this->session->userdata('s_level') == "Customer") {
            $this->load->view('modul_customer/V_home');
        } else {
            echo "Access Denied";
        }

        $this->load->view('template/customer/footer');
    }
}
    
    /* End of file C_Customer.php */
