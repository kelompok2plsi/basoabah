<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_penjual extends CI_Model
{
  function get_row($id)
  {
    return $this->db->get_where('tbl_transaksi', ['id' => $id])->row_array();
  }

  function edit_pesanan()
  {
    $status = $this->input->post('status');

    $data = [
      'status' => $status,
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('tbl_transaksi', $data);

    redirect('penjual/pesanan');
  }
}
