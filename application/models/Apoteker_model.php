<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Apoteker_model extends CI_Model
{
    public function getStockById($id)
    {
        return $this->db->get_where('stock', ['id' => $id])->row_array();
    }
}
