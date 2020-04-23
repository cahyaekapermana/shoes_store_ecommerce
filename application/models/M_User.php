<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_User extends CI_Model {
        
        // $table dari $cek = $this->M_login->M_aksi_login("tb_user",$where)->num_rows();
        // Tepatnya dari 'tb_user' yaitu table di database
        public function M_aksi_login($table,$where)
        {
            return $this->db->get_where($table,$where);
        }
    
    }
    
    /* End of file M_login.php */
    