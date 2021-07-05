<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_listuser extends CI_Model
{
  function user()
  {
    $this->db->order_by('id', 'Asc');
    return $this->db->get('tbl_user')->result_array();
  }

  function get_row($id)
  {
    return $this->db->get_where('tbl_user', ['id' => $id])->row_array();
  }

  function tambah()
  {
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $alamat = $this->input->post('alamat');
    $password =  password_hash($this->input->post('password'), PASSWORD_DEFAULT);
    $role_id = $this->input->post('role_id');

    $data = [
      'nama' => $nama,
      'email' => $email,
      'alamat' => $alamat,
      'password' => $password,
      'role_id' => $role_id,
    ];

    $this->db->insert('tbl_user', $data);
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('pesan', 'Ditambah');
      redirect('list_user', 'refresh');
    }
  }

  function edit()
  {
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $alamat = $this->input->post('alamat');
    $password =  password_hash($this->input->post('password'), PASSWORD_DEFAULT);
    $role_id = $this->input->post('role_id');

    $data = [
      'nama' => $nama,
      'email' => $email,
      'alamat' => $alamat,
      'password' => $password,
      'role_id' => $role_id,
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('tbl_user', $data);
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('pesan', 'Diubah');
      redirect('list_user', 'refresh');
    }
  }

  function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('tbl_user');
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('pesan', 'Dihapus');
      redirect('list_user', 'refresh');
    }
  }
}
