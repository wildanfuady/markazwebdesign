<?php
class M_product extends CI_Model{

  function product(){
    $this->db->select('*');
    $this->db->from('m_product');
    $query = $this->db->get();
    return $query;
  }

  function tampil_product(){
    $query = $this->db->query("SELECT * FROM m_product");
    return $query;
  }

  function tampil_edit_product($id){
    return $this->db->get_where('m_product', array('id_product' => $id))->row();
  }
  
  function simpan_product(){

  $nama_product = $this->input->post('nama_product');
  $spec_product= $this->input->post('spec_product');
  $harga_product= $this->input->post('harga_product');
  $per_tahun_product= $this->input->post('per_tahun_product');
  $data = array('nama_product' => $nama_product,
                'spec_product' => $spec_product,
                'harga_product' => $harga_product,
                'per_tahun_product' => $per_tahun_product);
  $this->db->insert('m_product', $data);
  }

  function edit_product($id){
    $nama_product= $this->input->post('nama_product');
    $spec_product= $this->input->post('spec_product');
    $harga_product= $this->input->post('harga_product');
    $per_tahun_product= $this->input->post('per_tahun_product');
    
    $data = array('nama_product' => $nama_product,
                  'spec_product' => $spec_product,
                  'harga_product' => $harga_product,
                  'per_tahun_product' => $per_tahun_product);
    
    $this->db->where('id_product', $id);
    $this->db->update('m_product', $data);
  }

  function delete_product($id){
    $this->db->where('id_product', $id);
    $this->db->delete('m_product');
  }

}

?>
