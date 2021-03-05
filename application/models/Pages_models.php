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
            'urutan' => $row->urutan,
            'is_active' => $row->is_active,
            'image' => $row->image,
            'type' => $row->type,
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
      $query = $this->db->query('select * from testimoni');

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

   public function get_product()
   {
      $query = $this->db->query('select * from ref_produk LEFT JOIN ref_image ON ref_produk.id_image=ref_image.id_image order by id_produk desc limit 3');

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
      return $this->db->get_where('ref_produk', ['nama_produk' => $id])->row_array();
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
