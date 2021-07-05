<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
  public function index()
  {
    $this->load->view('home/index');
  }

  public function menu()
  {
    $data['menu'] = $this->m_user->read();
    $this->load->view('home/menu', $data);
  }

  public function masuk()
  {
    $this->form_validation->set_rules('email', 'Email', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    if ($this->form_validation->run() == false) {
      $this->load->view('home/masuk');
    } else {
      $this->_masuk();
    }
  }

  private function _masuk()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();

    if ($user) {
      if (password_verify($password, $user['password'])) {
        if ($user['role_id'] == 1) {
          $this->session->set_userdata('login', '1');
          $this->session->set_userdata('email', $user['email']);
          redirect('user/menu', 'refresh');
        } else {
          $this->session->set_userdata('login', '1');
          $this->session->set_userdata('email', $user['email']);
          redirect('admin', 'refresh');
        }
      } else {
        $this->session->set_flashdata('salah_login', '1');
        redirect('auth/masuk', 'refresh');
      }
    } else {
      $this->session->set_flashdata('salah_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }

  public function daftar()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]');
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
    if ($this->form_validation->run() == false) {
      $this->load->view('home/daftar');
    } else {
      $this->m_auth->daftar();
    }
  }
}
