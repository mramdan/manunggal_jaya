<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages_models extends CI_Model
{

   public function get_hero()
   {
      $query = $this->db->query('select * from set_hero');

      $data = array();
      foreach ($query->result() as $row) {
         $data[] = array(
            'id_hero' => $row->id_hero,
            'judul' => $row->judul,
            'deskripsi' => $row->deskripsi,
            'gambar' => $row->gambar,
         );
      }
      return $data;
   }

   public function get_profile($varams)
   {
      $query = $this->db->get('set_profile')->row();
      // $result = $query;
      $data = $query->$varams;

      return $data;
   }

   public function get_testimoni()
   {
      $query = $this->db->query('select * from testimoni order by id_testi desc limit 4');

      $data = array();
      foreach ($query->result() as $row) {
         $data[] = array(
            'id_testi' => $row->id_testi,
            'nama_pelanggan' => $row->nama_pelanggan,
            'komentar' => $row->komentar,
            'foto' => $row->foto,

         );
      }
      return $data;
   }

   public function get_kategori()
   {
      $query = $this->db->query('select * from ref_kategori');

      $data = array();
      foreach ($query->result() as $row) {
         $data[] = array(
            'id_kategori' => $row->id_kategori,
            'kategori' => $row->kategori,
            'foto' => $row->foto,

         );
      }
      return $data;
   }

   public function get_product()
   {
      $query = $this->db->query('select * from ref_produk order by id_produk desc limit 3');

      $data = array();
      foreach ($query->result() as $row) {
         $data[] = array(
            'id_produk' => $row->id_produk,
            'nama_produk' => $row->nama_produk,
            'kategori' => $row->kategori,
            'deskripsi' => $row->deskripsi,
            'harga' => $row->harga,
            'foto' => $row->foto,
         );
      }
      return $data;
   }


   public function get_product_by_id($id)
   {
      return $this->db->get_where('ref_produk', ['nama_produk' => $id])->row_array();
   }

   public function get_blog()
   {
      $query = $this->db->query('select * from blog order by id_blog asc');

      $data = array();
      foreach ($query->result() as $row) {
         $data[] = array(
            'id_blog' => $row->id_blog,
            'judul_blog' => $row->judul_blog,
            'konten' => $row->konten,
            'foto' => $row->foto,
            'tgl_post' => $row->tgl_post,
            'link' => $row->link,
         );
      }
      return $data;
   }

   public function get_blog_by_link($link)
   {
      $hsl = $this->db->query("SELECT * FROM blog WHERE link='$link'");
      return $hsl;
   }

   public function get_sosmed($sosmed)
   {
      $query = $this->db->get('ref_sosmed')->row();
      $data = $query->$sosmed;
      return $data;
   }
}
