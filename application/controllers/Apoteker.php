<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Apoteker extends CI_Controller
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
        $this->load->view('apoteker/index', $data);
        $this->load->view('templates/footer');
    }

    public function stock()
    {
        $data['title'] = 'Stock of Item';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['stock'] = $this->db->get('stock')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('apoteker/stock', $data);
        $this->load->view('templates/footer');
    }

    public function rinstock()
    {
        $data['title'] = 'Report of Item';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rinstock'] = $this->db->get('stock_in')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('apoteker/rinstock', $data);
        $this->load->view('templates/footer');
    }

    public function routstock()
    {
        $data['title'] = 'Report of Item';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['routstock'] = $this->db->get('stock_out')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('apoteker/routstock', $data);
        $this->load->view('templates/footer');
    }

    public function addstock($total)
    {
        $data['title'] = 'Add Stock';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data = [
            'medicine_id' => $this->input->post('medicine_id'),
            'transaction_id' => $this->input->post('transaction_id'),
            'date_stock' => $this->input->post('date_stock'),
            'medicine_name' => $this->input->post('medicine_name'),
            'medicine_type' => $this->input->post('medicine_type'),
            'medicine_qty' => $this->input->post('medicine_qty'),
            'price' => $this->input->post('price'),
            'total' => $this->input->post('total')
        ];

        $data2 = [
            'medicine_id' => $this->input->post('medicine_id'),
            'transaction_id' => $this->input->post('transaction_id'),
            'date_stock' => $this->input->post('date_stock'),
            'medicine_name' => $this->input->post('medicine_name'),
            'medicine_type' => $this->input->post('medicine_type'),
            'medicine_qty' => $this->input->post('medicine_qty'),
            'price' => $this->input->post('price'),
            'total' => $this->input->post('total')
        ];


        $this->db->insert('stock', $data);
        $this->db->insert('stock_in', $data2);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Stock is updated!
          </div>');
        redirect('apoteker/stock');
    }

    public function stockid($id)
    {
        $data['title'] = 'Drop Stock';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['stock'] = $this->Menu_model->getStockById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('apoteker/editstock', $data);
        $this->load->view('templates/footer');
    }

    public function dropstock()
    {
        $data['title'] = 'Drop Stock';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data1 = [
            'medicine_id' => $this->input->post('medicine_id'),
            'transaction_id' => $this->input->post('transaction_id'),
            'date_stock' => $this->input->post('date_stock'),
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
            'date_stock' => $this->input->post('date_stock'),
            'medicine_name' => $this->input->post('medicine_name', true),
            'medicine_type' => $this->input->post('medicine_type', true),
            'medicine_qty' => $this->input->post('minmedicine_qty'),
            'price' => $this->input->post('price'),
            'total' => $this->input->post('total')
        ];


        $this->db->insert('stock_out', $data2);
        redirect('apoteker/stock');
    }
}
