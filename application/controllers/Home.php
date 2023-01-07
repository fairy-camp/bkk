<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){
        $data['judul'] = 'Beranda';

        $this->load->model('Loker_model', 'loker');

        $data['loker'] = $this->loker->getLoker();

        $this->load->view('templates_home/header', $data);
        $this->load->view('home/index.php');
        $this->load->view('templates_home/footer');
    }
}