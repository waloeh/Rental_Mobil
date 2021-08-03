<?php
class M_laporan extends CI_Model
{
    public function dataPemasukan($awal, $akhir)
    {
        if ($awal == '' && $akhir == '') {
            $query = "SELECT transaksi.id_pelanggan, transaksi.nama_pemesan, transaksi.tgl_berangkat, transaksi.tempat_tujuan, pemasukan.tgl_input, pemasukan.uang_muka, pemasukan.pelunasan FROM pemasukan INNER JOIN transaksi ON transaksi.id_transaksi=pemasukan.id_transaksi";
        } else {
            $query = "SELECT transaksi.id_pelanggan, transaksi.nama_pemesan, transaksi.tgl_berangkat, transaksi.tempat_tujuan, pemasukan.tgl_input, pemasukan.uang_muka, pemasukan.pelunasan FROM pemasukan INNER JOIN transaksi ON transaksi.id_transaksi=pemasukan.id_transaksi WHERE pemasukan.tgl_input BETWEEN '$awal' AND '$akhir' ORDER BY pemasukan.tgl_input ASC";
        }
        $result = $this->db->query($query)->result_array();
        return $result;
    }

    public function jmlPemasukan($awal, $akhir)
    {
        $query = "SELECT SUM(uang_muka) + SUM(pelunasan) as total FROM pemasukan WHERE tgl_input BETWEEN '$awal' AND '$akhir' ORDER BY tgl_input ASC";
        return $this->db->query($query)->result();
    }

    public function jmlPengeluaran($awal, $akhir)
    {
        $query = "SELECT SUM(nominal) as total FROM pengeluaran WHERE tgl_input BETWEEN '$awal' AND '$akhir' ORDER BY tgl_input ASC";
        return $this->db->query($query)->result();
    }

    public function dataPengeluaran($awal, $akhir)
    {
        if ($awal == '' && $akhir == '') {
            $query = "SELECT * FROM pengeluaran";
        } else {
            $query = "SELECT * FROM pengeluaran WHERE tgl_input BETWEEN '$awal' AND '$akhir' ORDER BY tgl_input ASC";
        }
        return $this->db->query($query)->result_array();
    }

    public function jumlahPengeluaran($awal, $akhir)
    {
        $query = "SELECT SUM(nominal) as total FROM pengeluaran WHERE tgl_input BETWEEN '$awal' AND '$akhir' ORDER BY tgl_input ASC";
        return $this->db->query($query)->result();
    }

    public function tambahPengeluaran($data)
    {
        $this->db->insert('pengeluaran', $data);
        $this->db->affected_rows();
    }

    public function pengeluaranById($id)
    {
        $this->db->where('id_pengeluaran', $id);
        return $this->db->get('pengeluaran')->row_array();
    }

    public function editPengeluaran($id, $data)
    {
        $this->db->where('id_pengeluaran', $id);
        $this->db->update('pengeluaran', $data);
        $this->db->affected_rows();
    }

    //hapus pengeluaran
    public function delete($id)
    {
        $this->db->where('id_pengeluaran', $id);
        $this->db->delete('pengeluaran');
        $this->db->affected_rows();
    }

    public function dataJadwal($tgl)
    {
        if ($tgl == '') {
            $query = 'SELECT id_transaksi, id_pelanggan, no_polisi, nama_pemesan, jam, tempat_tujuan, no_tlp, bus_dikirim, tgl_berangkat, nama_driver, sheet FROM transaksi INNER JOIN kendaraan ON transaksi.id_kendaraan = kendaraan.id_kendaraan INNER JOIN driver ON driver.id_driver = transaksi.id_driver WHERE transaksi.status = 0';
        } else {
            $query = "SELECT id_transaksi, id_pelanggan, no_polisi, nama_pemesan, jam, tempat_tujuan, no_tlp, bus_dikirim, tgl_berangkat, nama_driver, sheet FROM transaksi INNER JOIN kendaraan ON transaksi.id_kendaraan = kendaraan.id_kendaraan INNER JOIN driver ON driver.id_driver = transaksi.id_driver WHERE transaksi.status = 0 AND tgl_berangkat = '$tgl'";
        }
        return $this->db->query($query)->result_array();
    }

    public function dataSuratTugas($id)
    {
        $query = "SELECT no_polisi, bus_dikirim, nama_driver, nama_kernek, nama_pemesan, tempat_tujuan, tgl_berangkat, tgl_kembali, sisa_pembayaran FROM transaksi INNER JOIN kendaraan ON transaksi.id_kendaraan = kendaraan.id_kendaraan INNER JOIN driver ON transaksi.id_driver = driver.id_driver WHERE id_transaksi = '$id'";
        return $this->db->query($query)->row_array();
    }

    public function pemasukanHariIni($tgl)
    {
        $query = "SELECT SUM(uang_muka) + SUM(pelunasan) as total FROM pemasukan WHERE tgl_input = '$tgl'";
        $result = $this->db->query($query)->row_array();
        return $result['total'];
    }

    public function pengeluaranHariIni($tgl)
    {
        $query = "SELECT SUM(nominal) as total FROM pengeluaran WHERE tgl_input = '$tgl'";
        $result = $this->db->query($query)->row_array();
        return $result['total'];
    }
}
