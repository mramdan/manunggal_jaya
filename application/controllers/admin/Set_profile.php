<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Set_profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('auth');
        }
        $this->load->model('Profile_models', 'profile_m');
        $this->user = $this->ion_auth->user()->row();
    }

    public function index()
    {

        $data = [
            'judul' => 'Admin Dashborad',
            'profile' => $this->profile_m->get_profile('nama_perusahaan'),
            'alamat' => $this->profile_m->get_profile('alamat'),

        ];

        $this->load->view('_template/header', $data);
        $this->load->view('_template/topbar');
        $this->load->view('_template/sidebar');
        $this->load->view('admin/profile/index', $data);
        $this->load->view('_template/footer');
    }
}
