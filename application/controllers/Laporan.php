<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Laporan extends CI_Controller
{
    public function Pemasukan()
    {
        $data['awal'] = $this->input->post('awal');
        $data['akhir'] = $this->input->post('tanggal_akhir');
        $data['title'] = "Laporan Pemasukan";
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('laporan/v_pemasukan', $data);
        $this->load->view('layout/footer');
    }

    public function getDataPemasukan($awal = '', $akhir = '')
    {
        $dataPemasukan = $this->M_laporan->dataPemasukan($awal, $akhir);
        $output = array(
            "message" => "success",
            "data" => $dataPemasukan,
        );
        echo json_encode($output);
    }

    public function cetak()
    {
        $awal = $this->input->post('awal');
        $akhir = $this->input->post('akhir');
        $data['title'] = 'Data Laporan Pemasukan';
        $data['sub_title'] = tanggal($awal) . ' / ' . tanggal($akhir);
        $data['dataPemasukan'] = $this->M_laporan->dataPemasukan($awal, $akhir);
        $data['jmlPemasukan'] = $this->M_laporan->jmlPemasukan($awal, $akhir);
        $data['jmlPengeluaran'] = $this->M_laporan->jmlPengeluaran($awal, $akhir);
        $data['saldo'] = $data['jmlPemasukan'][0]->total - $data['jmlPengeluaran'][0]->total;
        $this->load->view('laporan/v_cetakpemasukan', $data);
    }

    public function cetakPengeluaran()
    {
        $awal = $this->input->post('awal-keluar');
        $akhir = $this->input->post('akhir-keluar');
        $data['title'] = 'Data Laporan Pengeluaran';
        $data['sub_title'] = tanggal($awal) . ' / ' . tanggal($akhir);
        $data['dataPengeluaran'] = $this->M_laporan->dataPengeluaran($awal, $akhir);
        $data['jmlPengeluaran'] = $this->M_laporan->jumlahPengeluaran($awal, $akhir);
        $this->load->view('laporan/v_cetakpengeluaran', $data);
    }

    public function Pengeluaran()
    {
        $data['title'] = "Laporan Pengeluaran";
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('laporan/v_pengeluaran', $data);
        $this->load->view('layout/footer');
    }

    public function getDataPengeluaran($awal = '', $akhir = '')
    {
        $dataPengeluaran = $this->M_laporan->dataPengeluaran($awal, $akhir);
        $output = array(
            "message" => "success",
            "data" => $dataPengeluaran,
        );
        echo json_encode($output);
    }

    public function tambahPengeluaran()
    {
        $data = array(
            'tgl_input' => date('Y-m-d'),
            'keterangan' => trim(htmlspecialchars($this->input->post('deskripsi'))),
            'nominal' => trim(htmlspecialchars($this->input->post('nominal')))
            //id user
        );
        $result = $this->M_laporan->tambahPengeluaran($data);
        if ($result > 0) {
            $this->session->set_flashdata('flash', 'gagal ditambah');
            redirect('laporan/pengeluaran');
        } else {
            $this->session->set_flashdata('flash', 'ditambah');
            redirect('laporan/pengeluaran');
        }
    }

    public function dataPengeluranById($id)
    {
        $dataPengeluaran = $this->M_laporan->pengeluaranById($id);
        $output = array(
            "message" => "success",
            "data" => $dataPengeluaran,
        );
        echo json_encode($output);
    }

    public function editPengeluaran()
    {
        $id = $this->input->post('id');
        $data = array(
            'keterangan' => trim(htmlspecialchars($this->input->post('deskripsi'))),
            'nominal' => trim(htmlspecialchars($this->input->post('nominal')))
        );
        $result =  $this->M_laporan->editPengeluaran($id, $data);
        if ($result > 0) {
            $this->session->set_flashdata('flash', 'gagal diubah');
            redirect('laporan/pengeluaran');
        } else {
            $this->session->set_flashdata('flash', 'diubah');
            redirect('laporan/pengeluaran');
        }
    }

    //hapus data pengeluaran
    public function hapus($id)
    {
        $result = $this->M_laporan->delete($id);
        if ($result > 0) {
            $this->session->set_flashdata('flash', 'gagal dihapus');
            redirect('laporan/pengeluaran');
        } else {
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('laporan/pengeluaran');
        }
    }

    public function jadwal()
    {
        $data['title'] = ' Jadwal Keberangkatan';
        $data['sub-title'] = '';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('laporan/v_jadwal', $data);
        $this->load->view('layout/footer');
    }

    public function getDataJadwal()
    {
        $tgl = '';
        $dataJadwal = $this->M_laporan->dataJadwal($tgl);
        $output = array(
            "message" => "success",
            "data" => $dataJadwal
        );
        echo json_encode($output);
    }

    public function getDataJadwalById($tgl)
    {
        $dataJadwal = $this->M_laporan->dataJadwal($tgl);
        $output = array(
            "message" => "success",
            "data" => $dataJadwal
        );
        echo json_encode($output);
    }

    public function cetakJadwal()
    {
        $tgl = trim(htmlspecialchars($this->input->post('tgl_berangkat')));
        $data['title'] = 'JADWAL PEMBERANGKATAN BUS PARIWISATA';
        $data['hari'] = hari($tgl);
        $data['tanggal'] = tanggal($tgl);
        $data['dataJadwal'] = $this->M_laporan->dataJadwal($tgl);
        $this->load->view('laporan/v_cetakjadwal', $data);
    }

    public function Cetaksurattugas($id)
    {
        $data['title'] = 'SURAT TUGAS ANGKUTAN BUS PARIWISATA';
        $data['dataSuratTugas'] = $this->M_laporan->dataSuratTugas($id);
        $this->load->view('laporan/v_cetaksurattugas', $data);
    }

    public function uangjalan()
    {
        $data['title'] = 'Komisi Uang Jalan';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('laporan/v_komisiuangjalan', $data);
        $this->load->view('layout/footer');
    }
}
