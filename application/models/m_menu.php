<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_menu extends CI_Model
{

  function read()
  {
    $this->db->order_by('id', 'Asc');
    return $this->db->get('tbl_menu')->result_array();
  }

  function get_row($id)
  {
    return $this->db->get_where('tbl_menu', ['id' => $id])->row_array();
  }


  function tambah()
  {
    $menu = $this->input->post('menu');
    $deskripsi = $this->input->post('deskripsi');
    $harga = $this->input->post('harga');
    $gambar = $this->input->post('gambar');

    $data = [
      'menu' => $menu,
      'deskripsi' => $deskripsi,
      'harga' => $harga,
      'gambar' => $gambar,
    ];

    $this->db->insert('tbl_menu', $data);
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('pesan', 'Ditambah');
      redirect('menu', 'refresh');
    }
  }

  function edit()
  {
    $menu = $this->input->post('menu');
    $deskripsi = $this->input->post('deskripsi');
    $harga = $this->input->post('harga');
    $gambar = $this->input->post('gambar');

    $data = [
      'menu' => $menu,
      'deskripsi' => $deskripsi,
      'harga' => $harga,
      'gambar' => $gambar,
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('tbl_menu', $data);
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Menu Berhasil diubah</div>');
      redirect('menu', 'refresh');
    }
  }

  function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('tbl_menu');
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('pesan', 'Dihapus');
      redirect('menu', 'refresh');
    }
  }
}
