<?php
class M_page_builder extends CI_Model{
  var $gallerypath;
  var $gallery_path_url;
  
  function __construct(){
    parent::__construct();
    $this->load->helper('tglindo_helper');

    $this->gallerypath = realpath(APPPATH . '../foto/foto_instansi');
	$this->gallery_path_url = base_url().'foto/foto_instansi/';
  }

  function page_builder($limit){
    $this->db->select('*');
    $this->db->from('m_page_builder');
    $this->db->limit($limit);
    $query = $this->db->get();
    return $query;
  }

  function setting_instansi($limit){
    $this->db->select('*');
    $this->db->from('m_instansi');
    $this->db->limit($limit);
    $query = $this->db->get();
    return $query;
  }
  
  function ubah_page_builder($id){
	  $status_slide = $this->input->post('status_slide');
	  $status_perkenalan = $this->input->post('status_perkenalan');
	  $judul_perkenalan = $this->input->post('judul_perkenalan');
	  $desc_perkenalan = $this->input->post('desc_perkenalan');
	  $status_our_value = $this->input->post('status_our_value');
	  $judul_our_value = $this->input->post('judul_our_value');
	  $desc_our_value = $this->input->post('desc_our_value');
	  $status_whyme = $this->input->post('status_whyme');
	  $judul_whyme = $this->input->post('judul_whyme');
	  $desc_whyme = $this->input->post('desc_whyme');
	  $status_portofolio = $this->input->post('status_portofolio');
	  $judul_portofolio = $this->input->post('judul_portofolio');
	  $desc_portofolio = $this->input->post('desc_portofolio');
	  $status_testimoni = $this->input->post('status_testimoni');
	  $judul_testimoni = $this->input->post('judul_testimoni');
	  $desc_testimoni = $this->input->post('desc_testimoni');
	  $status_product = $this->input->post('status_product');
	  $judul_product = $this->input->post('judul_product');
	  $desc_product = $this->input->post('desc_product');
	  $status_contact = $this->input->post('status_contact');
	  $judul_contact = $this->input->post('judul_contact');
	  $desc_contact = $this->input->post('desc_contact');

	  $data = array('status_slide' => $status_slide,
		   	        'status_perkenalan' => $status_perkenalan,
		   	        'judul_perkenalan' => $judul_perkenalan,
		   	        'desc_perkenalan' => $desc_perkenalan,
		   	        'status_our_value' => $status_our_value,
		   	        'judul_our_value' => $judul_our_value,
		   	        'desc_our_value' => $desc_our_value,
		   	        'status_whyme' => $status_whyme,
		   	        'judul_whyme' => $judul_whyme,
		   	        'desc_whyme' => $desc_whyme,
		   	        'status_portofolio' => $status_portofolio,
		   	        'judul_portofolio' => $judul_portofolio,
		   	        'desc_portofolio' => $desc_portofolio,
		   	        'status_testimoni' => $status_testimoni,
		   	        'judul_testimoni' => $judul_testimoni,
		   	        'desc_testimoni' => $desc_testimoni,
		   	        'status_product' => $status_product,
		   	        'judul_product' => $judul_product,
		   	        'desc_product' => $desc_product,
		   	        'status_contact' => $status_contact,
		   	        'judul_contact' => $judul_contact,
		   	        'desc_contact' => $desc_contact);
      $this->db->where('id_page_builder', $id);
	  $this->db->update('m_page_builder', $data);
    }
  }
?>
