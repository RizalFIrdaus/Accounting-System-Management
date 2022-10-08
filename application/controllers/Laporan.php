<?php

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_jurnal');
    }

    public function index()
    {

        $data['member'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['Lpendapatan'] = $this->session->userdata('pendapatan');
        $data['LBperlengkapan'] = $this->session->userdata('Bperlengkapan');
        $data['LBgaji'] = $this->session->userdata('Bgaji');
        $data['LBsewa'] = $this->session->userdata('Bsewa');
        $data['LBlistrik'] = $this->session->userdata('Blistrik');
        $data['LBtelepon'] = $this->session->userdata('Btelepon');
        $data['LBair'] = $this->session->userdata('Bair');
        $data['LBpenyusutan'] = $this->session->userdata('Bpenyusutan');
        $data['LBrupa'] = $this->session->userdata('Brupa');
        $data['Lmodal'] = $this->session->userdata('modal');
        $data['Lprive'] = $this->session->userdata('prive');
        $data['Lhutang'] = $this->session->userdata('hutang');
        $data['Lkas'] = $this->session->userdata('kas');
        $data['Lpiutang'] = $this->session->userdata('piutang');
        $data['Lperlengkapan'] = $this->session->userdata('perlengkapan');
        $data['Lsewadibayardimuka'] = $this->session->userdata('sewadibayardimuka');
        $data['Lperalatan'] = $this->session->userdata('peralatan');
        $data['Lakumulasi'] = $this->session->userdata('akumulasi');
        $data['laporan'] = $this->Model_jurnal->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');
    }
}
