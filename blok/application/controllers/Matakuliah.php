<?php
class Matakuliah extends CI_Controller {
    public function index(){
        // load model
        $this->load->model('matakuliah_model');
        $matkul = $this->matakuliah_model->getAll();
        $data['matkul'] = $matkul;
        $this->load->view('layouts/header');
        $this->load->view('Matakuliah/index', $data);
        $this->load->view('layouts/footer');
    }
    public function __constract()
    {
        parent::__constract();
        if(!$this->session->userdata('username')){
            redirect('/login');
        }
    }
}
?>