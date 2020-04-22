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
            $c_password = $this->input->post('f_pass');
            // Load function model login
            $cek = $this->M_login->M_aksi_login($c_username, $c_password);

            if ($cek) {
                # code... 
                foreach($cek as $row){

                    $this->session->set_userdata('user',$row->username);
                    $this->session->set_userdata('level',$row->level);

                    if ($this->session->userdata('level')=="admin") {

                        redirect('C_Home');   

                    }elseif($this->session->userdata('level')=="customer"){

                        redirect('');
                    }
                }                                                                               
            }else{
                redirect('C_Login');
            }
        }

        function logout(){
            $this->session->sess_destroy();
            redirect('C_Login');
        }
    
    }
    
    /* End of file C_Login.php */
    