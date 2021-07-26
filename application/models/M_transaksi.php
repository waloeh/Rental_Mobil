<?php
class M_transaksi extends CI_Model
{
    public function getDataTransaksi()
    {
        return $this->db->get('transaksi')->result_array();
    }
}
