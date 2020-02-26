<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kasir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model');
    }

    public function index()
    {
        $data['title'] = 'My Profil';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kasir/index', $data);
        $this->load->view('templates/footer');
    }

    public function sale()
    {
        $data['title'] = 'Sale Medicine';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['stock'] = $this->db->get('stock')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kasir/sale', $data);
        $this->load->view('templates/footer');
    }

    public function stockid($id)
    {
        $data['title'] = 'Drop Stock';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['stock'] = $this->Menu_model->getStockById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kasir/salestock', $data);
        $this->load->view('templates/footer');
    }

    public function rsales()
    {
        $data['title'] = 'Report of Item';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rsale'] = $this->db->get('sales_report')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kasir/rsales', $data);
        $this->load->view('templates/footer');
    }

    public function updatesale($id)
    {
        $data['title'] = 'Update Sale';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data1 = [
            'medicine_id' => $this->input->post('medicine_id'),
            'medicine_name' => $this->input->post('medicine_name'),
            'medicine_type' => $this->input->post('medicine_type'),
            'medicine_qty' => $this->input->post('tmedicine_qty'),
            'price' => $this->input->post('price'),
            'total' => $this->input->post('total')
        ];


        $this->db->where('id', $this->input->post('id'));
        $this->db->update('stock', $data1);
        $data2 = [
            'medicine_id' => $this->input->post('medicine_id', true),
            'transaction_id' => $this->input->post('transaction_id', true),
            'date_transaction' => $this->input->post('date_stock'),
            'medicine_name' => $this->input->post('medicine_name', true),
            'medicine_type' => $this->input->post('medicine_type', true),
            'medicine_qty' => $this->input->post('minmedicine_qty'),
            'price' => $this->input->post('price'),
            'total' => $this->input->post('total')
        ];


        $this->db->insert('sales_report', $data2);

        $data3 = [
            'medicine_id' => $this->input->post('medicine_id', true),
            'transaction_id' => $this->input->post('transaction_id', true),
            'date_stock' => $this->input->post('date_stock'),
            'medicine_name' => $this->input->post('medicine_name', true),
            'medicine_type' => $this->input->post('medicine_type', true),
            'medicine_qty' => $this->input->post('minmedicine_qty'),
            'price' => $this->input->post('price'),
            'total' => $this->input->post('total')
        ];


        $this->db->insert('stock_out', $data3);
        redirect('kasir/rsales');
    }

    public function stockidi($id)
    {
        $data['title'] = 'Drop Stock';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['stock'] = $this->Menu_model->getStockByIdi($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kasir/cetakedit', $data);
        $this->load->view('templates/footer');
    }
}
