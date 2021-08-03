<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['tittle'] = "Dashboard";
        $data['dataUser'] = $this->M_user->jmlUser();
        $data['dataDriver'] = $this->M_driver->jmlDriver();
        $data['dataKendaraan'] = $this->M_kendaraan->jmlKendaraan();
        $data['dataTransaksi'] = $this->M_transaksi->jmlTransaksi();
        $data['pemasukan'] = $this->M_laporan->pemasukanHariIni(date('Y-m-d'));
        $data['pengeluaran'] = $this->M_laporan->pengeluaranHariIni(date('Y-m-d'));
        $data['jadwalBerangkat'] = $this->M_laporan->dataJadwal(date('Y-m-d'));
        $data['saldo'] = $data['pemasukan'] - $data['pengeluaran'];
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dashboard/v_dashboard', $data);
        $this->load->view('layout/footer');
    }
}
