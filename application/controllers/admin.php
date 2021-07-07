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
}
