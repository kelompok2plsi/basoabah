<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_auth extends CI_Model
{
  function daftar()
  {
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $alamat = $this->input->post('alamat');
    $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);

    $data = [
      'nama' => $nama,
      'email' => $email,
      'alamat' => $alamat,
      'password' => $password,
      'role_id' => '3',
    ];

    $this->db->insert('tbl_user', $data);
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('pesan', 'Daftar');
      redirect('auth/masuk', 'refresh');
    }
  }
}
