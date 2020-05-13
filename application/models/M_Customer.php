<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_Customer extends CI_Model
{
    public function get_produk_all()
    {
        $query = $this->db->get('tbl_produk');
        return $query->result_array();
    }

    public function get_produk_kategori($kategori)
    {
        if ($kategori > 0) {
            $this->db->where('kategori', $kategori);
        }
        $query = $this->db->get('tbl_produk');
        return $query->result_array();
    }

    public function get_kategori_all()
    {
        $query = $this->db->get('tbl_kategori');
        return $query->result_array();
    }

    public  function get_produk_id($id)
    {
        $this->db->select('tbl_produk.*,nama_kategori');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori', 'kategori=tbl_kategori.id', 'left');
        $this->db->where('id_produk', $id);
        return $this->db->get();
    }

    public function tambah_pelanggan($data)
    {
        $this->db->insert('tbl_pelanggan', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }

    public function tambah_order($data)
    {
        $this->db->insert('tbl_order', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }

    public function tambah_detail_order($data)
    {
        $this->db->insert('tbl_detail_order', $data);
    }

    // Get article 
    public function M_tampil_article()
    {
        # code...
        return $this->db->get('tb_article');
    }

    public function get_article_id($id)
    {
        return $this->db->get_where('tb_article', ['id' => $id])->row_array();
    }
}
    
    /* End of file M_Customer.php */
