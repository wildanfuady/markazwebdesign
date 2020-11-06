<?php
class M_artikel extends CI_Model{
  var $gallerypath;
  var $gallery_path_url;
  
  function __construct(){
    parent::__construct();
    $this->load->helper('tglindo_helper');
    $this->load->helper('cleanurl_helper');


    $this->gallerypath = realpath(APPPATH . '../foto/foto_artikel');
	$this->gallery_path_url = base_url().'foto/foto_artikel/';
  }

  function cek($link_judul){
  	$this->db->select('link_judul');
  	$this->db->from('m_artikel');
	$this->db->where('link_judul', $link_judul);
	$query = $this->db->get();
	return $query->num_rows();
  }
 
  function artikel_terbaru($limit){
    $this->db->select('id_artikel, judul, penulis, kategori_id, hari, tgl_post, jam, isi, gambar');
	$this->db->from('m_artikel');
	$this->db->limit($limit);
	$this->db->order_by("id_artikel", "desc");
	$query = $this->db->get();
	return $query;
  }
  
  function artikel_sebelumnya($limit,$offset){
    $this->db->select('id_artikel, judul');
	$this->db->from('m_artikel');
	$this->db->limit($limit,$offset);
	$this->db->order_by("id_artikel", "desc");
	$query = $this->db->get_where();
	return $query;
  }
	
  function detail_artikel($link_judul){
    $this->db->query("update m_artikel set dibaca=dibaca+1 where link_judul='$link_judul'"); 
    $query = $this->db->query("select * from m_artikel where link_judul='$link_judul'");
	return $query;
  }

  function detail_kategori($id){ 
    $query = $this->db->query("select nama_kategori from m_kategori where id_kategori='$id'");
	return $query;
  }

  function cari_artikel($limit,$offset,$keyword){
    $this->db->select('*');
    $this->db->from('m_artikel');
    $this->db->like('judul', $keyword);
    $this->db->limit($limit,$offset);
	$query = $this->db->get();
	return $query;
  }
  
  function tot_hal($tabel,$field,$kata){
  $query = $this->db->query("select * from $tabel where $field like '%$kata%'");
  return $query;
  }
  
  function tot_data($tabel){
    $query = $this->db->query("SELECT * FROM $tabel");
    return $query;
  }
  
  function tampil_artikel(){
    $query = $this->db->query("SELECT * FROM m_artikel");
    return $query;
  }
  
  function simpan_artikel(){
    
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
	
	$judul = $this->input->post('judul');
	$link_judul = set_linkjudul($this->input->post('judul'));

	$cari_link = $this->db->query("select link_judul from m_artikel where link_judul='$link_judul'");

	$ketemu = $cari_link->num_rows();

	if($ketemu > 0) {
		$no = rand(111,333);
		$link_judul_baru = $link_judul.$no;
	} else {
		$link_judul_baru = $link_judul;
	}

	$penulis = $this->input->post('penulis');
	$kategori_id = $this->input->post('kategori_id');
	$isi = $this->input->post('isi');
	$tgl = date('Y-m-d');
	$hari = nama_hari();
	$jam = date('H:i:s');
	$gambar = $_FILES['userfile']['name'];
	$link_gambar = set_linkurlgambar($gambar);
	
	$data = array('judul' => $judul,
				  'link_judul' => $link_judul_baru,
                  'penulis' => $penulis,
                  'kategori_id' => $kategori_id,
			      'isi' => $isi,
                  'tgl_post' => $tgl,
                  'hari' => $hari,
                  'jam' => $jam,
			      'gambar' => $link_gambar);
	$this->db->insert('m_artikel', $data);
  }
  
  function tampil_edit_artikel($id){
    return $this->db->get_where('m_artikel', array('id_artikel' => $id))->row();
  }
  
  function ubah_artikel($id){
    $userfile = $_FILES['userfile']['name'];
	if(!empty($userfile)){
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

	  $judul = $this->input->post('judul');
	  
	  $penulis = $this->input->post('penulis');
	  $kategori_id = $this->input->post('kategori_id');
	  $isi = $this->input->post('isi');
	  $tgl = date('Y-m-d');
	  $hari = nama_hari();
	  $jam = date('H:i:s');
	  $gambar = $_FILES['userfile']['name'];
	  $link_gambar = set_linkurlgambar($gambar);

	  $data = array('judul' => $judul,
                    'penulis' => $penulis,
                    'kategori_id' => $kategori_id,
		   	        'isi' => $isi,
                    'tgl_post' => $tgl,
                    'hari' => $hari,
                    'jam' => $jam,
			        'gambar' => $link_gambar);
      $this->db->where('id_artikel', $id);
	  $this->db->update('m_artikel', $data);
    }
    else{
	  $judul = $this->input->post('judul');
	  $penulis = $this->input->post('penulis');
	  $kategori_id = $this->input->post('kategori_id');
	  $isi = $this->input->post('isi');
	  $tgl = date('Y-m-d');
	  $hari = nama_hari();
	  $jam = date('H:i:s');
	  
	  $data = array('judul' => $judul,
                    'penulis' => $penulis,
                    'kategori_id' => $kategori_id,
		   	        'isi' => $isi,
                    'tgl_post' => $tgl,
                    'hari' => $hari,
                    'jam' => $jam);
      $this->db->where('id_artikel', $id);
	  $this->db->update('m_artikel', $data);
    }
  }
  
  function hapus_artikel($id){
    $this->db->where('id_artikel', $id);
    $this->db->delete('m_artikel');
  }

  function post_popular($limit){
  	$this->db->select('*');
	$this->db->from('m_artikel');
	$this->db->limit($limit);
	$this->db->order_by("dibaca", "desc");
	$query = $this->db->get_where();
	return $query;
  }
  
}
?>
