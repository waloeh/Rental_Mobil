<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('login/v_login');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login/v_login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->M_user->cekUser($username);
            if ($user != NULL) {
                if ($password == password_verify($password, $user['password'])) {
                    $data = array(
                        'username' => $user['username'],
                        'email' => $user['email'],
                        'id_user' => $user['id_user'],
                        'gambar' => $user['gambar']
                    );
                    $this->session->set_userdata($data);
                    redirect('dashboard');
                } else {
                    redirect('Auth/login');
                }
            } else {
                redirect('Auth/login');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
