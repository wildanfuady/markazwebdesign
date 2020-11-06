<?php
class M_download extends CI_Model{
  var $gallerypath;
  var $gallery_path_url;

  function __construct(){
    parent::__construct();
    $this->load->helper('tglindo_helper');

    $this->gallerypath = realpath(APPPATH . '../files');
	$this->gallery_path_url = base_url().'files/';
  }

  function download(){
    $this->db->select('id_download, judul, nama_file');
    $this->db->from('download');
    $query = $this->db->get();
    return $query;
  }
  
  function tot_data($tabel){
    $query = $this->db->query("SELECT * FROM $tabel");
    return $query;
  }

  function tampil_download($offset,$limit){
    $query = $this->db->query("SELECT * FROM download order by id_download DESC LIMIT $offset,$limit");
    return $query;
  }
  
  function simpan_download(){
    $konfigurasi = array('allowed_types' =>'jpg|jpeg|gif|png|bmp|rar|ppt|pdf|zip',
			             'upload_path' => $this->gallerypath,
                         'overwrite' => FALSE,
                         'remove_spaces' => TRUE,
                         'max_size' => '60000');
	$this->load->library('upload', $konfigurasi);
	$this->upload->do_upload();
	$datafile = $this->upload->data();

	$judul = $this->input->post('judul');
	$tgl = date('Y-m-d');
	$nama_file = $_FILES['userfile']['name'];

	$data = array('judul' => $judul,
                  'tgl_posting' => $tgl,
			      'nama_file' => 'files/'.$nama_file);
	$this->db->insert('download', $data);
  }
  
  function tampil_edit($id){
    return $this->db->get_where('download', array('id_download' => $id))->row();
  }

  function ubah_download($id){
    $userfile = $_FILES['userfile']['name'];
	if(!empty($userfile)){
      $konfigurasi = array('allowed_types' =>'jpg|jpeg|gif|png|bmp|rar|ppt|pdf|zip',
	  		               'upload_path' => $this->gallerypath,
                           'overwrite' => FALSE,
                           'remove_spaces' => TRUE,
                           'max_size' => '60000');
	  $this->load->library('upload', $konfigurasi);
	  $this->upload->do_upload();
	  $datafile = $this->upload->data();

	  $judul = $this->input->post('judul');
	  $tgl = date('Y-m-d');
	  $nama_file = $_FILES['userfile']['name'];

	  $data = array('judul' => $judul,
                    'nama_file' => 'files/'.$nama_file,
                    'tgl_posting' => $tgl);
      $this->db->where('id_download', $id);
	  $this->db->update('download', $data);
    }
    else{
	  $judul = $this->input->post('judul');
	  $tgl = date('Y-m-d');

	  $data = array('judul' => $judul,
                    'tgl_posting' => $tgl);
      $this->db->where('id_download', $id);
	  $this->db->update('download', $data);
    }
  }
  
  function hapus_download($id){
    $this->db->where('id_download', $id);
    $this->db->delete('download');
  }

}

?>
