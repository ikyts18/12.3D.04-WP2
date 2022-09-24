<?php
class Bio extends CI_Controller 
{
    public function index()
    {
        $this->load->view('v_form_bio');

    }
    public function cetak()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'prodi' => $this->input->post('prodi')
        ];

        $this->load->view('v_data_bio', $data);

    }

}