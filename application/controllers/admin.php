<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
  public function index()
  {
    $data['nama'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/topbar', $data);
    $this->load->view('admin/index');
    $this->load->view('admin/footer');
  }
}
