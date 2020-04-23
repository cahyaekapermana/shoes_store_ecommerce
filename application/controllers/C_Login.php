<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_Login extends CI_Controller {
        
        
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->load->model('M_login');

        }
        
        public function index()
        {
            $this->load->view('template/header');
            $this->load->view('Modul_login/V_login');
            $this->load->view('template/footer');
            
        }

        function aksi_login(){

            $c_username = $this->input->post('f_username');
            $c_password = $this->input->post('f_password');
            
            $where = array(

                'username' => $c_username,
                'password' => $c_password
            );
            
            // Konek langsung ke table user di db
            $cek = $this->M_login->M_aksi_login("tb_user",$where)->num_rows();
                
            if($cek > 0){
        
                $data_session = array(
                    'nama' => $c_username,
                    'status' => "login"
                    );
        
                $this->session->set_userdata($data_session);
        
                redirect('C_Home','refresh');
        
            }else{
                
                echo "Username dan password salah !";
            }
    
        }

        function logout(){

            $this->session->sess_destroy();
            redirect('C_Login');
        }
    
    }
    
    /* End of file C_Login.php */
    