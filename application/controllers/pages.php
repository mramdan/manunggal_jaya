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

   public function produk()
   {
      $data = [
         'title' => 'Produk ' . $this->pages->get_profile('nama_perusahaan'),
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
         'kategori' => $this->pages->get_kategori(),

      ];
      $this->load->view('layout/header', $data);
      $this->load->view('pages/produk_v', $data);
      $this->load->view('layout/footer', $data);
   }

   public function produk_detail($slug)
   {
      $produk = $this->pages->get_kategori_by_slug($slug);
      $kat = $produk['kategori'];
      $idkat = $produk['id_kategori'];

      $data = [
         'title' => 'Jasa Pembuatan & Pemasangan ' . $kat,
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
         'produk' => $produk,
         'produk_detail' => $this->pages->get_produk_detail($idkat),

      ];
      $this->load->view('layout/header', $data);
      $this->load->view('pages/produk_detail_v', $data);
      $this->load->view('layout/footer', $data);
   }

   public function blog()
   {
      $data = [
         'title' => 'Blog - ' . $this->pages->get_profile('nama_perusahaan'),
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

         // COntent
         'blog' => $this->pages->get_blog(),
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('pages/blog_v', $data);
      $this->load->view('layout/footer', $data);
   }

   public function kontak()
   {
      $data = [
         'title' => 'Kontak | ' . $this->pages->get_profile('nama_perusahaan'),
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
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('pages/kontak_v', $data);
      $this->load->view('layout/footer', $data);
   }

   public function testimoni()
   {
      $data = [
         'title' => 'Testimoni- ' . $this->pages->get_profile('nama_perusahaan'),
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

         // COntent
         'testimoni' => $this->pages->get_testimoniall(),


      ];
      $this->load->view('layout/header', $data);
      $this->load->view('pages/Testimoni_v', $data);
      // $this->load->view('js/f_testi_js', $data);
      $this->load->view('layout/footer', $data);
   }

   public function submitTesti()
   {


      $config['upload_path'] = './assets/uploads/testimoni/';
      $config['allowed_types'] = '*';
      $config['file_name'] =  time();
      $config['overwrite'] = true;
      $config['max_size'] = 1024; // 1MB

      $this->load->library('upload', $config);
      // $this->upload->initialize($config);
      if (!$this->upload->do_upload('foto')) {
         $error = $this->upload->display_errors();
         echo  $error;
      } else {
         $image_data = $this->upload->data();

         $data = array(
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'komentar' => $this->input->post('komentar'),
            'status' => 'Not Acc',
            'foto' => $image_data['file_name'],
         );
         // var_dump($data);

         $insert = $this->pages->save($data);
         // redirect('page/thanks', $insert);
         $this->load->view('pages/tester', $insert);
      }
   }

   public function submitkontak()
   {
      $nama = $this->input->post('nama');
      $phone = $this->input->post('phone');
      $email = $this->input->post('email');
      $service = $this->input->post('service');
      $lokasi = $this->input->post('lokasi');
      $cmetod = $this->input->post('cmetod');
      $contactmessage = $this->input->post('contactmessage');
      $contactbox = $this->input->post('contactbox');

      $data = array(
         'nama' => $nama,
         'phone' => $phone,
         'email' => $email,
         'service' => $service,
         'lokasi' => $lokasi,
         'cmetod' => $cmetod,
         'contactmessage' => $contactmessage,
         'contactbox' => $contactbox,
      );
      var_dump($data);

      // $insert = $this->pages->save($data);
      // $this->load->view('pages/tester', $insert);
   }
}
