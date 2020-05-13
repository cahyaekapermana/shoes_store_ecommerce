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

    public function M_edit_article_id($id)
    {
        return $this->db->get_where('tb_article', ['id' => $id])->row_array();
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

    public function M_edit_article()
    {
        // Dari view
        $id = $this->input->post('id_article');

        // configure library
        $config['upload_path'] = './assets/admin/img/article/'; // path
        $config['allowed_types'] = 'gif|jpg|png|jpeg'; // extensions
        $config['max_size']  = 3000; // max 3 mb

        $this->load->library('upload', $config); // set all configure to library upload
        // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
        $this->upload->initialize($config);
        // Temp Edit nampung gambar
        $tempImageEdit = "";

        // Get data old -> id
        $getOldData = $this->M_edit_article_id($id);

        // Cek 
        if ($_FILES['f_img']['name']) {
            # code...
            if ($this->upload->do_upload('f_img')) {
                # code...
                $tempImageEdit = $this->upload->data('file_name');

                if ($getOldData['gambar']) {
                    // Dir Penyimpanan Gambar
                    $dir = 'assets/admin/img/article/' . $getOldData['gambar'];

                    // Hapus Gambar Lama
                    unlink($dir);
                }
            }
        } else {

            if ($getOldData['gambar']) {
                # code...
                $tempImageEdit = $getOldData['gambar'];
            }
        }

        $data = array(

            'judul'     => $this->input->post('f_judul'),
            'deskripsi' => $this->input->post('f_deskripsi'),
            'backlink'  => $this->input->post('f_backlink'),
            'gambar'    => $tempImageEdit
        );

        // Form id di menu edits
        $this->db->where('id', $id);
        $this->db->update('tb_article', $data);
    }

    public function M_hapus_article($id)
    {
        # code...
        $this->db->where('id', $id);
        $this->db->delete('tb_article');
    }
    // ===========================================================================================================================


    // ===========================================================================================================================
    // PRODUK
    // ===========================================================================================================================

    public function m_tampil_produk()
    {
        return $this->db->get('tbl_produk');
    }

    public function m_get_kategori()
    {
        return $this->db->get('tbl_kategori');
    }

    public function m_edit_produk_id($id)
    {
        return $this->db->get_where('tbl_produk', ['id_produk' => $id])->row_array();
    }

    public function m_tambah_produk()
    {
        // configure library
        $config['upload_path'] = './assets/customer_template/images/'; // path
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

            'nama_produk'       => $this->input->post('f_nama'),
            'deskripsi'         => $this->input->post('f_deskripsi'),
            'harga'             => $this->input->post('f_harga'),
            'kategori'          => $this->input->post('f_kategori'),
            'gambar'            => $tempImage
        );

        $this->db->insert('tbl_produk', $data);
    }

    public function m_edit_produk()
    {
        // Dari view
        $id = $this->input->post('f_id_produk');

        // configure library
        $config['upload_path'] = './assets/customer_template/images/'; // path
        $config['allowed_types'] = 'gif|jpg|png|jpeg'; // extensions
        $config['max_size']  = 3000; // max 3 mb

        $this->load->library('upload', $config); // set all configure to library upload
        // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
        $this->upload->initialize($config);
        // Temp Edit nampung gambar
        $tempImageEdit = "";

        // Get data old -> id
        $getOldData = $this->m_edit_produk_id($id);

        // Cek 
        if ($_FILES['f_img']['name']) {
            # code...
            if ($this->upload->do_upload('f_img')) {
                # code...
                $tempImageEdit = $this->upload->data('file_name');

                if ($getOldData['gambar']) {
                    // Dir Penyimpanan Gambar
                    $dir = 'assets/customer_template/images/' . $getOldData['gambar'];

                    // Hapus Gambar Lama
                    unlink($dir);
                }
            }
        } else {

            if ($getOldData['gambar']) {
                # code...
                $tempImageEdit = $getOldData['gambar'];
            }
        }

        $data = array(

            'nama_produk'       => $this->input->post('f_nama'),
            'deskripsi'         => $this->input->post('f_deskripsi'),
            'harga'             => $this->input->post('f_harga'),
            'kategori'          => $this->input->post('f_kategori'),
            'gambar'            => $tempImageEdit
        );

        // Form id di menu edits
        $this->db->where('id_produk', $id);
        $this->db->update('tbl_produk', $data);
    }

    public function m_hapus_produk($id)
    {
        # code...
        $this->db->where('id_produk', $id);
        $this->db->delete('tbl_produk');
    }
}
    
    /* End of file M_Admin.php */
