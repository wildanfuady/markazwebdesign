<?php
class M_instansi extends CI_Model{
  var $gallerypath;
  var $gallery_path_url;

  function __construct(){
    parent::__construct();

    $this->gallerypath = realpath(APPPATH . '../foto/foto_instansi');
	$this->gallery_path_url = base_url().'foto/foto_instansi/';
  }

  function instansi($limit){
    $this->db->select('*');
    $this->db->from('m_instansi');
    $this->db->limit($limit);
    $query = $this->db->get();
    return $query;
  }
  
  function ubah_instansi($id){
    $favicon_instansi = $_FILES['favicon_instansi']['name'];
	  $logo_instansi = $_FILES['logo_instansi']['name'];
	  
	  if(empty($logo_instansi) AND $favicon_instansi){
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

	  $nama_instansi = $this->input->post('nama_instansi');
	  $about_instansi = $this->input->post('about_instansi');
	  $visi_instansi = $this->input->post('visi_instansi');
	  $misi_instansi = $this->input->post('misi_instansi');
	  $alamat_instansi = $this->input->post('alamat_instansi');
	  $email_instansi = $this->input->post('email_instansi');
	  $no_hp = $this->input->post('no_hp');
	  $favicon_instansi = $_FILES['favicon_instansi']['name'];

	  $data = array('nama_instansi' => $nama_instansi,
		   	        'about_instansi' => $about_instansi,
		   	        'visi_instansi' => $visi_instansi,
		   	        'misi_instansi' => $misi_instansi,
		   	        'alamat_instansi' => $alamat_instansi,
		   	        'email_instansi' => $email_instansi,
		   	        'no_hp' => $no_hp,
		   	        'favicon_instansi' => $favicon_instansi);
      $this->db->where('id_instansi', $id);
	  $this->db->update('m_instansi', $data);
    
    } else if(empty($favicon_instansi) AND $logo_instansi){
	
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

	  $nama_instansi = $this->input->post('nama_instansi');
	  $about_instansi = $this->input->post('about_instansi');
	  $visi_instansi = $this->input->post('visi_instansi');
	  $misi_instansi = $this->input->post('misi_instansi');
	  $alamat_instansi = $this->input->post('alamat_instansi');
	  $email_instansi = $this->input->post('email_instansi');
	  $no_hp = $this->input->post('no_hp');
	  $logo_instansi = $_FILES['logo_instansi']['name'];

	  $data = array('nama_instansi' => $nama_instansi,
		   	        'about_instansi' => $about_instansi,
		   	        'visi_instansi' => $visi_instansi,
		   	        'misi_instansi' => $misi_instansi,
		   	        'alamat_instansi' => $alamat_instansi,
		   	        'email_instansi' => $email_instansi,
		   	        'no_hp' => $no_hp,
		   	        'logo_instansi' => $logo_instansi);
      $this->db->where('id_instansi', $id);
	  $this->db->update('m_instansi', $data);
    
    } if($logo_instansi AND $favicon_instansi){
	
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

	  $nama_instansi = $this->input->post('nama_instansi');
	  $about_instansi = $this->input->post('about_instansi');
	  $visi_instansi = $this->input->post('visi_instansi');
	  $misi_instansi = $this->input->post('misi_instansi');
	  $alamat_instansi = $this->input->post('alamat_instansi');
	  $email_instansi = $this->input->post('email_instansi');
	  $no_hp = $this->input->post('no_hp');
	  $favicon_instansi = $_FILES['favicon_instansi']['name'];
	  $logo_instansi = $_FILES['logo_instansi']['name'];

	  $data = array('nama_instansi' => $nama_instansi,
		   	        'about_instansi' => $about_instansi,
		   	        'visi_instansi' => $visi_instansi,
		   	        'misi_instansi' => $misi_instansi,
		   	        'alamat_instansi' => $alamat_instansi,
		   	        'email_instansi' => $email_instansi,
		   	        'no_hp' => $no_hp,
		   	        'favicon_instansi' => $favicon_instansi,
		   	        'logo_instansi' => $logo_instansi);
      $this->db->where('id_instansi', $id);
	  $this->db->update('m_instansi', $data);
    
    } else {
      $nama_instansi = $this->input->post('nama_instansi');
	  $about_instansi = $this->input->post('about_instansi');
	  $visi_instansi = $this->input->post('visi_instansi');
	  $misi_instansi = $this->input->post('misi_instansi');
	  $alamat_instansi = $this->input->post('alamat_instansi');
	  $email_instansi = $this->input->post('email_instansi');
	  $no_hp = $this->input->post('no_hp');

	  $data = array('nama_instansi' => $nama_instansi,
		   	        'about_instansi' => $about_instansi,
		   	        'visi_instansi' => $visi_instansi,
		   	        'misi_instansi' => $misi_instansi,
		   	        'alamat_instansi' => $alamat_instansi,
		   	        'email_instansi' => $email_instansi,
		   	        'no_hp' => $no_hp);
      $this->db->where('id_instansi', $id);
	  $this->db->update('m_instansi', $data);

    }
 }
}
?>
