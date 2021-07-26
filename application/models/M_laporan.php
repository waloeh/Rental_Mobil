<?php
class M_laporan extends CI_Model
{
    public function pemasukan()
    {
        $this->db->where('status', 'pemasukan');
        $result = $this->db->get('laporan')->result_array();
        return $result;
    }
}
