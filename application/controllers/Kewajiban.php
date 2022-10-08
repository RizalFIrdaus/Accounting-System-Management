<?php

class Kewajiban extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_jurnal');
    }

    public function index()
    {
        $data['member'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['aktiva'] = $this->Model_jurnal->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('bukubesar/kewajiban/index', $data);
        $this->load->view('templates/footer');
    }
}
