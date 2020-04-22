<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_login extends CI_Model {
        
        public function M_aksi_login($c_username, $c_password)
        {
            $data = array(
                'username' => $c_username,
                'password' => $c_password
            );

            // tabel login
            $query = $this->db->get_where('tb_user',$data);
            return $query->result();

            print_r($query);

        }
    
    }
    
    /* End of file M_login.php */
    