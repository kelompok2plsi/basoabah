<?php
defined('BASEPATH') or exit('No direct script access allowed');

class belanja extends CI_Controller
{
  public function add()
  {
    $redirect_page = $this->input->post('redirect_page');
    $data = array(
      'id'      => $this->input->post('id'),
      'qty'     => $this->input->post('qty'),
      'price'   => $this->input->post('price'),
      'name'    => $this->input->post('name'),
    );

    $this->cart->insert($data);
    $this->session->set_flashdata('berhasil', '1');
    redirect($redirect_page);
  }

  public function keranjang()
  {
    $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('user/keranjang', $data);
  }

  public function delete($rowid)
  {
    $this->cart->remove($rowid);
    return redirect('belanja/keranjang');
  }

  public function deleteall()
  {
    $this->cart->destroy();
    return redirect('belanja/keranjang');
  }
}
