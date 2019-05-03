<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class anggotaController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('anggotaModel');
    }

    public function index()
    {
        $data['Anggota'] = $this->anggotaModel->view();
        $this->load->view('anggota/index', $data);
    }

    public function tambah()
    {
        if ($this->input->post('submit')) {
            if ($this->anggotaModel->validation("save")) {
                $this->anggotaModel->save();
                redirect('anggota');
            }
        }

        $this->load->view('anggota/form_tambah');
    }

    public function ubah($Kd_Anggota)
    {
        if ($this->input->post('submit')) {
            if ($this->SiswaModel->validation("update")) {
                $this->SiswaModel->edit($nis);
                redirect('anggota');
            }
        }

        $data['Anggota'] = $this->SiswaModel->view_by($nis);
        $this->load->view('siswa/form_ubah', $data);
    }

    public function hapus($nis)
    {
        $this->SiswaModel->delete($nis); // Panggil fungsi delete() yang ada di SiswaModel.php
        redirect('siswa');
    }
}
