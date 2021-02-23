<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_models extends CI_Model
{
    public $table = 'set_profile'; // variable table from database
    public $column_order = array('');
    public $column_search = array('');
    public $order = array('' => ''); // default order

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->library('Excel');
    //     // $this->load->database();
    // }

    public function get_profile($var)
    {
        // $this->db->select('title, content, date');
        $query = $this->db->get($this->table)->row();
        $data = $query->$var;
        // $data = array();
        // foreach ($query->result() as $row) {
        //     $data[] = array(
        //         'logo' => $row->logo,
        //         'nama_perusahaan' => $row->nama_perusahaan,
        //         'no_perusahaan' => $row->no_perusahaan,
        //         'alamat' => $row->alamat,
        //         'kontak' => $row->kontak,
        //         'email' => $row->email,
        //     );
        // }
        return $data;
    }

    public function save($data)
    {

        $this->db->insert('prk_jasa_mat', $data);
        $r = $this->db->insert_id();
        if ($r) {
            $res['status'] = '00';
            $res['mess'] = 'Berhasil Simpan Data';
        } else {
            $res['status'] = '01';
            $res['mess'] = 'Gagal Simpan Data';
        }
        return $res;
    }

    public function get_by_id($id)
    {
        $this->db->start_cache();
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $this->db->stop_cache();
        $query = $this->db->get();
        $this->db->flush_cache();
        return $query->row();
    }

    public function update($where, $data)
    {

        $r = $this->db->update($this->table, $data, $where);

        if ($r) {
            $res['status'] = '00';
            $res['type'] = 'success';
            $res['mess'] = 'Berhasil Update Data';
        } else {
            $res['status'] = '01';
            $res['type'] = 'warning';
            $res['mess'] = 'Gagal Update Data';
        }
        return $res;
    }

    public function delete_by_id($id)
    {
        $this->db->where('id_prk', $id);
        $r = $this->db->delete($this->table);
        if ($r) {
            $res['status'] = '00';
            $res['mess'] = 'Data Berhasil Di Delete';
        } else {
            $res['status'] = '01';
            $res['mess'] = 'Data Gagal Di Delete';
        }
        return $res;
    }
}
