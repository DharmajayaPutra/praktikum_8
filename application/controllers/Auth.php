<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header');
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));

        $user = $this->db->get_where('Petugas', ['Username' => $email])->row_array();

        //jika user ada
        if ($user) {
            if ($password == $user['Password']) {
                $data = [
                    'Username' => $user['Username'],
                    'Kd_Petugas' => $user['Kd_petugas']
                ];
                $this->session->set_userdata($data);

                redirect('petugas');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('Username');
        $this->session->unset_userdata('Kd_petugas');

        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">You have been logged out!</div>');
        redirect('auth');
    }
}
