<?php
class M_whyme extends CI_Model{

  function whyme(){
    $this->db->select('*');
    $this->db->from('m_whyme');
    $query = $this->db->get();
    return $query;
  }

  function tampil_whyme(){
    $query = $this->db->query("SELECT * FROM m_whyme");
    return $query;
  }

  function tampil_edit_whyme($id){
    return $this->db->get_where('m_whyme', array('id_whyme' => $id))->row();
  }
  
  function simpan_whyme(){

  $fitur = $this->input->post('fitur');
  $deskripsi= $this->input->post('deskripsi');
  $icon= $this->input->post('icon');
  $data = array('fitur' => $fitur,
                'deskripsi' => $deskripsi,
                'icon' => $icon);
  $this->db->insert('m_whyme', $data);
  }

  function edit_whyme($id){
    $fitur = $this->input->post('fitur');
  $deskripsi= $this->input->post('deskripsi');
  $icon= $this->input->post('icon');
  $data = array('fitur' => $fitur,
                'deskripsi' => $deskripsi,
                'icon' => $icon);
    
    $this->db->where('id_whyme', $id);
    $this->db->update('m_whyme', $data);
  }

  function delete_whyme($id){
    $this->db->where('id_whyme', $id);
    $this->db->delete('m_whyme');
  }

}

?>
