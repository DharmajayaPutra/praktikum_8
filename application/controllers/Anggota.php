<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Admin Perpustakaan';
        $data['list_anggota'] = $this->db->get('Anggota')->result_array();

        $data['Petugas'] = $this->db->get_where('Petugas', ['Username' => $this->session->userdata('Username')])->row_array();


        $this->load->view('templates/admin_header', $data);
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function create()
    {
        $data['title'] = 'Admin Perpustakaan';
        $data['Petugas'] = $this->db->get_where('Petugas', ['Username' => $this->session->userdata('Username')])->row_array();


        $this->load->view('templates/admin_header', $data);
        $this->load->view('anggota/create', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('fullname', 'Name', 'trim|required|max_length[64]');
        $this->form_validation->set_rules('prodi', 'Program Studi', 'trim|required|max_length[64]');
        $this->form_validation->set_rules('jenjang', 'Jenjang Pendidikan', 'trim|required|max_length[2]');
        $this->form_validation->set_rules('alamat', 'Password', 'trim|required|max_length[64]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Admin Perpustakaan';
            $data['Petugas'] = $this->db->get_where('Petugas', ['Username' => $this->session->userdata('Username')])->row_array();

            $this->load->view('templates/admin_header', $data);
            $this->load->view('anggota/create', $data);
            $this->load->view('templates/admin_footer', $data);
        } else {
            $data = [
                'Nama' => $this->input->post('fullname'),
                'Prodi' => $this->input->post('prodi'),
                'Jenjang' => $this->input->post('jenjang'),
                'Alamat' => md5($this->input->post('alamat'))
            ];

            $this->db->insert('Anggota', $data);
            $this->session->set_flashdata('message', '<div class ="alert alert-success"  role ="alert" >Successfully Add Data Petugas</div>');
            redirect('anggota/create');
        }
    }

    public function edit()
    {
        $data['title'] = 'Admin Perpustakaan';
        $data['Petugas'] = $this->db->get_where('Petugas', ['Username' => $this->session->userdata('Username')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('petugas/edit', $data);
        $this->load->view('templates/admin_footer', $data);
    }
}
