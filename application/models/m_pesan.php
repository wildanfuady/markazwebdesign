<?php
class M_pesan extends CI_Model{

  function pesan(){
    $this->db->select('*');
    $this->db->from('m_hubungi_kami');
    $query = $this->db->get();
    return $query;
  }

  function tampil_pesan(){
    $query = $this->db->query("SELECT * FROM m_hubungi_kami");
    return $query;
  }

  function tampil_edit_pesan($id){
    return $this->db->get_where('m_hubungi_kami', array('id_hubungi_kami' => $id))->row();
  }
  
  function kirim_pesan(){

  $nama = $this->input->post('nama');
  $subjek = $this->input->post('subjek');
  $email = $this->input->post('email');
  $pesan = $this->input->post('pesan');

  $this->email->to($email);
  $this->email->from('admin@markazwebdesign.net','Markaz Web Design');
  $this->email->subject($subjek);
  $this->email->message($pesan);
  $this->email->send();
  }

  function delete_pesan($id){
    $this->db->where('id_hubungi_kami', $id);
    $this->db->delete('m_hubungi_kami');
  }

}

?>
