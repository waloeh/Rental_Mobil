<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['tittle'] = "Dashboard";
        $data['dataUser'] = $this->M_user->getUserAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dashboard/v_dashboard', $data);
        $this->load->view('layout/footer');
    }

    public function edit()
    {
        echo "tes";
    }
}
