<?php
class About extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
		$this->load->view('depan/v_about',$x);
	}
}
