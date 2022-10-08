<?php

class Jurnal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_jurnal');
        $this->load->model('Model_akun');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['member'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['debet'] = $this->session->userdata('debet');
        $data['kredit'] = $this->session->userdata('kredit');
        $data['jurnal'] = $this->Model_jurnal->getAll();
        $data['akun'] = $this->Model_akun->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('jurnal/index', $data);
        $this->load->view('templates/footer');
        $this->session->set_flashdata('balence');
    }

    public function tambah()
    {
        $data['member'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['akun'] = $this->Model_akun->getAll();
        $data['debet'] = $this->session->userdata('debet');
        $data['kredit'] = $this->session->userdata('kredit');
        var_dump($data['kredit'] === $data['debet']);
        // die;
        $this->form_validation->set_rules('uraian', 'Uraian', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('ref', 'REF', 'numeric|required');
        $this->form_validation->set_rules('debet', 'Debet', 'numeric');
        $this->form_validation->set_rules('kredit', 'Kredit', 'numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('tambah/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Model_jurnal->tambahDataJurnal();
            redirect('jurnal');
        }
    }
}
