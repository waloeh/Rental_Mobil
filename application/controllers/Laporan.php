<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Laporan extends CI_Controller
{
    public function pemasukan()
    {
        $data['awal'] = $this->input->post('awal');
        $data['akhir'] = $this->input->post('tanggal_akhir');
        $data['title'] = "Laporan Pemasukan";
        $data['pengeluaran'] = $this->M_laporan->pemasukan();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('laporan/v_laporan', $data);
        $this->load->view('layout/footer');
    }
}
