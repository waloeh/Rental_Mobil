<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Transaksi';
        $data['dataTransaksi'] = $this->M_transaksi->getDataTransaksi();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('transaksi/v_transaksi', $data);
        $this->load->view('layout/footer');
    }

    public function getDataTransaksiAll()
    {
        $dataTransaksi = $this->M_transaksi->getDataTransaksi();
        $output = array(
            "message" => "success",
            "data" => $dataTransaksi
        );
        echo json_encode($output);
    }

    public function tambah()
    {
        $data['title'] = 'Transaksi Baru';
        $data['driver'] = $this->M_driver->driverFree();
        $data['kendaraan'] = $this->M_kendaraan->kendaraanFree();
        $this->form_validation->set_rules('nama', 'Nama Pelangan', 'required');
        $this->form_validation->set_rules('alamat_pelanggan', 'Alamat Pelangan', 'required');
        $this->form_validation->set_rules('no_tlp', 'No. Telpon', 'required');
        $this->form_validation->set_rules('keperluan', 'Kepreluan', 'required');
        $this->form_validation->set_rules('tgl_berangkat', 'Tangal berangkat', 'required');
        $this->form_validation->set_rules('tgl_kembali', 'Tangal kembali', 'required');
        $this->form_validation->set_rules('alamat_kirim', 'Almat kirim', 'required');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
        $this->form_validation->set_rules('total_harga', 'Total harga', 'required');
        $this->form_validation->set_rules('uang_muka', 'Uang muka', 'required');
        $this->form_validation->set_rules('komisi_driver', 'Komisi driver', 'required');
        $this->form_validation->set_rules('komisi_kernek', 'Komisi kernek', 'required');
        $this->form_validation->set_rules('driver', 'Nama driver', 'required');
        $this->form_validation->set_rules('kendaraan', 'Nama kendaraan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('transaksi/v_tambah', $data);
            $this->load->view('layout/footer');
        } else {
            $total_harga = trim(htmlspecialchars($this->input->post('total_harga')));
            $uang_muka = trim(htmlspecialchars($this->input->post('uang_muka')));
            $sisa_pembayaran = $total_harga - $uang_muka;
            $this->db->insert('kendaraan', array(
                'tgl_transaksi' => date("Y-m-d H:i:s"),
                'nama_pemesan' => trim(htmlspecialchars($this->input->post('nama'))),
                'alamat' => trim(htmlspecialchars($this->input->post('alamat_pelanggan'))),
                'keperluan' => trim(htmlspecialchars($this->input->post('keperluan'))),
                'bus_dikirim' => trim(htmlspecialchars($this->input->post('alamat_kirim'))),
                'tempat_tujuan' => trim(htmlspecialchars($this->input->post('tujuan'))),
                'tgl_berangkat' => trim(htmlspecialchars($this->input->post('tgl_berangkat'))),
                'tgl_kembali' => trim(htmlspecialchars($this->input->post('tgl_kembali'))),
                'total_harga' => $total_harga,
                'uang_muka' => $uang_muka,
                'sisa_pembayaran' => $sisa_pembayaran,
                'komisi_driver' => trim(htmlspecialchars($this->input->post('komisi_driver'))),
                'komisi_kernek' => trim(htmlspecialchars($this->input->post('komisi_kernek'))),
                'id_driver' => $this->input->post('driver'),
                'id_kendaraan' => $this->input->post('kendaraan')
                // 'id_user' => $this->session->user_data('id_user')
            ));
            //toas
            redirect('kendaraan');
        }
    }
}
