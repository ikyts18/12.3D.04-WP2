<?php
defined('BASEPATH') OR exit ('No Direct Script access allowed');
class Web extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index(){
        $data['judul']="Halaman Judul";
        $this->load->view('v_index',$data);
    }
    public function about()
    {
        $data['judul'] = "Halaman About";
        $this->load->view('partials/head', $data);
        $this->load->view('v_about', $data);
        $this->load->view('partials/footer', $data);
    }
}