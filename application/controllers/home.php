<?php
class Home extends CI_Controller{

  function __construct(){
    parent::__construct();
      $this->load->model('m_instansi');
      $this->load->model('m_hubungi_kami');
	    $this->load->model('m_testimoni');
      $this->load->model('m_statistik');
      $this->load->model('m_pesan');
      $this->load->model('m_menu');
      $this->load->model('m_product');
      $this->load->model('m_blok');
      $this->load->model('m_whyme');
      $this->load->model('m_page_builder');
      $this->load->model('m_portofolio');
      $this->load->helper('rupiah_helper');
  }

  function index(){
    $data['jenis'] = "Beranda";
    $data['judul'] = "Jasa Pembuatan Website Murah dan Berkualitas";
	  $data['testimoni'] = $this->m_testimoni->tampil_testimoni(1);
    $data['product'] = $this->m_product->tampil_product(3);
    $data['profile'] = $this->m_instansi->instansi(1);
    $data['whyme'] = $this->m_whyme->whyme();
    $data['instansi'] = $this->m_instansi->instansi(1);
    $data['menu'] = $this->m_menu->menu();
    $data['blok'] = $this->m_blok->tampil_blok();
    $data['blok_footer'] = $this->m_blok->tampil_blok_footer();
    $data['second_menu1'] = $this->m_blok->tampil_second_menu(1);
    $data['second_menu2'] = $this->m_blok->tampil_second_menu(2);
    $data['second_menu3'] = $this->m_blok->tampil_second_menu(3);
    $data['second_menu4'] = $this->m_blok->tampil_second_menu(4);
    $data['social_media1'] = $this->m_blok->tampil_social_media1(1);
    $data['social_media2'] = $this->m_blok->tampil_social_media2(1);
    $data['social_media3'] = $this->m_blok->tampil_social_media2(1);
    $data['social_media4'] = $this->m_blok->tampil_social_media2(1);
    $data['setting'] = $this->m_page_builder->page_builder(1);
    $data['portofolio'] = $this->m_portofolio->tampil_portofolio();
    $data['counter'] = $this->m_statistik->counter_pengunjung('counter');
    setcookie("pengunjung", "sudah berkunjung", time() + 900 * 24);
    if (!isset($_COOKIE["pengunjung"])){
      $this->m_statistik->update_pengunjung();
    }
    $data["browser"] = $this->agent->browser().' '.$this->agent->version();
    $this->load->view('v_template', $data);
  }
  
}
?>
