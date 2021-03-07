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
         //title Page
         'title' => 'Home | ' . $this->pages->get_profile('nama_perusahaan'),
         // Seo Setting
         'description' => $this->pages->get_profile('description'),
         'keywords' => $this->pages->get_profile('keywords'),
         'author' => $this->pages->get_profile('author'),

         //header
         'logo' => $this->pages->get_profile('logo'),
         'kontak' => $this->pages->get_profile('kontak'),
         'kontak2' => $this->pages->get_profile('kontak2'),

         // Footer
         'twitter' => $this->pages->get_sosmed('Twitter'),
         'facebook' => $this->pages->get_sosmed('Facebook'),
         'instagram' => $this->pages->get_sosmed('Instagram'),
         'youtube' => $this->pages->get_sosmed('YouTube'),

         'name' => $this->pages->get_profile('nama_perusahaan'),
         'service' => $this->pages->get_profile('service'),
         'alamat' => $this->pages->get_profile('alamat'),
         'produk' => $this->pages->get_product(),
         'email' => $this->pages->get_profile('email'),
         'addres' => $this->pages->get_profile('alamat'),


         // Content
         'hero' => $this->pages->get_hero(),
         'name' => $this->pages->get_profile('nama_perusahaan'),
         'about' => $this->pages->get_profile('about'),
         'testimoni' => $this->pages->get_testimoni(),

      ];
      $this->load->view('layout/header', $data);
      // $this->load->view('layout/navbar');
      $this->load->view('pages/home_v', $data);
      $this->load->view('layout/footer');
   }



   // Data profile



   public function profile()
   {
      $data = [
         'tittle' => 'Profile',
         'cv' => $this->pages->get_profile('nama_perusahaan'),
         'about' => $this->pages->get_profile('about'),
         'logo' => $this->pages->get_profile('logo'),

         'right' => $this->pages->get_profile('nama_perusahaan'),
         'kontak' => $this->pages->get_profile('kontak'),
         'email' => $this->pages->get_profile('email'),
         'addres' => $this->pages->get_profile('alamat'),

         'twitter' => $this->pages->get_sosmed('Twitter'),
         'facebook' => $this->pages->get_sosmed('Facebook'),
         'instagram' => $this->pages->get_sosmed('Instagram'),
         'youtube' => $this->pages->get_sosmed('YouTube'),
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('layout/navbar');
      $this->load->view('pages/profile_v');
      $this->load->view('layout/footer', $data);
   }


   // Data produk



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

         'twitter' => $this->pages->get_sosmed('Twitter'),
         'facebook' => $this->pages->get_sosmed('Facebook'),
         'instagram' => $this->pages->get_sosmed('Instagram'),
         'youtube' => $this->pages->get_sosmed('YouTube'),
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

         'twitter' => $this->pages->get_sosmed('Twitter'),
         'facebook' => $this->pages->get_sosmed('Facebook'),
         'instagram' => $this->pages->get_sosmed('Instagram'),
         'youtube' => $this->pages->get_sosmed('YouTube'),
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('layout/navbar');
      $this->load->view('pages/d_produk_v', $data);
      $this->load->view('layout/footer', $data);
   }
   public function pesan_produk()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $nama = $this->input->post('nama');
         $email = $this->input->post('email');
         $telpon = $this->input->post('telpon');
         $alamat = $this->input->post('alamat');

         // echo '<h1>' . $produk . '</h1>';
      }
   }




   // Data blog



   public function blog()
   {
      $data = [
         'tittle' => 'Blog',
         'right' => $this->pages->get_profile('nama_perusahaan'),
         'kontak' => $this->pages->get_profile('kontak'),
         'email' => $this->pages->get_profile('email'),
         'addres' => $this->pages->get_profile('alamat'),
         'blog' => $this->pages->get_blog(),

         'twitter' => $this->pages->get_sosmed('Twitter'),
         'facebook' => $this->pages->get_sosmed('Facebook'),
         'instagram' => $this->pages->get_sosmed('Instagram'),
         'youtube' => $this->pages->get_sosmed('YouTube'),
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('layout/navbar');
      $this->load->view('pages/blog_v', $data);
      $this->load->view('layout/footer', $data);
   }



   // Data contact



   public function contact()
   {
      $data = [
         'tittle' => 'Contact',
         'right' => $this->pages->get_profile('nama_perusahaan'),
         'kontak' => $this->pages->get_profile('kontak'),
         'email' => $this->pages->get_profile('email'),
         'addres' => $this->pages->get_profile('alamat'),

         'twitter' => $this->pages->get_sosmed('Twitter'),
         'facebook' => $this->pages->get_sosmed('Facebook'),
         'instagram' => $this->pages->get_sosmed('Instagram'),
         'youtube' => $this->pages->get_sosmed('YouTube'),
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('layout/navbar');
      $this->load->view('pages/Contact_v', $data);
      $this->load->view('layout/footer', $data);
   }
   public function testimoni()
   {
      $data = [
         'tittle' => 'Testimoni',
         'testimoni' => $this->pages->get_testimoni(),
         'right' => $this->pages->get_profile('nama_perusahaan'),
         'kontak' => $this->pages->get_profile('kontak'),
         'email' => $this->pages->get_profile('email'),
         'addres' => $this->pages->get_profile('alamat'),

         'twitter' => $this->pages->get_sosmed('Twitter'),
         'facebook' => $this->pages->get_sosmed('Facebook'),
         'instagram' => $this->pages->get_sosmed('Instagram'),
         'youtube' => $this->pages->get_sosmed('YouTube'),
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('layout/navbar');
      $this->load->view('pages/testimoni_v', $data);
      $this->load->view('layout/footer', $data);
   }
}
