<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_bayar extends CI_Model
{
  function bayar($data)
  {
    $this->db->insert('tbl_transaksi', $data);
  }

  function detail($data)
  {
    $this->db->insert('tbl_detail_transaksi', $data);
  }

  public function create($id, $filename, $id_user)
  {
    $data = [
      'id' => $id,
      'id_user' => $id_user,
      'filename' => $filename
    ];

    $this->db->insert('tbl_transfer', $data);
  }
}
