<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulir extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Formulir';
        $this->load->view('templates_home/header', $data);
        $this->load->view('formulir/index.php');
        $this->load->view('templates_home/footer');
        
    }
    
    public function simpan() {
        $img = $_FILES['image']['name'];

            if ($img) {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '4096';
                $config['upload_path'] = './assets/img/alumni';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                if ($this->input->post('jenkel') == 'Perempuan'){
                    $new_image = 'default2.png';
                } else {
                    $new_image = 'default.jpg'; 
                }
            }
            $data = [
                'nama_alumni' => $this->input->post('nama', true),
                'nik' => $this->input->post('nik', true),
                'jenis_kelamin' => $this->input->post('jenkel', true),
                'alamat' => $this->input->post('alamat', true),
                'jurusan' => $this->input->post('jurusan'),
                'tahun_lulus' => $this->input->post('tahunlulus'),
                'no_telp' => $this->input->post('notelp', true),
                'sosmed' => $this->input->post('email', true),
                'keg_set_lulus' => $this->input->post('kegiatan'),
                'nama_industry' => $this->input->post('namatempat', true),
                'upload_foto' => $new_image,
                'rating_smksa' => $this->input->post('rating'),
                'saran_smksa' => $this->input->post('saran', true),
                'tanggal_daftar' => date("y-m-d")

            ];


            $this->db->insert('alumni', $data);
            
            $nama_alumni = $this->input->post('nama', true);
            // $this->_sendEmail();
            $this->session->set_flashdata('flash', $nama_alumni);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil disimpan<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');

            redirect('formulir');
        
    }
}
