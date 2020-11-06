<?php
class Markaz_admin extends CI_Controller{
  
  function __construct(){
    parent::__construct();

    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      redirect('login');
    }

    # Load model, helper dan library
    $this->load->model('m_login');
    $this->load->model('m_instansi');
    $this->load->model('m_artikel');
    $this->load->model('m_hubungi_kami');
    $this->load->model('m_kategori');
    $this->load->model('m_testimoni');
    $this->load->model('m_menu');
    $this->load->model('m_pesan');
    $this->load->model('m_link');
    $this->load->model('m_product');
    $this->load->model('m_whyme');
    $this->load->model('m_style');
    $this->load->model('m_page');
    $this->load->model('m_page_builder');
    $this->load->model('m_blok');
    $this->load->model('m_users');
    $this->load->model('m_portofolio');
    $this->load->library('email');
    $this->load->helper('cleanurl_helper');
  }
  
  // Home  

  function index()
    {
        $data['jenis']="Beranda";
        $this->load->view('dashboard/home', $data);
    }
  
  // Setting

  function page_builder($id=NULL)
    {
      if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        if ($_POST==NULL)
        {
          $data['style'] = $this->m_style->style(1);
          $data['page_builder'] = $this->m_page_builder->page_builder(1);
          $data['instansi'] = $this->m_instansi->instansi(1);
          $data['blok'] = $this->m_blok->tampil_blok();
          $data['blok_footer'] = $this->m_blok->tampil_blok_footer();
          $data['editor'] = $this->editor_tinymce();
          $data['jenis'] = 'Page Builder';
          $this->load->view('dashboard/home', $data);
        }
        else
        {
          $this->m_page_builder->ubah_page_builder($id);
          redirect('markaz_admin/page_builder');
        }
      }
    }  

  // Instansi

  function ubah_instansi($id=NULL)
  {
      if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        if ($_POST==NULL)
        {
          $data['instansi'] = $this->m_instansi->instansi(1);
          $data['editor'] = $this->editor_tinymce();
          $data['jenis'] = 'Page Builder';
          $this->load->view('dashboard/home', $data);
        }
        else
        {
          $this->m_instansi->ubah_instansi($id);
          redirect('markaz_admin/page_builder');
        }
      }
    }

  // Style

  function ubah_style($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        if ($_POST==NULL)
        {
          $data['style'] = $this->m_style->style(1);
          $data['jenis'] = 'Page Builder';
          $this->load->view('dashboard/home', $data);
        }
        else{
          $this->m_style->ubah_style($id);
          redirect('markaz_admin/page_builder');
        }
      }
    }

  // Ubah Blok

  function ubah_blok($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        if ($_POST==NULL)
        {
          $data['blok'] = $this->m_blok->tampil_blok();
          $data['blok_footer'] = $this->m_blok->tampil_blok_footer();
          $data['jenis'] = 'Page Builder';
          $this->load->view('dashboard/home', $data);
        }
        else{
          $this->m_blok->ubah_blok($id);
          redirect('markaz_admin/page_builder');
        }
      }
    }

  // Users
  
  function users()
  {

    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $data['users'] = $this->m_users->tampil_users();
        $data['editor'] = $this->editor_tinymce();
        $data['jenis'] = 'Users';
        
        $this->load->view('dashboard/home', $data);
      }
  }

  // Tambah Users

  function tambah_users()
  {
    if($this->session->userdata('jabatan') != 'ADMIN') { 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
          $this->form_validation->set_rules('username', 'Username', 'required');
          $this->form_validation->set_rules('nama_users', 'Nama Users', 'required');
          $this->form_validation->set_rules('bio', 'Bio', 'required');
          $this->form_validation->set_rules('password', 'Password', 'required');
          $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
       
          if ($this->form_validation->run() == TRUE) 
          {
            if ($this->input->post('simpan')) 
            {
              $this->m_users->simpan_users();
              redirect('markaz_admin/users');
            }
          }
        $data['jenis'] = 'Tambah Users';
        $data['editor'] = $this->editor_tinymce();
        $this->load->view('dashboard/home', $data);
      }    
    }

  // Edit Users

  function edit_users($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        if ($_POST==NULL)
        {
          $data['users'] = $this->m_users->tampil_edit_users($id);
          $data['editor'] = $this->editor_tinymce();
          $data['jenis'] = 'Ubah Users';
          $this->load->view('dashboard/home', $data);
        }
        else
        {
          $this->m_users->edit_users($id);
          redirect('markaz_admin/users');
        }
      }
    }

  // Hapus Users

  function hapus_users($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->m_users->delete_users($id);
        redirect('markaz_admin/users');
      }
    }

  // Portofolio

  function portofolio() 
  {

    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $data['portofolio'] = $this->m_portofolio->tampil_portofolio();
        $data['jenis'] = 'Portofolio';
        
        $this->load->view('dashboard/home', $data);
      }
    }

  // Tambah Portofolio

  function tambah_portofolio()
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
          $this->form_validation->set_rules('nama_project', 'Nama Project', 'required');
          $this->form_validation->set_rules('link_project', 'Link Project', 'required');
          $this->form_validation->set_rules('build_project', 'Build Project', 'required');
       
          if ($this->form_validation->run() == TRUE) {

              if ($this->input->post('simpan')) {
                $this->m_portofolio->simpan_portofolio();
                redirect('markaz_admin/portofolio');
          }
        }

        $data['jenis'] = 'Tambah Portofolio';
        $this->load->view('dashboard/home', $data);
      }
    }

  // Ubah Portofolio

  function ubah_portofolio($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        if ($_POST==NULL)
        {
            $data['portofolio'] = $this->m_portofolio->tampil_edit_portofolio($id);
            $data['jenis'] = 'Ubah Portofolio';
            $this->load->view('dashboard/home', $data);
        }
        else
        {
          $this->m_portofolio->edit_portofolio($id);
          redirect('markaz_admin/portofolio');
        }
      }
    }

  // Hapus Portofolio 

  function hapus_portofolio($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->m_portofolio->delete_portofolio($id);
        redirect('markaz_admin/portofolio');
      }
    }

  // Kategori
  
  function kategori()
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $data['kategori'] = $this->m_kategori->tampil_kategori();
        $data['jenis'] = 'Kategori';
        
        $this->load->view('dashboard/home', $data);
      }
    }

  // Tambah Kategori

  function tambah_kategori()
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');

        if ($this->form_validation->run() == TRUE) 
        {
          if ($this->input->post('simpan')) 
          {
            $this->m_kategori->simpan_kategori();
            redirect('markaz_admin/kategori');
          }
          else
          {
          $this->m_kategori->simpan_kategori();
          redirect('markaz_admin/kategori');
          }
        }
      }
    }

  // Ubah Kategori

  function ubah_kategori($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        if ($_POST==NULL)
        {
          $data['kategori'] = $this->m_kategori->tampil_edit_kategori($id);
          $data['jenis'] = 'Ubah Kategori';
          $this->load->view('dashboard/home', $data);
        }
        else
        {
          $this->m_kategori->edit_kategori($id);
          redirect('markaz_admin/kategori');
        }
      }
    }

  // Hapus Kategori

  function hapus_kategori($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->m_kategori->delete_kategori($id);
        redirect('markaz_admin/kategori');
      }
    }

  // Testimoni

  function testimoni() 
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $data['testimoni'] = $this->m_testimoni->tampil_testimoni();
        $data['jenis'] = 'Testimoni';
        
        $this->load->view('dashboard/home', $data);
      }
    }

  // Tambah Testimoni

  function tambah_testimoni()
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->form_validation->set_rules('isi_testimoni', 'Isi Testimoni', 'required');
        $this->form_validation->set_rules('who_is', 'Who Is', 'required');
        $this->form_validation->set_rules('owner', 'Owner', 'required');

         if ($this->form_validation->run() == TRUE) 
         {
            if ($this->input->post('simpan')) 
            {
              $this->m_testimoni->simpan_testimoni();
              redirect('markaz_admin/testimoni');
            }
          }
        $data['jenis'] = 'Tambah Testimoni';
        $data['editor'] = $this->editor_tinymce();
        $this->load->view('dashboard/home', $data);
      }
    }

  // Ubah Testimoni

  function ubah_testimoni($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        if ($_POST==NULL)
        {
          $data['testimoni'] = $this->m_testimoni->tampil_edit_testimoni($id);
          $data['jenis'] = 'Ubah Testimoni';
          $data['editor'] = $this->editor_tinymce();
          $this->load->view('dashboard/home', $data);
        }
        else
        {
            $this->m_testimoni->edit_testimoni($id);
            redirect('markaz_admin/testimoni');
        }
      }
    }

  // Hapus Testimoni

  function hapus_testimoni($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->m_testimoni->delete_testimoni($id);
        redirect('markaz_admin/testimoni');
      }
    }

  // Menu Utama

  function menu_utama() 
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $data['menu'] = $this->m_menu->tampil_menu();
        $data['jenis'] = 'Menu';
        
        $this->load->view('dashboard/home', $data);
      }
  }

  // Tambah Menu Utama

  function tambah_menu()
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required');
        $this->form_validation->set_rules('link_menu', 'Link Menu', 'required');

        if ($this->form_validation->run() == TRUE) 
        {
          if ($this->input->post('simpan')) 
          {
            $this->m_menu->simpan_menu();
            redirect('markaz_admin/menu');
          }
          else
          {
            $this->m_menu->simpan_menu();
            redirect('markaz_admin/menu');
          }
        }
      }
    }

  // Ubah Menu Utama

  function ubah_menu($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        if ($_POST==NULL)
        {
          $data['menu'] = $this->m_menu->tampil_edit_menu($id);
          $data['jenis'] = 'Ubah Menu';
          $this->load->view('dashboard/home', $data);
        }
        else
        {
          $this->m_menu->edit_menu($id);
          redirect('markaz_admin/menu_utama');
        }
      }
    }

  // Hapus Menu Utama
  
  function hapus_menu($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->m_menu->delete_menu($id);
        redirect('markaz_admin/menu');
      }
    }

  // Menu Primary

  function menu_primary()
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $data['menu_primary'] = $this->m_menu->tampil_menu_primary();
        $data['jenis'] = 'Menu Primary';
        
        $this->load->view('dashboard/home', $data);
      }
    }

  // Tambah Menu Primary

  function tambah_menu_primary()
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->form_validation->set_rules('second_menu', 'Second Menu Menu', 'required');
        $this->form_validation->set_rules('link_menu', 'Link Menu', 'required');
        $this->form_validation->set_rules('blok_id', 'Blok Id', 'required');

        if ($this->form_validation->run() == TRUE) 
        {
          if ($this->input->post('simpan')) 
          {
            $this->m_menu->simpan_menu_primary();
            redirect('markaz_admin/menu_primary');
          }
          else
          {
          $this->m_menu->simpan_menu_primary();
          redirect('markaz_admin/menu_primary');
          }
        }
      }
    }

  // Ubah Menu Primary

  function ubah_menu_primary($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        if ($_POST==NULL)
        {
          $data['menu_primary'] = $this->m_menu->tampil_edit_menu_primary($id);
          $data['jenis'] = 'Ubah Menu Primary';
          $this->load->view('dashboard/home', $data);
        }
        else
        {
          $this->m_menu->edit_menu_primary($id);
          redirect('markaz_admin/menu_primary');
        }
      }
    }

  // Hapus Menu Primary

  function hapus_menu_primary($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->m_menu->delete_menu_primary($id);
        redirect('markaz_admin/menu_primary');
      }
    }

  // Pesan

  function pesan() 
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $data['pesan'] = $this->m_pesan->tampil_pesan();
        $data['jenis'] = 'Pesan';
        
        $this->load->view('dashboard/home', $data);
      }
    }

  // Balas Pesan

  function balas_pesan($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        if ($_POST==NULL)
        {
          $data['pesan'] = $this->m_pesan->tampil_edit_pesan($id);
          $data['jenis'] = 'Balas Pesan';
          $this->load->view('dashboard/home', $data);
        }
        else
        {
          $this->m_pesan->kirim_pesan();
          redirect('markaz_admin/pesan');
        }
      }
    }

  // Hapus Pesan

  function hapus_pesan($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->m_pesan->delete_pesan($id);
        redirect('markaz_admin/pesan');
      }
    }

  function artikel() 
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $data['hasil'] = $this->m_artikel->tampil_artikel();
        $data['jenis'] = 'Artikel';
      
        $this->load->view('dashboard/home', $data);
      }
    }
  
  // Tambah Artikel

  function tambah_artikel()
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('kategori_id', 'Id Kategori', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        
        if ($this->form_validation->run() == TRUE) 
        {
          if ($this->input->post('simpan')) 
          {
            $this->m_artikel->simpan_artikel();
            redirect('markaz_admin/artikel');
          }
        }
        $data['jenis'] = 'Tambah Artikel';
        $data['editor'] = $this->editor_tinymce();
        $data['kategori_id'] = $this->m_kategori->kategori();  
        $this->load->view('dashboard/home', $data);
      }
    }
  
  // Edit Artikel

  function edit_artikel($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        if ($_POST==NULL)
        {
          $data['artikel'] = $this->m_artikel->tampil_edit_artikel($id);
          $data['jenis'] = 'Ubah Artikel';
          $data['editor'] = $this->editor_tinymce();
          $data['kategori_id'] = $this->m_kategori->kategori(); 
          $this->load->view('dashboard/home', $data);
        }
        else
        {
          $this->m_artikel->ubah_artikel($id);
          redirect('markaz_admin/artikel');
        }
      }
    }
  
  // Hapus Artikel

  function delete_artikel($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->m_artikel->hapus_artikel($id);
        redirect('markaz_admin/artikel');
      }
    }

  // Page

  function page() 
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $data['page'] = $this->m_page->tampil_page();
        $data['jenis'] = 'Page';
      
        $this->load->view('dashboard/home', $data);
      }
    }
  
  // Tambah page

  function tambah_page()
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->form_validation->set_rules('id_page', 'Id Page', 'required');
        $this->form_validation->set_rules('judul_page', 'Judul Page', 'required');
        $this->form_validation->set_rules('penulis_page', 'Nama Penulis', 'required');
        $this->form_validation->set_rules('isi_page', 'Isi Page', 'required');
        
        if ($this->form_validation->run() == TRUE) 
        {
          if ($this->input->post('simpan')) 
          {
            $this->m_page->simpan_page();
            redirect('markaz_admin/page');
          }
        }
        $data['jenis'] = 'Tambah Page';
        $data['editor'] = $this->editor_tinymce();  
        $this->load->view('dashboard/home', $data);
      }
    }
  
  // Edit Page

  function edit_page($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        if ($_POST==NULL){
          $data['page'] = $this->m_page->tampil_edit_page($id);
          $data['jenis'] = 'Ubah Page';
          $data['editor'] = $this->editor_tinymce();
          $this->load->view('dashboard/home', $data);
        }
        else
        {
          $this->m_page->ubah_page($id);
          redirect('markaz_admin/page');
        }
      }
    }
  
  // Hapus Page

  function delete_page($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->m_page->hapus_page($id);
        redirect('markaz_admin/page');
      }
    }

  // Whyme

  function whyme() 
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $data['whyme'] = $this->m_whyme->tampil_whyme();
        $data['editor'] = $this->editor_tinymce();
        $data['jenis'] = 'Whyme';
        
        $this->load->view('dashboard/home', $data);
      }
    }

  // Tambah Whyme

  function tambah_whyme()
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->form_validation->set_rules('fitur', 'Fitur', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        
        if ($this->form_validation->run() == TRUE) 
        {
          if ($this->input->post('simpan')) 
          {
            $this->m_whyme->simpan_whyme();
            redirect('markaz_admin/whyme');
          }
        }
        $data['jenis'] = 'Tambah Whyme';
        $data['editor'] = $this->editor_tinymce();
        $this->load->view('dashboard/home', $data);
      }
    }

  // Ubah Whyme

  function ubah_whyme($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        if ($_POST==NULL)
        {
          $data['whyme'] = $this->m_whyme->tampil_edit_whyme($id);
          $data['jenis'] = 'Ubah Whyme';
          $this->load->view('dashboard/home', $data);
        }
        else
        {
          $this->m_whyme->edit_whyme($id);
          redirect('markaz_admin/whyme');
        }
      }
    }

  // Hapus Whyme
  function hapus_whyme($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->m_whyme->delete_whyme($id);
        redirect('markaz_admin/whyme');
      }
    }

  // Product

  function product()
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $data['product'] = $this->m_product->tampil_product(10);
        $data['editor'] = $this->editor_tinymce();
        $data['jenis'] = 'Product';
        
        $this->load->view('dashboard/home', $data);
      }
    }

  // Tambah Product

  function tambah_product()
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->form_validation->set_rules('nama_product', 'Nama Product', 'required');
        $this->form_validation->set_rules('spec_product', 'Spesifikasi Product', 'required');
        $this->form_validation->set_rules('harga_product', 'Harga Product', 'required');

        
        if ($this->form_validation->run() == TRUE) 
        {
          if ($this->input->post('simpan')) 
          {
            $this->m_product->simpan_product();
            redirect('markaz_admin/product');
          }
        }
        $data['jenis'] = 'Tambah Product';
        $data['editor'] = $this->editor_tinymce();
        $this->load->view('dashboard/home', $data);
      }
    }

  function ubah_product($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        if ($_POST==NULL)
        {
          $data['product'] = $this->m_product->tampil_edit_product($id);
          $data['jenis'] = 'Ubah Product';
          $data['editor'] = $this->editor_tinymce();
          $this->load->view('dashboard/home', $data);
        }
        else
        {
          $this->m_product->edit_product($id);
          redirect('markaz_admin/product');
        }
      }
    }

  // Hapus Product

  function hapus_product($id=NULL)
  {
    if($this->session->userdata('jabatan') != 'ADMIN'){ 
      ?>
        <script type="text/javascript" language="javascript">
          alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
        </script>
          <?php
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
      }
      else 
      {
        $this->m_product->delete_product($id);
        redirect('markaz_admin/product');
      }
    }

  // Email

  function email()
  {
    $email = $this->input->post('email');
    $nama = $this->input->post('nama');
    $subjek = $this->input->post('subjek');
    $pesan = $this->input->post('kirim_balasan');
    $url = $_SERVER['HTTP_REFERER'];
    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'wildanfuady@gmail.com', //isi dengan gmailmu!
      'smtp_pass' => '******', //isi dengan password gmailmu!
      'mailtype' => 'html',
      'charset' => 'iso-8859-1',
      'wordwrap' => TRUE
    );
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from('wildanfuady@gmail.com', 'Wildan Fuady via Markaz Web Design');
    $this->email->to($email); //email tujuan. Isikan dengan emailmu!
    $this->email->subject($subjek);
    $this->email->message($pesan);
    if($this->email->send())
    {
      echo 'Email sent. <a href="'.$url.'">KEMBALI</a>';
    }
    else
    {
      show_error($this->email->print_debugger());
    }
  } 

  private function editor_tinymce(){
  return '<script type="text/javascript" src="'.base_url().'tinymce/tinymce.min.js"></script>
          <script type="text/javascript">
            tinymce.init({
              selector: "textarea#markaz_editor",
              theme: "modern",
              width: 580,
              height: 200,
              plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
              ],
              content_css: "'.base_url().'tinymce/themes/modern/theme.min",
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
              style_formats: [
                {title: "Bold text", inline: "b"},
                {title: "Red text", inline: "span", styles: {color: "#ff0000"}},
                {title: "Red header", block: "h1", styles: {color: "#ff0000"}},
                {title: "Example 1", inline: "span", classes: "example1"},
                {title: "Example 2", inline: "span", classes: "example2"},
                {title: "Table styles"},
                {title: "Table row 1", selector: "tr", classes: "tablerow1"}
              ]
            });
          </script>';
  }

}
?>