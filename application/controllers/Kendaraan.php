<?php
    class Kendaraan extends CI_Controller {
        public function index() {
            $data['Kendaraan'] = $this->M_kendaraan->getKendaraanAll();
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('kendaraan/v_kendaraan', $data);
            $this->load->view('layout/footer');
        }
    }
