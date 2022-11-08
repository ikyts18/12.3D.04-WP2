<?php

class M_data extends CI_Model
{
    private $table='biodata';
    //validasi form 
    public function rules(){
        return[
            [
                'field'=>'nama',
                'label'=>'Nama',
                'rules'=>'trim|required'
            ],
            [
                'field'=>'jenis_kelamin',
                'label'=>'Jenis Kelamin',
                'rules'=>'trim|required'
            ],
            [
                'field'=>'alamat',
                'label'=>'Alamat',
                'rules'=>'trim|required'
            ],
            [
                'field'=>'pekerjaan',
                'label'=>'Pekerjaan',
                'rules'=>'trim|required'
            ]
        ];
    }
    public function getbyID($id){
        return $this->db->get_where($this->table,["id"=>$id])->row();
    }
    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function update()
    {
        $data = array(
            "nama" => $this->input->post('nama'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "alamat" => $this->input->post('alamat'),
            "pekerjaan" => $this->input->post('pekerjaan'),
        );
        return $this->db->update($this->table, $data, array('id' => $this->input->post('id')));
    }
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }
    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->save($table,$data);
	}	
    function ambil_data(){
        return $this->db->get('biodata');
    }
    
    
}