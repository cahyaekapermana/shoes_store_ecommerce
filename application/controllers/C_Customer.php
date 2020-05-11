<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_Customer extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here

        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('C_User');
        }

        $this->load->library('cart');
        $this->load->model('m_customer');
    }


    public function index()
    {
        $kategori = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['produk'] = $this->m_customer->get_produk_kategori($kategori);
        $data['kategori'] = $this->m_customer->get_kategori_all();
        $data['title'] = "Local Pride Footwear";

        $this->load->view('template/customer/header', $data);

        // Allow Access Customer Only (jka belum login/input username password tak akan bisa masuk halaman tujuan)
        if ($this->session->userdata('s_level') == "Customer") {
            // Load view customer (frontend)
            $this->load->view('modul_customer/list_produk', $data);
        } else {
            echo "Access Denied";
        }

        $this->load->view('template/customer/footer');
    }

    public function tampil_cart()
    {
        $data['kategori'] = $this->m_customer->get_kategori_all();
        $data['title'] = "Keranjang Belanja";


        $this->load->view('template/customer/header', $data);

        $this->load->view('modul_customer/tampil_cart', $data);

        $this->load->view('template/customer/footer');
    }

    public function check_out()
    {
        $data['kategori'] = $this->m_customer->get_kategori_all();
        $data['title'] = "Checkout";


        $this->load->view('template/customer/header', $data);

        $this->load->view('modul_customer/check_out', $data);

        $this->load->view('template/customer/footer');
    }

    public function detail_produk()
    {
        $id = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['kategori'] = $this->m_customer->get_kategori_all();
        $data['detail'] = $this->m_customer->get_produk_id($id)->row_array();
        $data['title'] = "Detail Produk";


        $this->load->view('template/customer/header', $data);

        $this->load->view('modul_customer/detail_produk', $data);

        $this->load->view('template/customer/footer');
    }


    function tambah()
    {
        $data_produk = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('nama'),
            'price' => $this->input->post('harga'),
            'gambar' => $this->input->post('gambar'),
            'qty' => $this->input->post('qty')
        );
        $this->cart->insert($data_produk);

        redirect('c_customer');
    }

    function hapus($rowid)
    {
        if ($rowid == "all") {
            $this->cart->destroy();
        } else {
            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );
            $this->cart->update($data);
        }

        redirect('c_customer/tampil_cart');
    }

    function ubah_cart()
    {
        $cart_info = $_POST['cart'];
        foreach ($cart_info as $id => $cart) {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $gambar = $cart['gambar'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];
            $data = array(
                'rowid' => $rowid,
                'price' => $price,
                'gambar' => $gambar,
                'amount' => $amount,
                'qty' => $qty
            );
            $this->cart->update($data);
        }
        redirect('c_customer/tampil_cart');
    }

    public function proses_order()
    {
        $data['title'] = "Form Pembelian";

        //-------------------------Input data pelanggan--------------------------
        $data_pelanggan = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp')
        );
        $id_pelanggan = $this->m_customer->tambah_pelanggan($data_pelanggan);
        //-------------------------Input data order------------------------------
        $data_order = array(
            'tanggal' => date('Y-m-d'),
            'pelanggan' => $id_pelanggan
        );
        $id_order = $this->m_customer->tambah_order($data_order);
        //-------------------------Input data detail order-----------------------		
        if ($cart = $this->cart->contents()) {
            foreach ($cart as $item) {
                $data_detail = array(
                    'order_id' => $id_order,
                    'produk' => $item['id'],
                    'qty' => $item['qty'],
                    'harga' => $item['price']
                );
                $proses = $this->m_customer->tambah_detail_order($data_detail);
            }
        }
        //-------------------------Hapus shopping cart--------------------------		
        $this->cart->destroy();
        $data['kategori'] = $this->m_customer->get_kategori_all();
        $this->load->view('template/customer/header', $data);
        $this->load->view('modul_customer/sukses', $data);
        $this->load->view('template/customer/footer');
    }
}
    
    /* End of file C_Customer.php */
