<?php

class M_testimoni extends CI_Model {
	
	function tampil_testimoni(){
		
    $this->db->select('id_testimoni, isi_testimoni, who_is, owner');
    $this->db->from('m_testimoni');
    $query = $this->db->get();
    return $query;
  }

  function tampil_edit_testimoni($id){
    return $this->db->get_where('m_testimoni', array('id_testimoni' => $id))->row();
  }
  
  function simpan_testimoni(){

  $isi_testimoni = $this->input->post('isi_testimoni');
  $who_is = $this->input->post('who_is');
  $owner = $this->input->post('owner');
  $data = array('isi_testimoni' => $isi_testimoni,
  				'who_is' => $who_is,
  				'owner' => $owner);
  $this->db->insert('m_testimoni', $data);
  }

  function edit_testimoni($id){
  $isi_testimoni = $this->input->post('isi_testimoni');
  $who_is = $this->input->post('who_is');
  $owner = $this->input->post('owner');
  $data = array('isi_testimoni' => $isi_testimoni,
  				'who_is' => $who_is,
  				'owner' => $owner);
    $this->db->where('id_testimoni', $id);
    $this->db->update('m_testimoni', $data);
  }

  function delete_testimoni($id){
    $this->db->where('id_testimoni', $id);
    $this->db->delete('m_testimoni');
  }
} 