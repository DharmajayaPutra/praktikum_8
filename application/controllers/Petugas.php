<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Admin Perpustakaan';
        $data['Petugas'] = $this->db->get_where('Petugas', ['Username' => $this->session->userdata('Username')])->row_array();

        $this->load->view('templates/petugas_header', $data);
        $this->load->view('petugas/index', $data);
        $this->load->view('templates/petugas_footer', $data);
    }
}
