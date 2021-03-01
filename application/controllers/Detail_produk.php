<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_produk extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Pages_models', 'detail_produk');
   }

   public function index()
   {
      // $data['ref_product'] = $this->pages_models->get_detail($id);
      // $data['ref_product'] = $this->pages_models->getdetail($id);

      $data = [
         'tittle' => 'Detail Produk',

         // 'name' => $this->detail_produk->get_detail('nama_produk'),
         // 'harga' => $this->detail_produk->get_detail('harga'),
         // 'images' => $this->detail_produk->get_detail('file'),
         // 'deskripsi' => $this->detail_produk->get_detail('deskripsi'),


         'right' => $this->detail_produk->get_profile('nama_perusahaan'),
         'kontak' => $this->detail_produk->get_profile('kontak'),
         'email' => $this->detail_produk->get_profile('email'),
         'addres' => $this->detail_produk->get_profile('alamat'),
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('layout/navbar');
      $this->load->view('file/d_produk_v', $data);
      $this->load->view('layout/footer', $data);
   }
}
