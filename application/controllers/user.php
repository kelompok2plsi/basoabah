<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
  public function menu()
  {
    $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
    $data['menu'] = $this->m_user->read();
    $this->load->view('user/menu', $data);
  }
  public function logout()
  {
    if ($this->session->userdata('login') == '1') {
      session_destroy();
      redirect('auth/masuk', 'refresh');
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }
}
