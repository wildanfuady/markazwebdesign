<?php

class Testimoni extends CI_Controller {
	
	function index() {
		$this->load->model('m_testimoni');
		
		$data['testimoni'] = $this->m_testimoni->tampil_testimoni(4);
		$data['jenis'] = "Beranda";
		$this->load->view('v_template', $data);
	}
}