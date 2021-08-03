<?php
class M_user extends CI_Model
{

    public function getUserAll()
    {
        $result =  $this->db->get('user')->result_array();
        return $result;
    }

    public function dataUserById($id)
    {
        $result = $this->db->get_where('user', array('id_user' => $id))->row_array();
        return $result;
    }

    public function delete($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
        $result = $this->db->affected_rows();
        return $result;
    }

    public function jmlUser()
    {
        return $this->db->get('user')->num_rows();
    }

    public function cekUser($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('user')->row_array();
    }
}
