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
}
