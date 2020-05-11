<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('m_customer');
	}

	public function index()
	{
		$data['produk'] = $this->m_customer->get_produk_all();
		$data['kategori'] = $this->m_customer->get_kategori_all();
		$this->load->view('template/customer/header', $data);
		$this->load->view('modul_customer/list_produk', $data);
		$this->load->view('template/customer/footer');
	}
}
