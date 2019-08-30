<?php
class M_data extends CI_Model{
	public function __construct()
{
parent::__construct();
// Your own constructor code
$this->load->database();
}
function add_akta($data,$table){
    $this->db->insert($table,$data);
}
function add_ktp($data,$table){
    $this->db->insert($table,$data);
}
function add_kk($data,$table){
    $this->db->insert($table,$data);
}
function add_surattanah($data,$table){
    $this->db->insert($table,$data);
}
function add_sktm($data,$table){
    $this->db->insert($table,$data);
}
function add_domisili($data,$table){
    $this->db->insert($table,$data);
}
function add_pengantarpindah($data,$table){
    $this->db->insert($table,$data);
}
function add_pengantarnikah($data,$table){
    $this->db->insert($table,$data);
}
function add_pengantarcerai($data,$table){
    $this->db->insert($table,$data);
}
}