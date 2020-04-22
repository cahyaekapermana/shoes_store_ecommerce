<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_login extends CI_Model {

    private $table = "tb_user";

        
    function M_aksi_login(){
            
            $post = $this->input->post();

            // Get username dari user
            $this->db->where('username', $post["f_username"]);

            // Table ditampung di variable user
            $user = $this->db->get($this->table)->row();

            // Jika user terdaftar
            if($user){
                // periksa password-nya
                $isPasswordTrue = password_verify($post["f_password"], $user->password);
                // cek role-nya, admin atau customer.
                // role bisa dilihat di kolom role di table tb_user
                $isAdmin = $user->role == "admin";

                // jika password benar dan dia admin
                if($isPasswordTrue && $isAdmin){ 
                    // login sukses yay!
                    $this->session->set_userdata(['user_logged' => $user]);
                    $this->_updateLastLogin($user->id);
                    
                    return true;
                }

                // login gagal
                return false;
            }
        }

        // jika tak login
        public function isNotLogin(){
            return $this->session->userdata('user_logged') === null;
        }

        private function _updateLastLogin($user_id){
            $sql = "UPDATE {$this->table} SET last_login=now() WHERE id={$user_id}";
            $this->db->query($sql);
        }
    
    }
    
    /* End of file M_login.php */
    