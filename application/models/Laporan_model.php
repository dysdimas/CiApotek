<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_model extends CI_Model
{

    public function get_rinstock()
    {
        $query = $this->db->get('stock_in');
        return $query->result_array();
    }

    public function get_routstock()
    {
        $query = $this->db->get('stock_out');
        return $query->result_array();
    }

    public function get_rsales()
    {
        $query = $this->db->get('sales_report');
        return $query->result_array();
    }

    public function get_rstock()
    {
        $query = $this->db->get('stock');
        return $query->result_array();
    }

    public function editcetak()
    {
        $query = $this->db->get('kwitansi');
        return $query->result_array();
    }
}
