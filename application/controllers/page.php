<?php
class Page extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->helper('cleanurl_helper');
    $this->load->helper('tglindo_helper');
    $this->load->model('m_page');
    $this->load->model('m_statistik');
    $this->load->model('m_link');
    $this->load->model('m_artikel');
    $this->load->model('m_kategori');
    $this->load->model('m_menu');
    $this->load->model('m_blok');
    $this->load->model('m_instansi');
  }
  
  function index(){

    $data['heading'] = "GAGAL!";
    $data['message'] = "<p>Link yang anda cari tidak tersedia.</p>";
    $this->load->view('error/error_404.php', $data);
    
  }

  function view($link_page){

    $cekurl = $this->m_page->cek($link_page);
    
    if($cekurl == 0) {
      
      $data['heading'] = "GAGAL!";
      $data['message'] = "<p>Link yang anda cari tidak tersedia.</p>";
      $this->load->view('error/error_404.php', $data);

    } else {

    $data['d_page'] = $this->m_page->detail_page($link_page);
    $data['counter'] = $this->m_statistik->counter_pengunjung('counter');
    setcookie("pengunjung", "sudah berkunjung", time() + 900 * 24);
    if (!isset($_COOKIE["pengunjung"])){
      $this->m_statistik->update_pengunjung();
    }
    $data['kategori'] = $this->m_kategori->tampil_kategori();
    $data['post_popular'] = $this->m_artikel->post_popular(5);
    $data['instansi'] = $this->m_instansi->instansi(1);
    $data['menu'] = $this->m_menu->menu();
    $data['blok_footer'] = $this->m_blok->tampil_blok_footer();
    $data['second_menu1'] = $this->m_blok->tampil_second_menu(1);
    $data['second_menu2'] = $this->m_blok->tampil_second_menu(2);
    $data['second_menu3'] = $this->m_blok->tampil_second_menu(3);
    $data['second_menu4'] = $this->m_blok->tampil_second_menu(4);
    $data['social_media1'] = $this->m_blok->tampil_social_media1(1);
    $data['social_media2'] = $this->m_blok->tampil_social_media2(1);
    $data['social_media3'] = $this->m_blok->tampil_social_media2(1);
    $data['social_media4'] = $this->m_blok->tampil_social_media2(1);
    $data["browser"] = $this->agent->browser().' '.$this->agent->version();
    $data['jenis'] = 'Detail Page';
  
    $this->load->view('v_template', $data);
  }
}

}
?>