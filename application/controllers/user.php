<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
  public function menu()
  {
    if ($this->session->userdata('login') == '1') {
      $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $data['menu'] = $this->m_user->read();
      $this->load->view('user/template/header');
      $this->load->view('user/template/navbar', $data);
      $this->load->view('user/menu', $data);
      $this->load->view('user/template/footer');
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
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

  public function changepassword()
  {
    $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
    $this->form_validation->set_rules('new_password1', 'New Password1', 'required|trim|min_length[8]|matches[new_password2]');
    $this->form_validation->set_rules('new_password2', 'ConfirmNew Password2', 'required|trim|min_length[8]|matches[new_password1]');

    if ($this->form_validation->run() == false) {
      $this->load->view('user/template/header');
      $this->load->view('user/template/navbar', $data);
      $this->load->view('user/changepassword');
      $this->load->view('user/template/footer');
    } else {
      $current_password = $this->input->post('current_password');
      $new_password = $this->input->post('new_password1');
      if (!password_verify($current_password, $data['user']['password'])) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
        redirect('user/changepassword');
      } else {
        if ($current_password == $new_password) {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as  current password!</div>');
          redirect('user/changepassword');
        } else {
          $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

          $this->db->set('password', $password_hash);
          $this->db->where('email', $this->session->userdata('email'));
          $this->db->update('tbl_user');

          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password has change successfully!</div>');
          redirect('user/menu');
        }
      }
    }
  }

  public function pesanan_saya()
  {
    if ($this->session->userdata('login') == '1') {
      $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $this->db->order_by('id', 'Dsc');
      $data['pesanan'] = $this->db->get_where('tbl_transaksi', ['id_user' => $data['user']['id']])->result_array();
      $this->load->view('user/template/header');
      $this->load->view('user/template/navbar', $data);
      $this->load->view('user/pesanan_saya', $data);
      $this->load->view('user/template/footer');
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
      $this->load->view('user/template/header');
      $this->load->view('user/template/navbar', $data);
      $this->load->view('user/detail_pesanan', $data);
      $this->load->view('user/template/footer');
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }
}
