<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages_models extends CI_Model
{

   public function get_hero()
   {
      $query = $this->db->query('select * from set_hero LEFT JOIN ref_image ON set_hero.id_image=ref_image.id_image');

      $data = array();
      foreach ($query->result() as $row) {
         $data[] = array(
            'id_hero' => $row->id_hero,
            'judul' => $row->judul,
            'deskripsi' => $row->deskripsi,
            'urutan' => $row->urutan,
            'is_active' => $row->is_active,
            'file' => $row->file,
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

   public function get_product()
   {
      $query = $this->db->query('select * from ref_produk LEFT JOIN ref_image ON ref_produk.id_image=ref_image.id_image');

      $data = array();
      foreach ($query->result() as $row) {
         $data[] = array(
            'id_produk' => $row->id_produk,
            'nama_produk' => $row->nama_produk,
            'deskripsi' => $row->deskripsi,
            'harga' => $row->harga,
            'file' => $row->file,
         );
      }
      return $data;
   }


   public function get_product_by_id($id)
   {
      return $this->db->get_where('ref_produk', ['id_produk' => $id])->row_array();
   }




   public function get_blog()
   {
      $query = $this->db->query('select * from blog LEFT JOIN ref_image ON blog.id_gambar=ref_image.id_image');

      $data = array();
      foreach ($query->result() as $row) {
         $data[] = array(
            'id_artikel' => $row->id_artikel,
            'judul_artikel' => $row->judul_artikel,
            'konten' => $row->konten,
            'file' => $row->file,
         );
      }
      return $data;
   }



   //footer

   public function get_sosmed($sosmed)
   {
      $query = $this->db->get('ref_sosmed')->row();
      $data = $query->$sosmed;
      return $data;
   }
}
