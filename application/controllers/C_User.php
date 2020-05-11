<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_User extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_User');
    }

    public function index()
    {
        $this->load->view('template/login/header');
        $this->load->view('Modul_auth/V_login');
        $this->load->view('template/login/footer');
    }

    public function register()
    {
        $this->load->view('template/login/header');
        $this->load->view('modul_auth/V_register');
        $this->load->view('template/login/footer');
    }

    function aksi_login()
    {

        $c_username = $this->input->post('f_username', TRUE);
        $c_password = md5($this->input->post('f_password', TRUE));

        $cek = $this->M_User->M_aksi_login($c_username, $c_password);

        if ($cek->num_rows() > 0) {
            // Cek langsung isi di table
            $data  = $cek->row_array();
            // Inisialisasi variable
            // $variable = $data['nama kolom yang mau di cocokan di table']
            $name  = $data['username'];
            $level = $data['level'];

            // memasukan Inisialisasi variable ke dalam Inisialisasi session
            $sesdata = array(
                's_username'  => $name,
                's_level'     => $level,
                'logged_in' => TRUE
            );
            // Set Userdata
            $this->session->set_userdata($sesdata);
            // access login for admin
            if ($level == "Customer") {
                redirect('c_customer');

                // access login for cust
            } elseif ($level == "Admin") {
                redirect('c_admin');
            }
        } else {
            echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
            Username atau password salah!
            </div>');

            redirect('C_User');
        }
    }


    function register_user()
    {

        $this->M_User->M_register_user();

        redirect('C_User');
    }

    function logout()
    {

        $this->session->sess_destroy();
        redirect('C_User');
    }
}

    
    /* End of file C_Login.php */
