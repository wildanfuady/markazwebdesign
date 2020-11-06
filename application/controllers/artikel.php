<?php
class Artikel extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->helper('cleanurl_helper');
    $this->load->helper('tglindo_helper');
    $this->load->model('m_artikel');
    $this->load->model('m_statistik');
    $this->load->model('m_link');
    $this->load->model('m_kategori');
    $this->load->model('m_menu');
    $this->load->model('m_blok');
    $this->load->model('m_instansi');
  }
  
  function index(){
    
    $config['base_url'] = base_url().'/artikel/';
    $config['total_rows'] = $this->db->count_all('m_artikel');
    $config['per_page'] = 6;
    $config['num_links'] = 3;
  	$config['first_link'] = 'Awal';
  	$config['last_link'] = 'Akhir';
  	$config['next_link'] = 'Selanjutnya';
  	$config['prev_link'] = 'Sebelumnya';
    $this->pagination->initialize($config);
    $data['s_artikel'] = $this->db->get('m_artikel', $config['per_page'], $this->uri->segment(3));
    $data["paginator"] = $this->pagination->create_links();
    $data['post_popular'] = $this->m_artikel->post_popular(5);
    $data['kategori'] = $this->m_kategori->tampil_kategori();
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

    $data['counter'] = $this->m_statistik->counter_pengunjung('counter');
    setcookie("pengunjung", "sudah berkunjung", time() + 900 * 24);
    if (!isset($_COOKIE["pengunjung"])){
      $this->m_statistik->update_pengunjung();
    }
    $data["browser"] = $this->agent->browser().' '.$this->agent->version();
    $data['jenis'] = "Semua Artikel";
    $data['judul'] = "Semua Artikel";
    
    $this->load->view('v_template', $data);
  }

  function baca($link_judul){

    $cekurl = $this->m_artikel->cek($link_judul);
    
    if($cekurl == 0) {
      
      $data['heading'] = "GAGAL!";
      $data['message'] = "<p>Link yang anda cari tidak tersedia.</p>";
      $this->load->view('error/error_404.php', $data);

    } else {
    $config['base_url'] = base_url().'/artikel/';
    $config['total_rows'] = $this->db->count_all('m_artikel');
    $data['d_artikel'] = $this->m_artikel->detail_artikel($link_judul);
    $a = $data['d_artikel']->row();
    $b = $a->judul;
    $data['post_popular'] = $this->m_artikel->post_popular(5);
    $data['kategori'] = $this->m_kategori->tampil_kategori();
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

    $data['counter'] = $this->m_statistik->counter_pengunjung('counter');
    setcookie("pengunjung", "sudah berkunjung", time() + 900 * 24);
    if (!isset($_COOKIE["pengunjung"])){
      $this->m_statistik->update_pengunjung();
    }
    $data["browser"] = $this->agent->browser().' '.$this->agent->version();
    $data['jenis'] = "Detail Artikel";
	  $data['judul'] = $b;
    $this->load->view('v_template', $data);
  }
}
  function cari(){
    $page=$this->uri->segment(3);
    $batas=5;
  if(!$page):
    $offset = 0;
  else:
    $offset = $page;
  endif;
  
  $data['search']="";
  $post_kata = $this->input->post('search');
  if(!empty($post_kata)){
    $data['search'] = $this->input->post('search');
    $this->session->set_userdata('pencarian_judul', $data['search']);
  }
  else{
    $data['search'] = $this->session->userdata('pencarian_judul');
    }
    
  $data['search_berita'] = $this->m_artikel->cari_artikel($batas,$offset,$data['search']);
  $tot_hal = $this->m_artikel->tot_hal('m_artikel','judul',$data['search']);
  
  $config['base_url'] = base_url() . '/artikel/cari/';
  $config['total_rows'] = $tot_hal->num_rows();
  $config['per_page'] = $batas;
  $config['uri_segment'] = 3;
  $config['first_link'] = 'Awal';
  $config['last_link'] = 'Akhir';
  $config['next_link'] = 'Selanjutnya';
  $config['prev_link'] = 'Sebelumnya';
  $this->pagination->initialize($config);
  $data["paginator"] =$this->pagination->create_links();
  $data['post_popular'] = $this->m_artikel->post_popular(5);
  $data['instansi'] = $this->m_instansi->instansi(1);
  $data['menu'] = $this->m_menu->menu();
  $data['kategori'] = $this->m_kategori->kategori();
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

  $data['counter'] = $this->m_statistik->counter_pengunjung('counter');
    setcookie("pengunjung", "sudah berkunjung", time() + 900 * 24);
    if (!isset($_COOKIE["pengunjung"])){
      $this->m_statistik->update_pengunjung();
    }
  $data["browser"] = $this->agent->browser().' '.$this->agent->version();
  $data['jenis'] = 'Cari Artikel';
  $this->load->view('v_template', $data);
  }

}
?>