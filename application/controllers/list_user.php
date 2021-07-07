<?php
defined('BASEPATH') or exit('No direct script access allowed');

class list_user extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_listuser');
  }

  public function index()
  {
    if ($this->session->userdata('login') == '1') {
      $data['nama'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $data['user'] = $this->m_listuser->user();
      $this->load->view('admin/header');
      $this->load->view('admin/sidebar');
      $this->load->view('admin/topbar', $data);
      $this->load->view('admin/user/user', $data);
      $this->load->view('admin/footer');
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }

  public function tambah()
  {
    if ($this->session->userdata('login') == '1') {
      $data['nama'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $this->load->view('admin/header');
      $this->load->view('admin/sidebar');
      $this->load->view('admin/topbar', $data);
      $this->load->view('admin/user/tambah');
      $this->load->view('admin/footer');
      if (isset($_POST['tambah'])) {
        $this->m_listuser->tambah();
      }
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }

  public function edit($id)
  {
    if ($this->session->userdata('login') == '1') {
      $data['nama'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $data['nilai'] = $this->m_listuser->get_row($id);
      $this->load->view('admin/header');
      $this->load->view('admin/sidebar');
      $this->load->view('admin/topbar', $data);
      $this->load->view('admin/user/edit', $data);
      $this->load->view('admin/footer');
      if (isset($_POST['edit'])) {
        $this->m_listuser->edit();
      }
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }

  public function hapus($id)
  {
    if ($this->session->userdata('login') == '1') {
      if ($this->session->userdata('login') == '1') {
        $this->m_listuser->delete($id);
        redirect('user', 'refresh');
      } else {
        $this->session->set_flashdata('belum_login', '1');
        redirect('auth/login', 'refresh');
      }
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }
}
