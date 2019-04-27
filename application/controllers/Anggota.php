<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Anggota extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('AnggotaaModel');
    }

    public function index()
    {
        $data['Anggota'] = $this->AnggotaModel->view();
        $this->load->view('Anggota/index', $data);
    }

    public function tambah()
    {
        if ($this->input->post('submit')) {
            if ($this->AnggotaModel->validation("save")) {
                $this->AnggotaModel->save();
                redirect('Anggota');
            }
        }

        $this->load->view('Anggota/form_tambah');
    }

    public function ubah($Kd_Anggota)
    {
        if ($this->input->post('submit')) {
            if ($this->AnggotaModel->validation("update")) {
                $this->AnggotaModel->edit($Kd_Anggota);
                redirect('Anggota');
            }
        }

        $data['Anggota'] = $this->AnggotaModel-- > view_by($Kd_Anggota);
        $this->load->view('Anggota/form_ubah', $data);
    }

    public function hapus($Kd_Anggota)
    {
        $this->AnggotaModel->delete($Kd_Anggota); // Panggil fungsi delete() yang ada di SiswaModel.php
        redirect('Anggota');
    }
}
