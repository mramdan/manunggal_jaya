<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages_models extends CI_Model
{
   public function get_nama()
   {
      $nama = 'manungal jaya';
      return $nama;
   }

   public function get_nama2()
   {
      $section = 'Bengkel Las Canopi';
      return $section;
   }


   //produk
   public function get_produk()
   {
      $kategori = 'klasik';
      return $kategori;
   }
   public function get_dp()
   {
      $dp = 'For each project';
      return $dp;
   }
   public function get_dpi()
   {
      $dpi = 'For each project we establish relationships with partners who we know will help';
      return $dpi;
   }
   public function get_product()
   {
      // $query = "SELECT * FROM hero";
      $this->db->select('*');
      $this->db->from('hero');
      $sql = $this->db->get()->row();

      // $data = [];

      // foreach ($sql as $list) {
      //    $data = [
      //       'id_hero' => $list->id_hero,
      //       'judul' => $list->judul,
      //       'image' => $list->image,
      //       'descripsi' => $list->descripsi,
      //    ];
      // }
      return $sql;
   }
}
