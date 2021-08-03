<?php
class M_driver extends CI_Model
{
    public function getDriverAll()
    {
        $result = $this->db->get('driver')->result_array();
        return $result;
    }

    public function getDataDriverById($id)
    {
        $this->db->where('id_driver', $id);
        $result = $this->db->get('driver')->row_array();
        return $result;
    }

    public function driverFree()
    {
        $this->db->where('status_driver', 1);
        return $this->db->get('driver')->result_array();
    }

    public function jmlDriver()
    {
        return $this->db->get('user')->num_rows();
    }
}
