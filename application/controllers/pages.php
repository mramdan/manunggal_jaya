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
         'description' => $this->pages->get_profile('description'),
         'alamat' => $this->pages->get_profile('alamat'),
         'email' => $this->pages->get_profile('email'),

         // Content
         'hero' => $this->pages->get_hero(),
         'name' => $this->pages->get_profile('nama_perusahaan'),
         'about' => $this->pages->get_profile('about'),
         'testimoni' => $this->pages->get_testimoni(),
         'kategori' => $this->pages->get_kategori(),

      ];
      $this->load->view('layout/header', $data);
      $this->load->view('pages/home_v', $data);
      $this->load->view('layout/footer', $data);
   }

   public function profile()
   {
      $data = [
         'title' => 'Profile',
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
         'description' => $this->pages->get_profile('description'),
         'alamat' => $this->pages->get_profile('alamat'),
         'email' => $this->pages->get_profile('email'),
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('pages/profile_v');
      $this->load->view('layout/footer', $data);
   }
}
