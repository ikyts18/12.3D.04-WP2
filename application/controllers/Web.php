<?php
defined('BASEPATH') OR exit ('No Direct Script access allowed');
class Web extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_data');
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
}
