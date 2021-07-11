<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembayaran extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_bayar');
  }

  public function index()
  {
    $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('user/template/header');
    $this->load->view('user/template/navbar', $data);
    $this->load->view('pembayaran/pembayaran', $data);
    $this->load->view('user/template/footer');
    if (isset($_POST['bayar'])) {
      $this->m_bayar->bayar();
    }
  }

  public function bayar()
  {
    if (isset($_POST['bayar'])) {
      // transaksi
      $no_order = $this->input->post('no_order');
      $tgl = date('Y-m-d');
      $id_user = $this->input->post('id_user');
      $alamat = $this->input->post('alamat');
      $no_hp = $this->input->post('nohp');
      $pembayaran = $this->input->post('jenisbayar');
      $total = $this->input->post('total');
      $status = 'Belum Bayar';

      $data = [
        'no_order' => $no_order,
        'tgl_transaksi' => $tgl,
        'id_user' => $id_user,
        'alamat' => $alamat,
        'telp' => $no_hp,
        'pembayaran' => $pembayaran,
        'status' => $status,
        'total' => $total,
      ];
      $this->m_bayar->bayar($data);


      // detail transaksi
      $i = 1;
      foreach ($this->cart->contents() as $items) {
        $data = [
          'no_order' => $this->input->post('no_order'),
          'id_menu' => $items['id'],
          'jumlah' => $this->input->post('qty' . $i++),
        ];
        $this->m_bayar->detail($data);
      }

      $this->cart->destroy();
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesanan Anda Berhasil diterima!</div>');
      redirect('user/pesanan_saya');
    }
  }

  public function transfer()
  {
    $this->load->helper('form');
    $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('user/template/header');
    $this->load->view('user/template/navbar', $data);
    $this->load->view('pembayaran/transfer', $data);
    $this->load->view('user/template/footer');
  }
}
