<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan extends CI_Controller {
	public function index(){
		$data['title'] = 'Semua Lowongan Kerja';
		$this->template->load('phpmu-one/template','phpmu-one/view_lowongan',$data);
	}

	public function detail(){
		$ids = $this->uri->segment(3);
		$dat = $this->db->query("SELECT * FROM lowongan where judul_seo='".$this->db->escape_str($ids)."'");
	    $row = $dat->row();
	    $total = $dat->num_rows();
	        if ($total == 0){
	        	redirect('main');
	        }
		$data['title'] = $row->judul;
		$data['record'] = $this->model_lowongan->detail($ids)->row_array();
		$this->template->load('phpmu-one/template','phpmu-one/view_lowongan_detail',$data);
	}

	function file(){
		$name = $this->uri->segment(3);
		$data = file_get_contents("asset/files/".$name);
		force_download($name, $data);
	}
}
