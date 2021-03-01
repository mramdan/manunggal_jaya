<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{


   public function __construct()
   {
      parent::__construct();
      $this->load->model('Pages_models', 'pages');
   }

   public function index()
   {
      $data = [
         'tittle' => 'Home',

         //hero
         'cv' => $this->pages->get_profile('nama_perusahaan'),
         'about' => $this->pages->get_profile('about'),
         'service' => $this->pages->get_profile('service'),
         'alamat' => $this->pages->get_profile('alamat'),
         'produk' => $this->pages->get_product(),
         'right' => $this->pages->get_profile('nama_perusahaan'),
         'kontak' => $this->pages->get_profile('kontak'),
         'email' => $this->pages->get_profile('email'),
         'addres' => $this->pages->get_profile('alamat'),
         'hero' => $this->pages->get_hero(),

      ];
      $this->load->view('layout/header', $data);
      $this->load->view('layout/navbar');
      $this->load->view('pages/home_v', $data);
      $this->load->view('layout/footer', $data);
   }


   public function profile()
   {
      $data = [
         'tittle' => 'Profile',
         'cv' => $this->pages->get_profile('nama_perusahaan'),
         'about' => $this->pages->get_profile('about'),
         'right' => $this->pages->get_profile('nama_perusahaan'),
         'kontak' => $this->pages->get_profile('kontak'),
         'email' => $this->pages->get_profile('email'),
         'addres' => $this->pages->get_profile('alamat')
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('layout/navbar');
      $this->load->view('pages/profile_v');
      $this->load->view('layout/footer', $data);
   }


   public function produk()
   {
      $data = [
         'tittle' => 'Produk',
         'produk' => $this->pages->get_product(),
         'right' => $this->pages->get_profile('nama_perusahaan'),
         'kontak' => $this->pages->get_profile('kontak'),
         'email' => $this->pages->get_profile('email'),
         'addres' => $this->pages->get_profile('alamat'),
         'produk' => $this->pages->get_product(),
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('layout/navbar');
      $this->load->view('pages/produk_v', $data);
      $this->load->view('layout/footer', $data);
   }

   public function detail_produk($id)
   {
      $data = [
         'tittle' => 'Detail Produk',
         'right' => $this->pages->get_profile('nama_perusahaan'),
         'kontak' => $this->pages->get_profile('kontak'),
         'email' => $this->pages->get_profile('email'),
         'addres' => $this->pages->get_profile('alamat'),
         'detail' => $this->pages->get_product_by_id($id),
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('layout/navbar');
      $this->load->view('pages/d_produk_v', $data);
      $this->load->view('layout/footer', $data);
   }

   public function blog()
   {
      $data = [
         'tittle' => 'Blog',
         'right' => $this->pages->get_profile('nama_perusahaan'),
         'kontak' => $this->pages->get_profile('kontak'),
         'email' => $this->pages->get_profile('email'),
         'addres' => $this->pages->get_profile('alamat'),
         'blog' => $this->pages->get_blog(),
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('layout/navbar');
      $this->load->view('pages/blog_v', $data);
      $this->load->view('layout/footer', $data);
   }


   public function contact()
   {
      $data = [
         'tittle' => 'Contact',
         'right' => $this->pages->get_profile('nama_perusahaan'),
         'kontak' => $this->pages->get_profile('kontak'),
         'email' => $this->pages->get_profile('email'),
         'addres' => $this->pages->get_profile('alamat'),
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('layout/navbar');
      $this->load->view('pages/Contact_v', $data);
      $this->load->view('layout/footer', $data);
   }
}
