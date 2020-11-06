<?php
class M_link extends CI_Model{
  var $gallerypath;
  var $gallery_path_url;
  
  function __construct(){
    parent::__construct();
    $this->load->helper('tglindo_helper');

    $this->gallerypath = realpath(APPPATH . '../foto/foto_banner');
	$this->gallery_path_url = base_url().'foto/foto_banner/';
  }

  function daftar($limit, $offset){
    $this->db->select('judul, url, gambar');
    $this->db->from('banner');
    $this->db->limit($limit, $offset);
    $this->db->order_by("id_banner", "desc");
    $query = $this->db->get();
    return $query;
  }
  
  function tot_data($tabel){
    $query = $this->db->query("SELECT * FROM $tabel");
    return $query;
  }

  function tampil_link($offset,$limit){
    $query = $this->db->query("SELECT * FROM banner order by id_banner DESC LIMIT $offset,$limit");
    return $query;
  }
  
  function simpan_link(){
    $konfigurasi = array('allowed_types' =>'jpg|jpeg|gif|png|bmp',
			             'upload_path' => $this->gallerypath);
	$this->load->library('upload', $konfigurasi);
	$this->upload->do_upload();
	$datafile = $this->upload->data();

	$konfigurasi = array('source_image' => $datafile['full_path'],
                         'new_image' => $this->gallerypath . '/thumbnails',
			             'maintain_ration' => true,
			             'width' => 150,
		                 'height' =>60);

    $this->load->library('image_lib', $konfigurasi);
	$this->image_lib->resize();

	$judul = $this->input->post('judul');
	$url = $this->input->post('url');
	$tgl = date('Y-m-d');
	$gambar = $_FILES['userfile']['name'];

	$data = array('judul' => $judul,
			      'url' => $url,
                  'tgl_posting' => $tgl,
			      'gambar' => $gambar);
	$this->db->insert('banner', $data);
  }
  
  function tampil_edit($id){
    return $this->db->get_where('banner', array('id_banner' => $id))->row();
  }
  
  function ubah_link($id){
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
				           'width' => 150,
				           'height' =>60);

	  $this->load->library('image_lib', $konfigurasi);
	  $this->image_lib->resize();

	  $judul = $this->input->post('judul');
	  $url = $this->input->post('url');
	  $tgl = date('Y-m-d');
	  $gambar = $_FILES['userfile']['name'];

	  $data = array('judul' => $judul,
                    'url' => $url,
                    'tgl_posting' => $tgl,
			        'gambar' => $gambar);
      $this->db->where('id_banner', $id);
	  $this->db->update('banner', $data);
    }
    else{
	  $judul = $this->input->post('judul');
	  $url = $this->input->post('url');
	  $tgl = date('Y-m-d');

	  $data = array('judul' => $judul,
                    'url' => $url,
                    'tgl_posting' => $tgl);
      $this->db->where('id_banner', $id);
	  $this->db->update('banner', $data);
    }
  }
  
  function hapus_link($id){
    $this->db->where('id_banner', $id);
    $this->db->delete('banner');
  }

}
?>
