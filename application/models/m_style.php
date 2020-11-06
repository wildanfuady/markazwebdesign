<?php
class M_style extends CI_Model{

  function style($limit){
    $this->db->select('*');
    $this->db->from('m_style');
    $this->db->limit($limit);
    $query = $this->db->get();
    return $query;
  }
  
  function ubah_style($id){
      $header_color = $this->input->post('header_color');
	  $button_color = $this->input->post('button_color');
	  $footer1_color = $this->input->post('footer1_color');
	  $footer2_color = $this->input->post('footer2_color');

	  $data = array('header_color' => $header_color,
		   	        'button_color' => $button_color,
		   	        'footer1_color' => $footer1_color,
		   	        'footer2_color' => $footer2_color);
      $this->db->where('id_style', $id);
	  $this->db->update('m_style', $data);
  
}
}
?>
