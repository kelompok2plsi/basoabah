<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembayaran extends CI_Controller
{
  public function index()
  {
    $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('user/template/header');
    $this->load->view('user/template/navbar', $data);
    $this->load->view('pembayaran/pembayaran', $data);
    $this->load->view('user/template/footer');
  }
}
