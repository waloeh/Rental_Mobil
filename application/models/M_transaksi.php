<?php
class M_transaksi extends CI_Model
{
    public function getDataTransaksi()
    {
        return $this->db->get('transaksi')->result_array();
    }

    public function getTransaksiById($id)
    {
        $query = "SELECT * FROM `transaksi` INNER JOIN kendaraan ON transaksi.id_kendaraan = kendaraan.id_kendaraan INNER JOIN driver ON transaksi.id_driver = driver.id_driver INNER JOIN kernek ON transaksi.id_kernek = kernek.id_kernek WHERE transaksi.id_transaksi = $id";
        return $this->db->query($query)->row_array();
    }

    public function delete($id)
    {
        $this->db->where('id_transaksi', $id);
        $this->db->delete('transaksi');
        return $this->db->affected_rows();
    }

    public function transaksiLunas()
    {
        $this->db->where('status', 1);
        return $this->db->get('transaksi')->result_array();
    }

    public function transaksiBelumLunas()
    {
        $this->db->where('status', 0);
        return $this->db->get('transaksi')->result_array();
    }

    public function generateKode()
    {
        $query = "SELECT  MAX(id_transaksi) as code FROM transaksi";
        return $this->db->query($query)->row_array();
    }

    public function cek()
    {
        $query = "SELECT COUNT(id_pemasukan) as ceking FROM pemasukan WHERE id_transaksi = '31' AND pelunasan != 0";
        return $this->db->query($query)->row_array();
    }

    public function jmlTransaksi()
    {
        return $this->db->get('user')->num_rows();
    }
}
