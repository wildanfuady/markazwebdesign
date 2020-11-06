<?php

class M_users extends CI_Model {
	var $gallerypath;
  var $gallery_path_url;

  function __construct(){
    parent::__construct();

    $this->gallerypath = realpath(APPPATH . '../foto/foto_profile');
  $this->gallery_path_url = base_url().'foto/foto_profile/';
  }

	function tampil_users(){
		
    $this->db->select('*');
    $this->db->from('m_users');
    $query = $this->db->get();
    return $query;
  }

  function tampil_edit_users($id){
    return $this->db->get_where('m_users', array('id_user' => $id))->row();
  }
  
  function simpan_users(){
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
                   'width' => 200,
                   'height' =>200);

    $this->load->library('image_lib', $konfigurasi);
    $this->image_lib->resize();

  $username = $this->input->post('username');
  $nama_user = $this->input->post('nama_user');
  $bio = $this->input->post('bio');
  $pass = $this->input->post('password');
  $password = md5($pass);
  $jabatan = $this->input->post('jabatan');
  $foto_profile = $_FILES['userfile']['name'];
  $link_foto_profile = set_linkurlgambar($foto_profile); 
  $data = array('username' => $username,
                'nama_user' => $nama_user,
                'bio' => $bio,
                'password' => $password,
                'jabatan' => $jabatan,
                'foto_profile' => $link_foto_profile);
    $this->db->insert('m_users', $data);  
  }
    else{
 $username = $this->input->post('username');
  $nama_user = $this->input->post('nama_user');
  $bio = $this->input->post('bio');
  $pass = $this->input->post('password');
  $password = md5($pass);
  $jabatan = $this->input->post('jabatan');
  $data = array('username' => $username,
                'nama_user' => $nama_user,
                'bio' => $bio,
                'password' => $password,
                'jabatan' => $jabatan);
  $this->db->insert('m_users', $data);
   }
  }

  function edit_users($id){
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
                   'width' => 200,
                   'height' =>200);

    $this->load->library('image_lib', $konfigurasi);
    $this->image_lib->resize();

 $username = $this->input->post('username');
  $nama_user = $this->input->post('nama_user');
  $bio = $this->input->post('bio');
  $pass = $this->input->post('password');
  $password = md5($pass);
  $jabatan = $this->input->post('jabatan');
  $foto_profile = $_FILES['userfile']['name'];
  $link_foto_profile = set_linkurlgambar($foto_profile); 
  $data = array('username' => $username,
                'nama_user' => $nama_user,
                'bio' => $bio,
                'password' => $password,
                'jabatan' => $jabatan,
                'foto_profile' => $link_foto_profile);
    $this->db->where('id_user', $id);
    $this->db->update('m_users', $data);  
  }
    else{
 $username = $this->input->post('username');
  $nama_user = $this->input->post('nama_user');
  $bio = $this->input->post('bio');
  $pass = $this->input->post('password');
  $password = md5($pass);
  $jabatan = $this->input->post('jabatan');
  $data = array('username' => $username,
                'nama_user' => $nama_user,
                'bio' => $bio,
                'password' => $password,
                'jabatan' => $jabatan);
  $this->db->where('id_user', $id);
  $this->db->update('m_users', $data);
   }
  }

  function delete_users($id){
    $this->db->where('id_user', $id);
    $this->db->delete('m_users');
  }
} 