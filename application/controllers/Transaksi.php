<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');

        // if ($this->session->userdata("jabatan") != 'Admin' && $this->session->userdata('jabatan') != 'Petugas') {
        //     redirect('access_denied');
        // }
    }
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

    public function getDataTransaksiLunas()
    {
        $dataTransaksi = $this->M_transaksi->transaksiLunas();
        $output = array(
            "message" => "success",
            "data" => $dataTransaksi
        );
        echo json_encode($output);
    }

    public function getDataTransaksiBelumLunas()
    {
        $dataTransaksi = $this->M_transaksi->transaksiBelumLunas();
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
        $this->form_validation->set_rules('jml_bus', 'Jumlah Bus', 'required');
        $this->form_validation->set_rules('tgl_berangkat', 'Tangal berangkat', 'required');
        $this->form_validation->set_rules('jam', 'Jam berangkat', 'required');
        $this->form_validation->set_rules('tgl_kembali', 'Tangal kembali', 'required');
        $this->form_validation->set_rules('alamat_kirim', 'Almat kirim', 'required');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
        $this->form_validation->set_rules('total_harga', 'Total harga', 'required');
        $this->form_validation->set_rules('uang_muka', 'Uang muka', 'required');
        // $this->form_validation->set_rules('komisi_driver', 'Komisi driver', 'required');
        // $this->form_validation->set_rules('komisi_kernek', 'Komisi kernek', 'required');
        // $this->form_validation->set_rules('uang_jalan', 'Uang jalan', 'required');
        $this->form_validation->set_rules('driver', 'Nama driver', 'required');
        $this->form_validation->set_rules('kernek', 'Nama Kernek', 'required');
        // $this->form_validation->set_rules('kendaraan', 'Nama kendaraan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('transaksi/v_tambah', $data);
            $this->load->view('layout/footer');
        } else {
            $total_harga = trim(htmlspecialchars($this->input->post('total_harga')));
            $uang_muka = trim(htmlspecialchars($this->input->post('uang_muka')));
            $sisa_pembayaran = $total_harga - $uang_muka;
            if ($total_harga == $uang_muka) {
                $status = 1;
            } else {
                $status = 0;
            }
            //generate id_pelanggan
            if (trim(htmlspecialchars($this->input->post('id_pelanggan'))) == "") {
                $code = $this->M_transaksi->generateKode();
                $id = implode(" ", $code);
                $id = intval($id);
                $id++;
                $id = "KOSUB" . sprintf("%06s", $id); //tambahkan angka nol ketika id sudak lebih dari 6 digit
            } else {
                $id = trim(htmlspecialchars($this->input->post('id_pelanggan')));
            }
            $this->db->insert('transaksi', array(
                'tgl_transaksi' => date('d-m-Y H:i:s'),
                'nama_pemesan' => trim(htmlspecialchars($this->input->post('nama'))),
                'alamat' => trim(htmlspecialchars($this->input->post('alamat_pelanggan'))),
                'no_tlp' => trim(htmlspecialchars($this->input->post('no_tlp'))),
                'keperluan' => trim(htmlspecialchars($this->input->post('keperluan'))),
                'jml_bus' => trim(htmlspecialchars($this->input->post('jml_bus'))),
                'bus_dikirim' => trim(htmlspecialchars($this->input->post('alamat_kirim'))),
                'tempat_tujuan' => trim(htmlspecialchars($this->input->post('tujuan'))),
                'jam' => trim(htmlspecialchars($this->input->post('jam'))),
                'tgl_berangkat' => trim(htmlspecialchars($this->input->post('tgl_berangkat'))),
                'tgl_kembali' => trim(htmlspecialchars($this->input->post('tgl_kembali'))),
                'total_harga' => $total_harga,
                'uang_muka' => $uang_muka,
                'sisa_pembayaran' => $sisa_pembayaran,
                'komisi_driver' => trim(htmlspecialchars($this->input->post('komisi_driver'))),
                'komisi_kernek' => trim(htmlspecialchars($this->input->post('komisi_kernek'))),
                'uang_jalan' => trim(htmlspecialchars($this->input->post('komisi_kernek'))),
                'id_driver' => $this->input->post('driver'),
                'nama_kernek' => $this->input->post('kernek'),
                'id_kendaraan' => $this->input->post('kendaraan'),
                'status' => $status,
                'id_pelanggan' => $id
                // 'id_user' => $this->session->user_data('id_user')
            ));
            $kode = $this->M_transaksi->generateKode();
            $ID = implode(" ", $kode);
            $ID = intval($ID);
            $this->db->insert('pemasukan', array(
                'tgl_input' => date('Y-m-d'),
                'id_transaksi' => $ID,
                'uang_muka' => $uang_muka,
                'id_pelanggan' => $id
            ));
            //toas
            redirect('transaksi');
        }
    }

    public function edit($id)
    {

        $data['ceking'] = $this->M_transaksi->cek();
        $data['title'] = 'Edit Data Transaksi';
        $data['dataTransaksi'] = $this->M_transaksi->getTransaksiById($id);
        $data['driver'] = $this->M_driver->driverFree();
        $data['kendaraan'] = $this->M_kendaraan->kendaraanFree();
        $this->form_validation->set_rules('nama', 'Nama Pelangan', 'required');
        $this->form_validation->set_rules('alamat_pelanggan', 'Alamat Pelangan', 'required');
        $this->form_validation->set_rules('no_tlp', 'No. Telpon', 'required');
        $this->form_validation->set_rules('keperluan', 'Kepreluan', 'required');
        $this->form_validation->set_rules('jml_bus', 'Jumlah Bus', 'required');
        $this->form_validation->set_rules('tgl_berangkat', 'Tangal berangkat', 'required');
        $this->form_validation->set_rules('jam', 'Jama Berangkat', 'required');
        $this->form_validation->set_rules('tgl_kembali', 'Tangal kembali', 'required');
        $this->form_validation->set_rules('alamat_kirim', 'Almat kirim', 'required');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
        $this->form_validation->set_rules('total_harga', 'Total harga', 'required');
        $this->form_validation->set_rules('uang_muka', 'Uang muka', 'required');
        // $this->form_validation->set_rules('komisi_driver', 'Komisi driver', 'required');
        // $this->form_validation->set_rules('komisi_kernek', 'Komisi kernek', 'required');
        // $this->form_validation->set_rules('uang_jalan', 'Uang jalan', 'required');
        $this->form_validation->set_rules('driver', 'Nama driver', 'required');
        $this->form_validation->set_rules('kernek', 'Nama Kernek', 'required');
        // $this->form_validation->set_rules('kendaraan', 'Nama kendaraan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('transaksi/v_edit', $data);
            $this->load->view('layout/footer');
        } else {
            $total_harga = trim(htmlspecialchars($this->input->post('total_harga')));
            $uang_muka = trim(htmlspecialchars($this->input->post('uang_muka')));
            $pelunasan = trim(htmlspecialchars($this->input->post('pelunasan')));
            $sisa_pembayaran = $total_harga - $uang_muka;
            if ($total_harga == $uang_muka || $sisa_pembayaran == $pelunasan) {
                $status = 1;
            } else {
                $status = 0;
            }
            $query = "UPDATE pemasukan SET uang_muka='$uang_muka' WHERE id_transaksi = '$id' AND pelunasan = 0 ";
            $this->db->query($query);
            if ($pelunasan == $sisa_pembayaran) {
                $sisa_pembayaran = 0;
                $query = "SELECT COUNT(id_pemasukan) as ceking FROM pemasukan WHERE id_transaksi = '$id' AND pelunasan != 0";
                $statusCeking = $this->db->query($query)->row_array();
                if ($statusCeking['ceking'] == 1) {
                    $query = "UPDATE pemasukan SET pelunasan = $pelunasan WHERE id_transaksi = '$id' AND pelunasan != 0";
                    $this->db->query($query);
                } else {
                    $this->db->insert('pemasukan', array(
                        'tgl_input' => date('Y-m-d'),
                        'id_transaksi' => $id,
                        'pelunasan' => $pelunasan,
                        'id_pelanggan' => $data['dataTransaksi']['id_pelanggan']
                    ));
                }
            } else {
                $query = "UPDATE pemasukan SET pelunasan = $pelunasan WHERE id_transaksi = '$id' AND uang_muka = 0";
                $this->db->query($query);
            }
            //delete field yang kosong
            $this->db->where('id_transaksi', $id);
            $this->db->where('pelunasan', 0);
            $this->db->where('uang_muka', 0);
            $this->db->delete('pemasukan');
            //update transaksi
            $this->db->where('id_transaksi', $id);
            $this->db->update('transaksi', array(
                'nama_pemesan' => trim(htmlspecialchars($this->input->post('nama'))),
                'alamat' => trim(htmlspecialchars($this->input->post('alamat_pelanggan'))),
                'no_tlp' => trim(htmlspecialchars($this->input->post('no_tlp'))),
                'keperluan' => trim(htmlspecialchars($this->input->post('keperluan'))),
                'jml_bus' => trim(htmlspecialchars($this->input->post('jml_bus'))),
                'bus_dikirim' => trim(htmlspecialchars($this->input->post('alamat_kirim'))),
                'tempat_tujuan' => trim(htmlspecialchars($this->input->post('tujuan'))),
                'tgl_berangkat' => trim(htmlspecialchars($this->input->post('tgl_berangkat'))),
                'jam' => trim(htmlspecialchars($this->input->post('jam'))),
                'tgl_kembali' => trim(htmlspecialchars($this->input->post('tgl_kembali'))),
                'total_harga' => $total_harga,
                'uang_muka' => $uang_muka,
                'sisa_pembayaran' => $sisa_pembayaran,
                'komisi_driver' => trim(htmlspecialchars($this->input->post('komisi_driver'))),
                'komisi_kernek' => trim(htmlspecialchars($this->input->post('komisi_kernek'))),
                'pelunasan' => $pelunasan,
                'uang_jalan' => trim(htmlspecialchars($this->input->post('uang_jalan'))),
                'id_driver' => $this->input->post('driver'),
                'nama_kernek' => $this->input->post('kernek'),
                'id_kendaraan' => $this->input->post('kendaraan'),
                'status' => $status
                // 'id_user' => $this->session->user_data('id_user')
            ));
            $this->session->set_flashdata('flash',  'diubah');
            redirect('transaksi');
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Data Transaksi';
        $data['dataTransaksi'] = $this->M_transaksi->getTransaksiById($id);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('transaksi/v_detail', $data);
        $this->load->view('layout/footer');
    }

    public function hapus($id)
    {
        $result = $this->M_transaksi->delete($id);
        if ($result > 0) {
            $this->db->where('id_transaksi', $id);
            $this->db->delete('pemasukan');
            $this->session->set_flashdata('flash',  'dihapus');
            redirect('transaksi');
        } else {
            $this->session->set_flashdata('flash',  'dihapus');
            redirect('transaksi');
        }
    }

    public function Cetak($id)
    {
        $data['title'] = 'Bukti Pembaya';
        $data['dataTransaksi'] = $this->M_transaksi->getTransaksiById($id);
        $this->load->view('laporan/v_cetakInvoice', $data);
    }
}
