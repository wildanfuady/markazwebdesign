<?php

class M_portofolio extends CI_Model {
	var $gallerypath;
  var $gallery_path_url;

  function __construct(){
    parent::__construct();

    $this->gallerypath = realpath(APPPATH . '../foto/foto_portofolio');
	$this->gallery_path_url = base_url().'foto/foto_portofolio/';
  }

	function tampil_portofolio(){
		
    $this->db->select('*');
    $this->db->from('m_portofolio');
    $query = $this->db->get();
    return $query;
  }

  function tampil_edit_portofolio($id){
    return $this->db->get_where('m_portofolio', array('id_portofolio' => $id))->row();
  }
  
  function simpan_portofolio(){
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

  $nama_project = $this->input->post('nama_project');
  $link_project = $this->input->post('link_project');
  $build_project = $this->input->post('build_project');
  $gambar_project = $_FILES['userfile']['name'];
  $data = array('nama_project' => $nama_project,
                'link_project' => $link_project,
                'build_project' => $build_project,
                'gambar_project' => $gambar_project);
  $this->db->insert('m_portofolio', $data);
  }
    else{
  $nama_project = $this->input->post('nama_project');
  $link_project = $this->input->post('link_project');
  $build_project = $this->input->post('build_project');
  $data = array('nama_project' => $nama_project,
                'link_project' => $link_project,
                'build_project' => $build_project);
  $this->db->insert('m_portofolio', $data);
   }
  }


  function edit_portofolio($id){
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

  $nama_project = $this->input->post('nama_project');
  $link_project = $this->input->post('link_project');
  $build_project = $this->input->post('build_project');
  $gambar_project = $_FILES['userfile']['name'];
  $data = array('nama_project' => $nama_project,
                'link_project' => $link_project,
                'build_project' => $build_project,
                'gambar_project' => $gambar_project);
  $this->db->insert('m_portofolio', $data);
  }
    else{
  $nama_project = $this->input->post('nama_project');
  $link_project = $this->input->post('link_project');
  $build_project = $this->input->post('build_project');
  $data = array('nama_project' => $nama_project,
                'link_project' => $link_project,
                'build_project' => $build_project);
  $this->db->where('id_portofolio', $id);
  $this->db->update('m_portofolio', $data);
   }
  }

  function delete_portofolio($id){
    $this->db->where('id_portofolio', $id);
    $this->db->delete('m_portofolio');
  }
} 