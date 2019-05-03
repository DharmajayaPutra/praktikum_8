<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class anggotaModel extends CI_Model
{
    public function view()
    {
        return $this->db->get('Anggota')->result();
    }

    public function view_by($Kd_Anggota)
    {
        $this->db->where('Kd_Anggota', $Kd_Anggota);
        return $this->db->get('Anggota')->row();
    }

    public function validation($mode)
    {
        $this->load->library('form_validation');

        if ($mode == "save")
            $this->form_validation->set_rules('input_Nama', 'Nama', 'required|max_length[50]');
        $this->form_validation->set_rules('input_Prodi', 'Prodi', 'required');
        $this->form_validation->set_rules('input_Jenjang', 'Jenjang', 'required|max_length[2]');
        $this->form_validation->set_rules('input_Alamat', 'Alamat', 'required');

        if ($this->form_validation->run())
            return TRUE;
        return FALSE;
    }

    public function save()
    {
        $data = array(
            "Nama" => $this->input->post('input_Nama'),
            "Prodi" => $this->input->post('input_Prodi'),
            "Jenjang" => $this->input->post('input_Jenjang'),
            "Alamat" => $this->input->post('input_Alamat')
        );

        $this->db->insert('Anggota', $data);
    }

    public function edit($Kd_Anggota)
    {
        $data = array(
            "Nama" => $this->input->post('input_Nama'),
            "Prodi" => $this->input->post('input_Prodi'),
            "Jenjang" => $this->input->post('input_Jenjang'),
            "Alamat" => $this->input->post('input_Alamat')
        );

        $this->db->where('Kd_Anggota', $Kd_Anggota);
        $this->db->update('Anggota', $data);
    }

    public function delete($Kd_Anggota)
    {
        $this->db->where('Kd_Anggota', $Kd_Anggota);
        $this->db->delete('Anggota');
    }
}
