<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeaParty extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('TeaParty_model');
    }

    public function index(){

        $data['title'] = $this->TeaParty_model->getTitle();

        $this->load->view('teaparty_home', $data);
    }

    public function form(){

        $this->load->view('teaparty_form');
    }

    public function welcome(){

        $data['nama'] = $this->input->post('nama');
        $data['umur'] = $this->input->post('umur');
        $data['asal'] = $this->input->post('asal');
        $data['hobby'] = $this->input->post('hobby');

        $this->load->view('teaparty_welcome', $data);
    }
}
?>