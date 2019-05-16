<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{
    public function index()
    {
        $data['Petugas'] = $this->db->get_where('Petugas', ['Username' => $this->session->userdata('Username')])->row_array();
        echo 'selamat datang ' . $data['Petugas']['Nama'];
    }
}
