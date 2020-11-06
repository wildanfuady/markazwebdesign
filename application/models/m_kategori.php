<?php
class M_kategori extends CI_Model{

  function kategori(){
    $this->db->select('*');
    $this->db->from('m_kategori');
    $query = $this->db->get();
    return $query;
  }

  function tampil_kategori(){
    $query = $this->db->query("SELECT * FROM m_kategori");
    return $query;
  }

  function tampil_edit_kategori($id){
    return $this->db->get_where('m_kategori', array('id_kategori' => $id))->row();
  }
  
  function simpan_kategori(){

  $nama_kategori = $this->input->post('nama_kategori');
  $data = array('nama_kategori' => $nama_kategori);
  $this->db->insert('m_kategori', $data);
  }

  function edit_kategori($id){
    $nama_kategori = $this->input->post('nama_kategori');
    
    $data = array('nama_kategori' => $nama_kategori);
    
    $this->db->where('id_kategori', $id);
    $this->db->update('m_kategori', $data);
  }

  function delete_kategori($id){
    $this->db->where('id_kategori', $id);
    $this->db->delete('m_kategori');
  }

}

?>
