<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
  public function index()
  {
    if ($this->session->userdata('login') == '1') {
      $data['nama'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $this->load->view('admin/header');
      $this->load->view('admin/sidebar');
      $this->load->view('admin/topbar', $data);
      $this->load->view('admin/index');
      $this->load->view('admin/footer');
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }

  public function pesanan()
  {
    if ($this->session->userdata('login') == '1') {
      $data['nama'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $data['pesanan'] = $this->db->get('tbl_transaksi')->result_array();
      $this->load->view('admin/header');
      $this->load->view('admin/sidebar');
      $this->load->view('admin/topbar', $data);
      $this->load->view('admin/pesanan/pesanan', $data);
      $this->load->view('admin/footer');
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }

  public function detail()
  {
    if ($this->session->userdata('login') == '1') {
      $data['nama'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $data['nilai'] = $this->db->get('tbl_detail_transaksi')->result_array();
      $this->load->view('admin/header');
      $this->load->view('admin/sidebar');
      $this->load->view('admin/topbar', $data);
      $this->load->view('admin/pesanan/pesanan_detail', $data);
      $this->load->view('admin/footer');
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }
}
