<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_user extends CI_Model
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
  function get_noder($no_order)
  {
    return $this->db->get_where('tbl_detail_transaksi', ['no_order' => $no_order])->result_array();
  }
  function menu()
  {
    return $this->db->get('tbl_menu')->result_array();
  }
}
