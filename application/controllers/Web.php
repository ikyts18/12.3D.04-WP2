<?php
defined('BASEPATH') OR exit ('No Direct Script access allowed');
class Web extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_data');
        $this->load->library('form_validation');
    }
    public function index(){
        $data['judul']="Halaman Judul";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }
    public function about(){
        $data['judul'] = "Halaman About";
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);
    }
    public function bio(){
        // $data['bio']=$this->m_data->ambil_data()->result();
        $data=array(
            'judul'=>"Halaman Data",
            'bio'=>$this->m_data->ambil_data()->result()
        );
        $this->load->view('v_header', $data);
        $this->load->view('v_data', $data);
        $this->load->view('v_footer', $data);
    }
    public function create(){
        $data=array(
            'judul'=>"Tambah Data",
        );
        $this->load->view('v_header');
        $this->load->view('v_create');
        $this->load->view('v_footer');
    }
    public function save(){
        $this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('pekerjaan','Pekerjaan','required');
        
        if ($this->form_validation->run()==true) {
            $data['nama'] = $this->input->post('nama');
			$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
            $data['alamat'] = $this->input->post('alamat');
			$data['pekerjaan'] = $this->input->post('pekerjaan');
			$this->m_data->save($data);
			redirect('web/bio');
        }else {
            $this->load->view('v_header');
            $this->load->view('v_create');
            $this->load->view('v_footer');
        
        }
    }
    function hapus($id){
        $where = array('id' => $id);
        $this->m_data->hapus_data($where,'biodata');
        redirect('web/bio');
    }
    function edit($id){
        $data=array(
            'judul'=>"Edit Data",
        );
		$data['biodata'] = $this->m_data->getById($id);
		$this->load->view('v_header');
		$this->load->view('v_edit',$data);
		$this->load->view('v_footer');
	}

	public function update()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('pekerjaan','Pekerjaan','required');

		if ($this->form_validation->run()==true)
        {
		 	$id = $this->input->post('id');
			$data['nama'] = $this->input->post('nama');
			$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
			$data['alamat'] = $this->input->post('alamat');
            $data['pekerjaan'] = $this->input->post('pekerjaan');
			$this->m_data->update($data,$id);
			redirect('web/bio');
		}
		else
		{
			$id = $this->input->post('id');
			$data['web'] = $this->m_data->getById($id);
			$this->load->view('v_header');
			$this->load->view('v_edit',$data);
			$this->load->view('v_footer');
		}
	}

}