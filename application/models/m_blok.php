<?php
class M_blok extends CI_Model{

  function tampil_blok(){
    $query = $this->db->query("SELECT * FROM m_blok");
    return $query;
  }

  function tampil_blok_footer(){
    $query = $this->db->query("SELECT * FROM m_blok_footer");
    return $query;
  }

  function tampil_second_menu($id){
    $this->db->select('*');
    $this->db->from('m_menu_second');
    $this->db->where('blok_id', $id);
    $query = $this->db->get();
    return $query;
  }

  function tampil_social_media1($id){
    $this->db->select('*');
    $this->db->from('m_social_media');
    $this->db->where('status_aktif', $id);
    $query = $this->db->get();
    return $query;
  } 

  function tampil_social_media2($id){
    $this->db->select('*');
    $this->db->from('m_social_media');
    $this->db->where('status_aktif', $id);
    $query = $this->db->get();
    return $query;
  }

  function tampil_social_media3($id){
    $this->db->select('*');
    $this->db->from('m_social_media');
    $this->db->where('status_aktif', $id);
    $query = $this->db->get();
    return $query;
  }

  function tampil_social_media4($id){
    $this->db->select('*');
    $this->db->from('m_social_media');
    $this->db->where('status_aktif', $id);
    $query = $this->db->get();
    return $query;
  }


  function tampil_second_menu2($id){
    return $this->db->get_where('m_menu_second', array('blok_id' => $id))->row();
  }

  function tampil_second_menu3($id){
    return $this->db->get_where('m_menu_second', array('blok_id' => $id))->row();
  }

  function tampil_second_menu4($id){
    return $this->db->get_where('m_menu_second', array('blok_id' => $id))->row();
  }


  function ubah_blok($id){
    $nama_blok1 = $this->input->post('nama_blok1');
    $blok1 = $this->input->post('blok1');
    $nama_blok2 = $this->input->post('nama_blok2');
    $blok2 = $this->input->post('blok2');
    $nama_blok3 = $this->input->post('nama_blok3');
    $blok3 = $this->input->post('blok3');
    $nama_blok4 = $this->input->post('nama_blok4');
    $blok4 = $this->input->post('blok4');
    
    $data = array('nama_blok1' => $nama_blok1,
                  'blok1' => $blok1,
                  'nama_blok2' => $nama_blok2,
                  'blok2' => $blok2,
                  'nama_blok3' => $nama_blok3,
                  'blok3' => $blok3,
                  'nama_blok4' => $nama_blok4,
                  'blok4' => $blok4);
    
    $this->db->where('id_blok_footer', $id);
    $this->db->update('m_blok_footer', $data);
  }

}

?>
