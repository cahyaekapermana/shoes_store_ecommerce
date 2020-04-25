<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_User extends CI_Controller {
        
        
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->load->model('M_User');

        }
        
        public function index()
        {
            $this->load->view('template/header');
            $this->load->view('Modul_auth/V_login');
            $this->load->view('template/footer');
        }

        public function register()
        {
            $this->load->view('template/header');
            $this->load->view('modul_auth/V_register');
            $this->load->view('template/footer');
        }

        function aksi_login(){

            $c_username = $this->input->post('f_username',TRUE);
            $c_password = md5($this->input->post('f_password',TRUE));

            $cek = $this->M_User->M_aksi_login($c_username,$c_password);
            
            if ($cek->num_rows() > 0){

                $data  = $cek->row_array();
                // Inisialisasi variable
                $name  = $data['username'];
                $email = $data['email'];
                $level = $data['level'];

                // memasukan Inisialisasi variable ke dalam Inisialisasi session
                $sesdata = array(
                    's_username'  => $name,
                    's_email'     => $email,
                    's_level'     => $level,
                    'logged_in' => TRUE
                );
                // Set Userdata
                $this->session->set_userdata($sesdata);
                // access login for admin
                if($level == "Customer"){
                    redirect('C_Customer');
        
                // access login for cust
                }elseif($level == "Admin"){
                    redirect('C_Admin');
                }

            }else{
                echo $this->session->set_flashdata('msg','Username or Password is Wrong');
                redirect('C_User');
            }
    
        }

        function register_user(){

            $this->M_User->M_register_user();
            
            redirect('C_User');
            
        }

        function logout(){

            $this->session->sess_destroy();
            redirect('C_User');
        }
    
    }
    
    /* End of file C_Login.php */
    