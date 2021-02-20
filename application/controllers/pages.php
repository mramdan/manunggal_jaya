<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

   /**
    * Index Page for this controller.
    *
    * Maps to the following URL
    * 		http://example.com/index.php/welcome
    *	- or -
    * 		http://example.com/index.php/welcome/index
    *	- or -
    * Since this controller is set as the default controller in
    * config/routes.php, it's displayed at http://example.com/
    *
    * So any other public methods not prefixed with an underscore will
    * map to /index.php/welcome/<method_name>
    * @see https://codeigniter.com/user_guide/general/urls.html
    */

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
         'cv' => $this->pages->get_nama(),
         'cv2' => $this->pages->get_nama2(),

         //produk
         'jenis' => $this->pages->get_produk(),
         'dki' => $this->pages->get_dp(),
         'deskripsi' => $this->pages->get_dpi(),
         'product' => $this->pages->get_product(),
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('layout/navbar');
      $this->load->view('pages/home_v', $data);
      $this->load->view('layout/footer');
   }
   public function profile()
   {
      $data = [
         'tittle' => 'Profile'
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('layout/navbar');
      $this->load->view('pages/profile_v');
      $this->load->view('layout/footer');
   }
   public function produk()
   {
      $data = [
         'tittle' => 'Produk'
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('layout/navbar');
      $this->load->view('pages/produk_v');
      $this->load->view('layout/footer');
   }
   public function blog()
   {
      $data = [
         'tittle' => 'Blog'
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('layout/navbar');
      $this->load->view('pages/blog_v');
      $this->load->view('layout/footer');
   }
   public function contact()
   {
      $data = [
         'tittle' => 'Contact'
      ];
      $this->load->view('layout/header', $data);
      $this->load->view('layout/navbar');
      $this->load->view('pages/Contact_v');
      $this->load->view('layout/footer');
   }
}
