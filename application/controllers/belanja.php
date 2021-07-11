<?php
defined('BASEPATH') or exit('No direct script access allowed');

class belanja extends CI_Controller
{
  public function add()
  {
    if ($this->session->userdata('login') == '1') {
      $redirect_page = $this->input->post('redirect_page');
      $data = array(
        'id'      => $this->input->post('id'),
        'qty'     => $this->input->post('qty'),
        'price'   => $this->input->post('price'),
        'name'    => $this->input->post('name'),
      );

      $this->cart->insert($data);
      $this->session->set_flashdata('berhasil', '<div class="alert alert-success" role="alert">Berhasil Menambahkan ke Keranjang!</div>');
      redirect($redirect_page);
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }

  public function keranjang()
  {
    if ($this->session->userdata('login') == '1') {
      if (empty($this->cart->contents())) {
        redirect('user/menu');
      }
      $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
      $this->load->view('user/template/header');
      $this->load->view('user/template/navbar', $data);
      $this->load->view('user/keranjang', $data);
      $this->load->view('user/template/footer');
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }

  public function delete($rowid)
  {
    if ($this->session->userdata('login') == '1') {
      $this->cart->remove($rowid);
      $this->session->set_flashdata('delete', '<div class="alert alert-danger" role="alert">Pesanan dihapus dari Keranjang!</div>');

      return redirect('belanja/keranjang');
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }

  public function deleteall()
  {
    if ($this->session->userdata('login') == '1') {
      $this->cart->destroy();
      $this->session->set_flashdata('deleteall', '<div class="alert alert-danger" role="alert">Pesanan dihapus dari Keranjang!</div>');
      return redirect('user/menu');
    } else {
      $this->session->set_flashdata('belum_login', '1');
      redirect('auth/masuk', 'refresh');
    }
  }

  public function update()
  {
    $i = 1;
    foreach ($this->cart->contents() as $items) {
      $data = array(
        'rowid' => $items['rowid'],
        'qty' => $this->input->post($i . '[qty]'),
      );
      $this->cart->update($data);
      $i++;
    }
    redirect('belanja/keranjang');
  }
}
