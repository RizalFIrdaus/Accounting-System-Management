<?php

class Pendapatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_jurnal');
    }

    public function index()
    {

        $data['pendapatan'] = $this->Model_jurnal->getAll();
        $data['member'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('bukubesar/pendapatan/index', $data);
        $this->load->view('templates/footer');
    }
}
