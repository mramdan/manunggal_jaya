<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages_models extends CI_Model
{
   var $table = 'testimoni';
   var $column_order = array('', 'nama_pelanggan', 'komentar', 'foto' . 'status');
   var $column_search = array('nama_pelanggan', 'komentar', 'foto', 'status');
   var $order = array('id_testi' => 'desc'); // default order 

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

   public function get_testimoniall()
   {
      $query = $this->db->query("select * from testimoni where status ='Acc' order by id_testi desc");

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
            'slug' => $row->slug,
            'harga' => $row->harga,
            'foto' => $row->foto,

         );
      }
      return $data;
   }

   public function get_kategori_by_slug($slug)
   {
      return $this->db->get_where('ref_kategori', ['slug' => $slug])->row_array();
   }

   public function get_produk_detail($idkat)
   {
      $query = $this->db->query("select * from ref_produk where id_kategori= $idkat");

      $data = array();
      foreach ($query->result() as $row) {
         $data[] = array(
            'id_produk' => $row->id_produk,
            'nama_produk' => $row->nama_produk,
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

   //   get input data testi

   private function _get_datatables_query()
   {

      $this->db->from($this->table);

      $i = 0;

      if (!empty($_POST['search']['value'])) {
         foreach ($this->column_search as $item) // loop column 
         {

            if ($i === 0) // first loop
            {
               // $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
               $this->db->like($item, $_POST['search']['value']);
            } else {
               $this->db->or_like($item, $_POST['search']['value']);
            }

            if (count($this->column_search) - 1 == $i); //last loop
            // $this->db->group_end(); //close bracket
            $i++;
         }
      }


      if (isset($_POST['order'])) // here order processing
      {
         $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
      } else if (isset($this->order)) {
         $order = $this->order;
         $this->db->order_by(key($order), $order[key($order)]);
      }
   }

   function get_datatables()
   {

      $this->_get_datatables_query();
      $this->db->select("testimoni.*,ref_kategori.deskripsi as kategori", false);


      if ($_POST['length'] != -1)
         $this->db->limit($_POST['length'], $_POST['start']);

      $query = $this->db->get();
      return $query->result();
   }
   public function count_all()
   {
      $this->_get_datatables_query();
      $this->db->select("ref_produk.*,ref_kategori.deskripsi as kategori", false);
      $this->db->join('ref_kategori', 'ref_produk.id_kategori=ref_kategori.id_kategori');
      return $this->db->count_all_results();
   }

   public function save($data)
   {
      // var_dump($data);
      $r = $this->db->insert($this->table, $data);

      if ($r) {
         $res['status'] = '00';
         $res['type'] = 'success';
         $res['mess'] = 'Terimakasih Sudah Memberi Testimoni';
      } else {
         $res['status'] = '01';
         $res['type'] = 'warning';
         $res['mess'] = 'Gagal Simpan Data';
      }
      return $res;
   }
}
