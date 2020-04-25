<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_User extends CI_Model {
        
        // $table dari $cek = $this->M_login->M_aksi_login("tb_user",$where)->num_rows();
        // Tepatnya dari 'tb_user' yaitu table di database
        function M_aksi_login($c_username,$c_password)
        {
            $this->db->where('username',$c_username);
            $this->db->where('password',$c_password);

            $result = $this->db->get('tb_user');
            return $result;
        }

        function M_register_user(){

            $data = array(
                'username'      => $this->input->post('f_username'),
                'password'      => $this->input->post('f_password'),
                'nama_lengkap'  => $this->input->post('f_nama_lengkap'),
                'email'         => $this->input->post('f_email'),
            );

            $this->db->insert('tb_user', $data);

        }


    
    }
    
    /* End of file M_login.php */
    