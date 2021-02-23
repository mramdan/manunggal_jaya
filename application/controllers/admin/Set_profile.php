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
            'user' => $this->user,
            'judul' => 'Setting Profile Perusahaan',
            'id' => $this->profile_m->get_profile('id'),
            'profile' => $this->profile_m->get_profile('nama_perusahaan'),
            'alamat' => $this->profile_m->get_profile('alamat'),
            'no' => $this->profile_m->get_profile('no_perusahaan'),
        ];

        $this->load->view('_template/header', $data);
        $this->load->view('_template/topbar', $data);
        $this->load->view('_template/sidebar', $data);

        $this->load->view('admin/profile_v', $data);
        $this->load->view('js/profile_js');

        $this->load->view('_template/footer');
    }

    public function ajax_add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                'nama_prk' => $this->input->post('nama_prk'),
            );
            //print_r($data);
            $insert = $this->profile_m->save($data);
            echo json_encode($insert);
        }
    }

    public function ajax_edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->profile_m->get_by_id($id);
            echo json_encode($data);
        }
    }

    public function ajax_update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'no_perusahaan' => $this->input->post('no_perusahaan'),
                'alamat' => $this->input->post('alamat'),
                'about' => $this->input->post('about'),
            );
            // var_dump($data);
            $insert = $this->profile_m->update(array('id' => $this->input->post('id')), $data);
            echo json_encode($insert);
        }
    }
}
