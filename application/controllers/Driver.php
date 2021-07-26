<?php
class Driver extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Data Driver";
        $data['data_driver'] = $this->M_driver->getDriverAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar', $data);
        $this->load->view('driver/v_driver', $data);
        $this->load->view('layout/footer');
    }

    public function getDataDriverAll()
    {
        $dataDriver = $this->M_driver->getDriverAll();
        $output = array(
            'message' => 'success',
            'data' => $dataDriver
        );
        echo json_encode($output);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Driver';
        $this->form_validation->set_rules('nama', 'Nama Driver', 'required');
        $this->form_validation->set_rules('alamat', 'Alamt', 'required');
        $this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('hp', 'No Handphone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('driver/v_tambah', $data);
            $this->load->view('layout/footer');
        } else {
            $gambar = $_FILES['gambar']['name'];
            if ($gambar) {
                $config['max_size'] = 2048; //2mb
                $config['upload_path'] = "./assets/images/drivers/";
                $config['allowed_types'] = "jpg|png|jpeg|pdf";
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                } else {
                    $this->toastr->error('Gagal');
                }
            } else {
                $gambar = 'default.png';
            }

            $this->db->insert('driver', array(
                'nama_driver' => trim(htmlspecialchars($this->input->post('nama'))),
                'jenis_kelamin' => trim(htmlspecialchars($this->input->post('kelamin'))),
                'alamat' => trim(htmlspecialchars($this->input->post('alamat'))),
                'email' => trim(htmlspecialchars($this->input->post('email'))),
                'no_hp' => trim(htmlspecialchars($this->input->post('hp'))),
                'status' => 1,
                'gambar' => $gambar
            ));
            $this->toastr->success('Berhasil');
            redirect('driver');
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data Drive';
        $data['dataDriver'] = $this->M_driver->getDataDriverById($id);
        $this->form_validation->set_rules('nama', 'Nama User', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('driver/v_edit', $data);
            $this->load->view('layout/footer');
        } else {
            $gambarLama = $data['dataDriver']['gambar'];
            $gambarBaru = $_FILES['gambar']['name'];
            if ($gambarBaru) {
                $config['max_size'] = 2048;
                $config['upload_path'] = './assets/images/drivers/';
                $config['allowed_types'] = 'jpg|png|jpeg|pdf';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                    unlink(FCPATH . '/assets/images/drivers/' . $gambarLama);
                } else {
                    echo "gagal upload";
                }
            } else {
                $gambar = $gambarLama;
            }
            $data = array(
                'nama_driver' => trim(htmlspecialchars($this->input->post('nama'))),
                'alamat' => trim(htmlspecialchars($this->input->post('alamat'))),
                'jenis_kelamin' => trim(htmlspecialchars($this->input->post('kelamin'))),
                'email' => trim(htmlspecialchars($this->input->post('email'))),
                'no_hp' => trim(htmlspecialchars($this->input->post('no_hp'))),
                'status' => trim(htmlspecialchars($this->input->post('status'))),
                'gambar' => $gambar
            );
            $this->db->where('id_driver', $id);
            $this->db->update('driver', $data);
            //toastr
            redirect('driver');
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Driver';
        $data['dataDriver'] = $data['dataDriver'] = $this->M_driver->getDataDriverById($id);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('driver/v_detail', $data);
        $this->load->view('layout/footer');
    }

    public function hapus($id)
    {
        $this->db->where('id_driver', $id);
        $this->db->delete('driver');
        redirect('driver');
    }
}
