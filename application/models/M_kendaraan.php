<?php
class M_kendaraan extends CI_Model
{
    public function getKendaraanAll()
    {
        $result = $this->db->get('kendaraan')->result_array();
        return $result;
    }

    public function getKendaraanById($id)
    {
        $this->db->where('id_kendaraan', $id);
        $result = $this->db->get('kendaraan')->row_array();
        return $result;
    }

    public function editKendaraan($id, $data)
    {
        $this->db->where('id_kendaraan', $id);
        $this->db->update('kendaraan', $data);
        return $this->db->affected_rows();
    }

    public function kendaraanFree()
    {
        $this->db->where('status', 'siap');
        return $this->db->get('kendaraan')->result_array();
    }
}
