<?php 
    class M_user extends CI_Model {

    public function getDatauserAll() {
        $result =  $this->db->get('user')->result_array();
        return $result;
    }
}

?>