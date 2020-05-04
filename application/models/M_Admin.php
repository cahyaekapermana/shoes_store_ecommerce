<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_Admin extends CI_Model
{
    // ===========================================================================================================================
    // ARTICLE
    // ===========================================================================================================================

    public function M_tampil_data()
    {
        return $this->db->get('tb_article');
    }

    public function M_tambah_article()
    {
        // configure library
        $config['upload_path'] = './assets/admin/img/article/'; // path
        $config['allowed_types'] = 'gif|jpg|png|jpeg'; // extensions
        $config['max_size']  = 3000; // max 3 mb

        $this->load->library('upload', $config);
        // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
        $this->upload->initialize($config);

        $tempImage = ""; // temporary
        // check requirement upload 
        if ($this->upload->do_upload('f_img')) {

            $uploadData = $this->upload->data();
            // print_r( $uploadData );

            $tempImage = $uploadData['file_name']; // 
            // echo '1';

        } else {

            // check message if error 
            print_r($this->upload->display_errors());
        }

        $data = array(

            'judul'     => $this->input->post('f_judul'),
            'deskripsi' => $this->input->post('f_deskripsi'),
            'backlink'  => $this->input->post('f_backlink'),
            'gambar'    => $tempImage
        );

        $this->db->insert('tb_article', $data);
    }

    public function M_hapus_article($id)
    {
        # code...
        $this->db->where('id', $id);
        $this->db->delete('tb_article');
    }
    // ===========================================================================================================================

}
    
    /* End of file M_Admin.php */
