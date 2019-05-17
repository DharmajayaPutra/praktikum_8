<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Admin Perpustakaan';
        $data['Petugas'] = $this->db->get_where('Petugas', ['Username' => $this->session->userdata('Username')])->row_array();

        $data['list_petugas'] = $this->db->get('Petugas')->result_array();

        $this->load->view('templates/petugas_header', $data);
        $this->load->view('petugas/index', $data);
        $this->load->view('templates/petugas_footer', $data);
    }

    public function create()
    {
        $data['title'] = 'Admin Perpustakaan';
        $data['Petugas'] = $this->db->get_where('Petugas', ['Username' => $this->session->userdata('Username')])->row_array();

        $this->load->view('templates/petugas_header', $data);
        $this->load->view('petugas/create', $data);
        $this->load->view('templates/petugas_footer', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('fullname', 'Name', 'trim|required|max_length[64]');
        $this->form_validation->set_rules('address', 'Address', 'trim|required|max_length[64]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[Petugas . Username]');
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password1]', [
            'matches' => 'Password dont match!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Admin Perpustakaan';
            $data['Petugas'] = $this->db->get_where('Petugas', ['Username' => $this->session->userdata('Username')])->row_array();

            $this->load->view('templates/petugas_header', $data);
            $this->load->view('petugas/create', $data);
            $this->load->view('templates/petugas_footer', $data);
        } else {
            $data = [
                'Nama' => $this->input->post('fullname'),
                'Alamat' => $this->input->post('address'),
                'Username' => $this->input->post('email'),
                'Password' => md5($this->input->post('password2'))
            ];

            $this->db->insert('Petugas', $data);
            $this->session->set_flashdata('message', '<div class ="alert alert-success"  role ="alert" >Successfully Add Data Petugas</div>');
            redirect('petugas/create');
        }
    }
}
