<?php
class M_page extends CI_Model{
  var $gallerypath;
  var $gallery_path_url;
  
  function __construct(){
    parent::__construct();
    $this->load->helper('tglindo_helper');
    $this->load->helper('cleanurl_helper');

    $this->gallerypath = realpath(APPPATH . '../foto/foto_page');
	$this->gallery_path_url = base_url().'foto/foto_page/';
  }

  function cek($link_page){
  	$this->db->select('link_page');
  	$this->db->from('m_page');
	$this->db->where('link_page', $link_page);
	$query = $this->db->get();
	return $query->num_rows();
  }
 
  function tampil_page(){
    $query = $this->db->query("SELECT * FROM m_page ORDER BY jam DESC");
    return $query;
  }
	
  function detail_page($link_page){
    $this->db->query("update m_page set dibaca=dibaca+1 where link_page='$link_page'"); 
    $query = $this->db->query("select * from m_page where link_page='$link_page'");
	return $query;
  }
  
  function simpan_page(){
    
    $konfigurasi = array('allowed_types' =>'jpg|jpeg|gif|png|bmp',
			             'upload_path' => $this->gallerypath);
	$this->load->library('upload', $konfigurasi);
	$this->upload->do_upload();
	$datafile = $this->upload->data();
	
	$konfigurasi = array('source_image' => $datafile['full_path'],
                         'new_image' => $this->gallerypath . '/thumbnails',
			             'maintain_ration' => true,
			             'width' => 130,
		                 'height' =>100);

    $this->load->library('image_lib', $konfigurasi);
	$this->image_lib->resize();

	$link_page = set_linkjudul($this->input->post('judul_page'));

	$cari_link = $this->db->query("select link_page from m_page where link_page='$link_page'");

	$ketemu = $cari_link->num_rows();

	if($ketemu > 0) {
		$no = rand(111,333);
		$link_judul_baru = $link_page.$no;
	} else {
		$link_judul_baru = $link_page;
	}

	$id_page = $this->input->post('id_page');
	$judul_page = $this->input->post('judul_page');
	$penulis_page = $this->input->post('penulis_page');
	$isi_page = $this->input->post('isi_page');
	$tgl = date('Y-m-d');
	$hari = nama_hari();
	$jam = date('H:i:s');
	$foto_page = $_FILES['userfile']['name'];
	$link_foto_page = set_linkurlgambar($foto_page); 

	if(empty($foto_page)) {
		
		$ganti_foto_page ="no_image.jpg";
		$link_ganti_foto_page = set_linkurlgambar($foto_page);

		$data = array('id_page' => $id_page,
					  'judul_page' => $judul_page,
					  'link_page' => $link_judul_baru,
	                  'penulis_page' => $penulis_page,
				      'isi_page' => $isi_page,
	                  'tgl_post' => $tgl,
	                  'hari' => $hari,
	                  'jam' => $jam,
				      'foto_page' => $link_ganti_foto_page);
		$this->db->insert('m_page', $data);
	
	} else {
	
	$data = array('id_page' => $id_page,
				  'judul_page' => $judul_page,
                  'penulis_page' => $penulis_page,
			      'isi_page' => $isi_page,
                  'tgl_post' => $tgl,
                  'hari' => $hari,
                  'jam' => $jam,
			      'foto_page' => $link_foto_page);
	$this->db->insert('m_page', $data);
	
	}
  }
  
  function tampil_edit_page($id){
    return $this->db->get_where('m_page', array('id_page' => $id))->row();
  }
  
  function ubah_page($id){
    $foto_page = $_FILES['userfile']['name'];
	if(!empty($foto_page)){
	  $konfigurasi = array('allowed_types' =>'jpg|jpeg|gif|png|bmp',
				           'upload_path' => $this->gallerypath);
				           
	  $this->load->library('upload', $konfigurasi);
	  $this->upload->do_upload();
	  $datafile = $this->upload->data();
	  
	  $konfigurasi = array('source_image' => $datafile['full_path'],
				           'new_image' => $this->gallerypath . '/thumbnails',
			               'maintain_ration' => true,
				           'width' => 130,
				           'height' =>100);
				           
	  $this->load->library('image_lib', $konfigurasi);
	  $this->image_lib->resize();

	  $judul_page = $this->input->post('judul_page');
	  $penulis_page = $this->input->post('penulis_page');
	  $isi_page = $this->input->post('isi_page');
	  $tgl = date('Y-m-d');
	  $hari = nama_hari();
	  $jam = date('H:i:s');
	  $foto_page = $_FILES['userfile']['name'];
	  $link_foto_page = set_linkurlgambar($foto_page);
	  
	  $data = array('judul_page' => $judul_page,
                  'penulis_page' => $penulis_page,
			      'isi_page' => $isi_page,
                  'tgl_post' => $tgl,
                  'hari' => $hari,
                  'jam' => $jam,
			      'foto_page' => $link_foto_page);
      $this->db->where('id_page', $id);
	  $this->db->update('m_page', $data);
    
    } else {
	
	  $judul_page = $this->input->post('judul_page');
	  $penulis_page = $this->input->post('penulis_page');
	  $isi_page = $this->input->post('isi_page');
	  $tgl = date('Y-m-d');
	  $hari = nama_hari();
	  $jam = date('H:i:s');
	  
	  $data = array('judul_page' => $judul_page,
                  'penulis_page' => $penulis_page,
			      'isi_page' => $isi_page,
                  'tgl_post' => $tgl,
                  'hari' => $hari,
                  'jam' => $jam);
      $this->db->where('id_page', $id);
	  $this->db->update('m_page', $data);
    }
  }
  
  function hapus_page($id){
    $this->db->where('id_page', $id);
    $this->db->delete('m_page');
  }
  
}
?>
