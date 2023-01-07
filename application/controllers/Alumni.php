<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Alumni_model', 'alumni');
    }

    public function index(){
        $data['judul'] = 'Halaman Data Alumni';

        $data['alumni'] = $this->alumni->getAllAlumni();
        if ( $this->input->post('submit') ) {
            $data['alumni'] = $this->alumni->cariAlumni();
        }else {
            $data['alumni'] = $this->alumni->getAllAlumni();
        }

        $this->load->view('templates_home/header', $data);
        $this->load->view('alumni/index.php');
        $this->load->view('templates_home/footer');
    }
}