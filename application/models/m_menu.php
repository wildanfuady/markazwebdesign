<?php
class M_menu extends CI_Model{

  function menu(){
    $this->db->select('*');
    $this->db->from('m_menu');
    $query = $this->db->get();
    return $query;
  }

  function menu_primary(){
    $this->db->select('*');
    $this->db->from('m_menu_second');
    $query = $this->db->get();
    return $query;
  }

  function tampil_menu(){
    $query = $this->db->query("SELECT * FROM m_menu");
    return $query;
  }

  function tampil_menu_primary(){
    $query = $this->db->query("SELECT * FROM m_menu_second");
    return $query;
  }

  function tampil_edit_menu($id){
    return $this->db->get_where('m_menu', array('id_menu' => $id))->row();
  }

  function tampil_edit_menu_primary($id){
    return $this->db->get_where('m_menu_second', array('id_second_menu' => $id))->row();
  }
  
  function simpan_menu(){

  $nama_menu = $this->input->post('nama_menu');
  $link_menu = $this->input->post('link_menu');
  $data = array('nama_menu' => $nama_menu,
                'link_menu' => $link_menu);
  $this->db->insert('m_menu', $data);
  }

  function simpan_menu_primary(){

  $second_menu = $this->input->post('second_menu');
  $link_menu = $this->input->post('link_menu');
  $blok_id = $this->input->post('blok_id');
  $data = array('second_menu' => $second_menu,
                'link_menu' => $link_menu,
                'blok_id' => $blok_id);
  $this->db->insert('m_menu_second', $data);
  }

  function edit_menu($id){
    $nama_menu = $this->input->post('nama_menu');
    $link_menu = $this->input->post('link_menu');
    
    $data = array('nama_menu' => $nama_menu,
                'link_menu' => $link_menu);
    $this->db->where('id_menu', $id);
    $this->db->update('m_menu', $data);
  }

  function edit_menu_primary($id){
    $second_menu = $this->input->post('second_menu');
    $link_menu = $this->input->post('link_menu');
    $blok_id = $this->input->post('blok_id');
    $data = array('second_menu' => $second_menu,
                  'link_menu' => $link_menu,
                  'blok_id' => $blok_id);
    $this->db->where('id_second_menu', $id);
    $this->db->update('m_menu_second', $data);
  }

  function delete_menu($id){
    $this->db->where('id_menu', $id);
    $this->db->delete('m_menu');
  }

  function delete_menu_primary($id){
    $this->db->where('id_menu_second', $id);
    $this->db->delete('m_menu_second');
  }

}

?>
