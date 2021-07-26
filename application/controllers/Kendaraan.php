<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kendaraan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Kendaraan';
        $data['Kendaraan'] = $this->M_kendaraan->getKendaraanAll();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('kendaraan/v_kendaraan', $data);
        $this->load->view('layout/footer');
    }

    public function getDataKendaraan()
    {
        $dataKendaraan = $this->M_kendaraan->getKendaraanAll();
        $output = array(
            "message" => "success",
            "data" => $dataKendaraan,
        );
        echo json_encode($output);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Kendaraan';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('no_polisi', 'No Polisi', 'required');
        $this->form_validation->set_rules('harga_sewa', 'Harga Sewa', 'required');
        $this->form_validation->set_rules('tahun_pembuatan', 'Tahun Pembuatan', 'required');
        $this->form_validation->set_rules('ganti_oli', 'Ganti Oli', 'required');
        $this->form_validation->set_rules('ganti_ban', 'Ganti Ban', 'required');
        $this->form_validation->set_rules('tanggal_service', 'Tanggal Service', 'required');
        $this->form_validation->set_rules('pajak', 'Pajak', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar', $data);
            $this->load->view('kendaraan/v_tambah');
            $this->load->view('layout/footer');
        } else {
            $gambar = $_FILES['gambar']['name'];
            if ($gambar) {
                $config['max_size'] = 2048; //2mb
                $config['upload_path'] = './assets/images/kendaraan/';
                $config['allowed_types'] = 'jpg|png|jpeg|pdf';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                } else {
                    $this->toastr->error('Gagal');
                }
            } else {
                $gambar = 'default.png';
            }
            $this->db->insert('kendaraan', array(
                'nama_kendaraan' => trim(htmlspecialchars($this->input->post('nama'))),
                'jenis_kendaraan' => trim(htmlspecialchars($this->input->post('jenis'))),
                'no_polisi' => trim(htmlspecialchars($this->input->post('no_polisi'))),
                'harga_sewa' => trim(htmlspecialchars($this->input->post('harga_sewa'))),
                'tahun_pembuatan' => trim(htmlspecialchars($this->input->post('tahun_pembuatan'))),
                'tgl_ganti_oli' => trim(htmlspecialchars($this->input->post('ganti_oli'))),
                'tgl_ganti_ban' => trim(htmlspecialchars($this->input->post('ganti_ban'))),
                'tgl_service' => trim(htmlspecialchars($this->input->post('tanggal_service'))),
                'tgl_bayar_pajak' => trim(htmlspecialchars($this->input->post('pajak'))),
                'status' => 'siap',
                'gambar' => $gambar
            ));
            $this->toastr->success('Berhasil');
            redirect('Kendaraan');
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data Kendaraan';
        $data['dataKendaraan'] = $this->M_kendaraan->getKendaraanById($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('no_polisi', 'No Polisi', 'required');
        $this->form_validation->set_rules('harga_sewa', 'Harga Sewa', 'required');
        $this->form_validation->set_rules('tahun_pembuatan', 'Tahun Pembuatan', 'required');
        $this->form_validation->set_rules('ganti_oli', 'Ganti Oli', 'required');
        $this->form_validation->set_rules('ganti_ban', 'Ganti Ban', 'required');
        $this->form_validation->set_rules('tanggal_service', 'Tanggal Service', 'required');
        $this->form_validation->set_rules('pajak', 'Pajak', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kendaraan/v_edit', $data);
            $this->load->view('layout/footer');
        } else {
            $gambarLama = $data['dataKendaraan']['gambar'];
            $gambarBaru = $_FILES['gambar']['name'];
            if ($gambarBaru) {
                $config['max_size'] = 2048;
                $config['upload_path'] = './assets/images/kendaraan/';
                $config['allowed_types'] = 'jpg|png|jpeg|pdf';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                    unlink(FCPATH . '/assets/images/kendaraan/' . $gambarLama);
                } else {
                    //data gagal di upload
                }
            } else {
                $gambar = $gambarLama;
            }
            $data = array(
                'nama_kendaraan' => trim(htmlspecialchars($this->input->post('nama'))),
                'jenis_kendaraan' => trim(htmlspecialchars($this->input->post('jenis'))),
                'no_polisi' => trim(htmlspecialchars($this->input->post('no_polisi'))),
                'harga_sewa' => trim(htmlspecialchars($this->input->post('harga_sewa'))),
                'tahun_pembuatan' => trim(htmlspecialchars($this->input->post('tahun_pembuatan'))),
                'tgl_ganti_oli' => trim(htmlspecialchars($this->input->post('ganti_oli'))),
                'tgl_ganti_ban' => trim(htmlspecialchars($this->input->post('ganti_ban'))),
                'tgl_service' => trim(htmlspecialchars($this->input->post('tanggal_service'))),
                'tgl_bayar_pajak' => trim(htmlspecialchars($this->input->post('pajak'))),
                'status' => trim(htmlspecialchars($this->input->post('status'))),
                'gambar' => $gambar
            );
            $result = $this->M_kendaraan->editKendaraan($id, $data);
            if ($result > 0) {
                //toast berhasil
                redirect('kendaraan');
            } else {
                //toast gagal
                redirect('kendaraan');
            }
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Kendarann';
        $data['dataKendaraan'] = $this->M_kendaraan->getKendaraanById($id);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kendaraan/v_detail', $data);
        $this->load->view('layout/footer');
    }

    public function hapus($id)
    {
        $this->db->where('id_kendaraan', $id);
        $this->db->delete('kendaraan');
        redirect('kendaraan');
    }
}
