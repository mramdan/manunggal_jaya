<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages_models extends CI_Model
{
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
}
