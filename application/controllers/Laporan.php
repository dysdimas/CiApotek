<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('Laporan_model');
    }

    public function cetak_rinstok()
    {
        $data['rinstock'] = $this->Laporan_model->get_rinstock();
        $this->load->view('report/rinstock', $data);
    }

    public function cetak_routstock()
    {
        $data['routstock'] = $this->Laporan_model->get_routstock();
        $this->load->view('report/routstock', $data);
    }

    public function cetak_rsales()
    {
        $data['rsale'] = $this->Laporan_model->get_rsales();
        $this->load->view('report/rsales', $data);
    }

    public function cetak_rstock()
    {
        $data['rstock'] = $this->Laporan_model->get_rstock();
        $this->load->view('report/rstock', $data);
    }

    public function cetakedit()
    {
        $data['editcetak'] = $this->Laporan_model->editcetak();
        $this->load->view('report/reditcetak', $data);
    }
}
