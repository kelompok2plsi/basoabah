<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penjual extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_penjual');
  }

  public function index()
  {
    if ($this->session->userdata('login') == '1') {
      $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $this->load->view('penjual/header');
      $this->load->view('penjual/sidebar');
      $this->load->view('penjual/topbar', $data);
      $this->load->view('penjual/index');
      $this->load->view('penjual/footer');
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }

  public function pesanan()
  {
    if ($this->session->userdata('login') == '1') {
      $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $data['pesanan'] = $this->db->get('tbl_transaksi')->result_array();
      $this->load->view('penjual/header');
      $this->load->view('penjual/sidebar');
      $this->load->view('penjual/topbar', $data);
      $this->load->view('penjual/pesanan/pesanan', $data);
      $this->load->view('penjual/footer');
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }

  public function detail_pesanan($no_order)
  {
    if ($this->session->userdata('login') == '1') {
      $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $data['nilai'] = $this->m_user->get_noder($no_order);
      $data['menu'] = $this->m_user->menu();
      $this->load->view('penjual/header');
      $this->load->view('penjual/sidebar');
      $this->load->view('penjual/topbar', $data);
      $this->load->view('penjual/pesanan/detail_pesanan', $data);
      $this->load->view('penjual/footer');
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }

  public function edit_pesanan($id)
  {
    if ($this->session->userdata('login') == '1') {
      $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $data['nilai'] = $this->m_penjual->get_row($id);
      $this->load->view('penjual/header');
      $this->load->view('penjual/sidebar');
      $this->load->view('penjual/topbar', $data);
      $this->load->view('penjual/pesanan/edit_pesanan', $data);
      $this->load->view('penjual/footer');
      if (isset($_POST['sub'])) {
        $this->m_penjual->edit_pesanan();
      }
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }

  public function detail()
  {
    if ($this->session->userdata('login') == '1') {
      $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $data['nilai'] = $this->db->get('tbl_detail_transaksi')->result_array();
      $this->load->view('penjual/header');
      $this->load->view('penjual/sidebar');
      $this->load->view('penjual/topbar', $data);
      $this->load->view('penjual/pesanan/pesanan_detail', $data);
      $this->load->view('penjual/footer');
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }
}
