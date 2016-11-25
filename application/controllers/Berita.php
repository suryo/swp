<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Berita extends CI_Controller {
	public function index(){
		if (isset($_POST['kata'])){
			$keyword = strip_tags($this->input->post('kata'));
			$data['title'] = 'Hasil Pencarian dengan keyword : <span>'.$keyword.'</span>';
			$data['berita'] = $this->model_berita->semua_berita_cari(0,5,$keyword);
		}else{
			$data['title'] = 'Semua Berita ';
			$jumlah= $this->model_berita->hitungberita()->num_rows();
			$config['base_url'] = base_url().'berita/index';
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 5; 	
			if ($this->uri->segment('3')!=''){
				$dari = $this->uri->segment('3');
			}else{
				$dari = 0;
			}

			if (is_numeric($dari)) {
				$data['berita'] = $this->model_berita->semua_berita($dari, $config['per_page']);
			}else{
				redirect('berita');
			}
			$this->pagination->initialize($config);
		}
		$this->template->load('phpmu-one/template','phpmu-one/view_semua_berita',$data);
	}

	public function detail(){
		$ids = $this->uri->segment(3);
		$dat = $this->db->query("SELECT * FROM berita where judul_seo='".$this->db->escape_str($ids)."'");
	    $row = $dat->row();
	    $total = $dat->num_rows();
	        if ($total == 0){
	        	redirect('main');
	        }
		$data['title'] = $row->judul;
		$data['record'] = $this->model_berita->berita_detail($ids)->row_array();
		$data['infoterbaru'] = $this->model_berita->info_terbaru(6);
		$this->model_berita->berita_dibaca_update($ids);
		$this->template->load('phpmu-one/template','phpmu-one/view_berita',$data);
	}

	public function kategori(){
		$ids = $this->uri->segment(3);
		$dat = $this->db->query("SELECT * FROM kategori where kategori_seo='".$this->db->escape_str($ids)."'");
	    $row = $dat->row();
	    $total = $dat->num_rows();
	        if ($total == 0){
	        	redirect('main');
	        }

	    $jumlah= $this->model_berita->hitungberitakategori($row->id_kategori)->num_rows();
		$config['base_url'] = base_url().'berita/kategori/'.$row->kategori_seo;
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 5; 	
			if ($this->uri->segment('4')!=''){
				$dari = $this->uri->segment('4');
			}else{
				$dari = 0;
			}

			if (is_numeric($dari)) {
				$data['kategori'] = $this->model_berita->detail_kategori($row->id_kategori, $dari, $config['per_page']);
			}else{
				redirect('berita');
			}
		$this->pagination->initialize($config);
		$data['title'] = $row->nama_kategori;
		$this->template->load('phpmu-one/template','phpmu-one/view_kategori',$data);
	}
}
