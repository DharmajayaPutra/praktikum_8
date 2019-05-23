<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Admin Perpustakaan';
        $data['list_buku'] = $this->db->get('Buku')->result_array();

        $data['Petugas'] = $this->db->get_where('Petugas', ['Username' => $this->session->userdata('Username')])->row_array();


        $this->load->view('templates/admin_header', $data);
        $this->load->view('buku/index', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function create()
    {
        $data['title'] = 'Admin Perpustakaan';
        $data['Petugas'] = $this->db->get_where('Petugas', ['Username' => $this->session->userdata('Username')])->row_array();


        $this->load->view('templates/admin_header', $data);
        $this->load->view('buku/create', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required|max_length[64]');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'trim|required|max_length[64]');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'trim|required|max_length[64]');
        $this->form_validation->set_rules('tahun', 'Tahun Terbit', 'trim|required|numeric');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Admin Perpustakaan';
            $data['Petugas'] = $this->db->get_where('Petugas', ['Username' => $this->session->userdata('Username')])->row_array();

            $this->load->view('templates/admin_header', $data);
            $this->load->view('buku/create', $data);
            $this->load->view('templates/admin_footer', $data);
        } else {
            $data = [
                'Judul_Buku' => $this->input->post('judul'),
                'Pengarang' => $this->input->post('pengarang'),
                'Penerbit' => $this->input->post('penerbit'),
                'Tahun_Terbit' => $this->input->post('tahun')
            ];

            $this->db->insert('Buku', $data);
            $this->session->set_flashdata('message', '<div class ="alert alert-success"  role ="alert" >Successfully Add Data Buku</div>');
            redirect('buku/create');
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
