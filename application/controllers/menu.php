<?php
defined('BASEPATH') or exit('No direct script access allowed');

class menu extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_menu');
  }

  public function index()
  {
    if ($this->session->userdata('login') == '1') {
      $data['nama'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $data['menu'] = $this->m_menu->read();
      $this->load->view('admin/header');
      $this->load->view('admin/sidebar');
      $this->load->view('admin/topbar', $data);
      $this->load->view('admin/menu/menu', $data);
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
      $this->load->view('admin/menu/tambah');
      $this->load->view('admin/footer');
      if (isset($_POST['tambah'])) {
        $this->m_menu->tambah();
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
      $data['nilai'] = $this->m_menu->get_row($id);
      $this->load->view('admin/header');
      $this->load->view('admin/sidebar');
      $this->load->view('admin/topbar', $data);
      $this->load->view('admin/menu/edit', $data);
      $this->load->view('admin/footer');
      if (isset($_POST['edit'])) {
        $this->m_menu->edit();
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
        $this->m_menu->delete($id);
        redirect('menu', 'refresh');
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
