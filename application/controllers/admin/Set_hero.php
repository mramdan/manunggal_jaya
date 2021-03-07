<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Set_hero extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('auth');
        }
        $this->load->model('Hero_model', 'hero_m');
        $this->user = $this->ion_auth->user()->row();
    }

    public function index()
    {
        $data = [
            'user' => $this->user,
            'judul' => 'Manajemen Hero/Slider Website',
        ];

        $this->load->view('_template/header', $data);
        $this->load->view('_template/topbar', $data);
        $this->load->view('_template/sidebar', $data);
        $this->load->view('admin/hero_v');
        $this->load->view('js/hero_js');
        $this->load->view('_template/footer');
    }

    public function ajax_list()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $list =  $this->hero_m->get_list_hero();
            $data = array();
            foreach ($list as $dd) {

                // $data[] = '<li class="list-group-item align-items-center drag-handle">
                //                 <span class="drag-indicator"></span>
                //                 <div>
                //                     <h2 class="section-title"> ' . $dd->judul . ' </h2>
                //                     ' . $dd->deskripsi . '
                //                 </div>
                //                 <div class="btn-group ml-auto">
                //                     <button class="btn btn-sm btn-secondary" onclick="edit(' . "'" . $dd->id_hero . "'" . ')" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Edit">Edit</button>
                //                     <button class="btn btn-sm btn-secondary text-red" onclick="delete_data(' . "'" . $dd->id_hero . "'" . ')" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Hapus"><i class="far fa-trash-alt"></i></button>
                //                 </div>
                //             </li>';
                $data[] = '<li class="list-group-item align-items-center drag-handle">
                                <div class="list-group-item-figure">
                                    <a href="data:' . $dd->type . ';base64,' . $dd->image . '" class="user-avatar user-avatar-xl"><img src="data:' . $dd->type . ';base64,' . $dd->image . '" alt=""></a>
                                </div>
                                <div class="list-group-item-body">
                                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                        <div class="team">
                                            <h4 class="list-group-item-title">
                                                <a href="page-team.html">' . $dd->judul . ' </a>
                                            </h4>
                                            <p class="list-group-item-text">' . $dd->deskripsi . '</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group ml-auto">
                                    <button class="btn btn-sm btn-secondary" onclick="edit(' . "'" . $dd->id_hero . "'" . ')" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Edit">Edit</button>
                                </div>
                            </li>';
            }
            echo json_encode($data);
        }
    }

    public function ajax_add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['overwrite'] = true;
            $config['max_size'] = 3024; // 1MB

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                $insert['status'] = '01';
                $insert['type'] = 'error';
                $insert['mess'] = 'Gagal Upload Gambar !<br> Gambar tidak boleh lebih dari <b>3 MB</b> !';
                echo json_encode($insert);
            } else {
                $image_data = $this->upload->data();
                $imgdata = file_get_contents($image_data['full_path']);
                $file_encode = base64_encode($imgdata);

                $data = array(
                    'judul' => $this->input->post('judul'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'urutan' => $this->input->post('urutan'),
                    'image' => $file_encode,
                    'type' => $image_data['file_type'],
                );
                // hapus file fisik
                unlink($image_data['full_path']);

                $insert = $this->hero_m->save($data);
                echo json_encode($insert);
            }
        }
    }

    public function ajax_update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (!empty($_FILES["image"]["name"])) {

                $config['upload_path'] = './assets/uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = true;
                $config['max_size'] = 1024; // 1MB

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('image')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                } else {
                    $image_data = $this->upload->data();
                    $imgdata = file_get_contents($image_data['full_path']);
                    $file_encode = base64_encode($imgdata);
                    unlink($image_data['full_path']);
                    $data = array(
                        'judul' => $this->input->post('judul'),
                        'deskripsi' => $this->input->post('deskripsi'),
                        'urutan' => $this->input->post('urutan'),
                        'image' => $file_encode,
                        'type' => $image_data['file_type'],
                    );
                }
            } else {
                $data = array(
                    'judul' => $this->input->post('judul'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'urutan' => $this->input->post('urutan'),
                    'image' => $this->input->post('old_image'),
                    'type' => $this->input->post('old_type'),
                );
            }

            $update = $this->hero_m->update(array('id_hero' => $this->input->post('id_hero')), $data);
            echo json_encode($update);
        }
    }

    public function ajax_delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo $this->hero_m->delete_by_id($id);
        }
    }

    public function ajax_edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $data = $this->hero_m->get_by_id($id);
            echo json_encode($data);
        }
    }
}
