<?php 
class Kernek extends CI_Controller {
    public function index() {
        $data['title'] = "Data Kernek";
        // $data['data_driver'] = $this->M_driver->getKernekAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kernek/v_kernek', $data);
        $this->load->view('layout/footer');
    }

    public function getDataKernekAll()
    {
        $dataKernek = $this->M_driver->getDatakernek();
        $output = array(
            "message" => "success",
            "data" => $dataKernek
        );
        echo json_encode($output);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Kernek';
        $this->form_validation->set_rules('nama', 'Nama Driver', 'required');
        $this->form_validation->set_rules('alamat', 'Alamt', 'required');
        $this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('hp', 'No Handphone', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kernek/v_tambah', $data);
            $this->load->view('layout/footer');
        } else {
            $gambar = $_FILES['gambar']['name'];
            if ($gambar) {
                $config['max_size'] = 2048; //2mb
                $config['upload_path'] = "./assets/images/kernek/";
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

            $this->db->insert('kernek', array(
                'nama_kernek' => trim(htmlspecialchars($this->input->post('nama'))),
                'jenkel_kernek' => trim(htmlspecialchars($this->input->post('kelamin'))),
                'alamat_kernek' => trim(htmlspecialchars($this->input->post('alamat'))),
                'tlp_kernek' => trim(htmlspecialchars($this->input->post('hp'))),
                'status_kernek' => 1,
                'gambar_kernek' => $gambar
            ));
            $this->session->set_flashdata('flash', 'ditambah');
            redirect('kernek');
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data Kernek';
        $data['dataKernek'] = $this->M_driver->getDataKernekById($id);
        $this->form_validation->set_rules('nama', 'Nama User', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kernek/v_edit', $data);
            $this->load->view('layout/footer');
        } else {
            $gambarLama = $data['dataKernek']['gambar_kernek'];
            $gambarBaru = $_FILES['gambar']['name'];
            if ($gambarBaru) {
                $config['max_size'] = 2048;
                $config['upload_path'] = './assets/images/kernek/';
                $config['allowed_types'] = 'jpg|png|jpeg|pdf';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                    unlink(FCPATH . '/assets/images/kernek/' . $gambarLama);
                } else {
                    echo "gagal upload";
                }
            } else {
                $gambar = $gambarLama;
            }
            $data = array(
                'nama_kernek' => trim(htmlspecialchars($this->input->post('nama'))),
                'alamat_kernek' => trim(htmlspecialchars($this->input->post('alamat'))),
                'jenkel_kernek' => trim(htmlspecialchars($this->input->post('kelamin'))),
                'tlp_kernek' => trim(htmlspecialchars($this->input->post('no_hp'))),
                'status_kernek' => trim(htmlspecialchars($this->input->post('status'))),
                'gambar_kernek' => $gambar
            );
            $this->db->where('id_kernek', $id);
            $this->db->update('kernek', $data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('kernek');
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Kernek';
        $data['dataKernek'] = $this->M_driver->getDataKernekById($id);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kernek/v_detail', $data);
        $this->load->view('layout/footer');
    }

    public function hapus($id)
    {
        $data['gambar'] = $this->M_driver->getDataKernekById($id);
        $this->db->where('id_kernek', $id);
        $this->db->delete('kernek');
        $this->session->set_flashdata('flash', 'dihapus');
        unlink(FCPATH . '/assets/images/kernek/' . $data['gambar']['gambar_kernek']);
        redirect('kernek');
    }
}