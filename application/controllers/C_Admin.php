<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Cek session dari login
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('C_User');
        }
        // Model
        $this->load->model('M_Admin');
    }

    //Dashboard Home 
    public function index()
    {
        $this->load->view('template/admin/header');

        // Allow Access Admin Only
        if ($this->session->userdata('s_level') == "Admin") {
            $this->load->view('modul_admin/modul_dashboard/V_home');
        } else {
            echo "Access Denied";
        }

        $this->load->view('template/admin/footer');
    }

    // ===========================================================================================================================
    // ARTICLE
    // ===========================================================================================================================

    public function c_article()
    {
        $this->load->view('template/admin/header');
        // View
        $data = array(

            'tampil_data' => $this->M_Admin->M_tampil_data()

        );

        $this->load->view('modul_admin/modul_article/view', $data);

        $this->load->view('template/admin/footer');
    }

    public function v_tambah_article()
    {
        $this->load->view('template/admin/header');

        $this->load->view('modul_admin/modul_article/add');

        $this->load->view('template/admin/footer');
    }

    public function v_edit_article($id)
    {
        $this->load->view('template/admin/header');
        // Get ID dari table
        $data = array(

            'tampil_article_id' => $this->M_Admin->M_edit_article_id($id)

        );
        $this->load->view('modul_admin/modul_article/edit', $data);

        $this->load->view('template/admin/footer');
    }

    public function aksi_tambah_article()
    {
        $this->M_Admin->M_tambah_article();

        redirect('C_Admin/c_article');
    }

    public function aksi_edit_article()
    {
        $this->M_Admin->M_edit_article();

        redirect('C_Admin/c_article');
    }

    public function aksi_hapus_article($id)
    {
        $this->M_Admin->M_hapus_article($id);

        redirect('C_Admin/c_article');
    }

    // ===========================================================================================================================

}
    
    /* End of file C_Home.php */
