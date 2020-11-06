<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li><a href="<?php echo base_url('markaz_admin/page'); ?>">Page</a></li>
          <li>Tambah Page</li>
        </ul>
       </div>
  </div>
<br>
<div class="scrool">
<?php
echo $editor; 
echo form_open_multipart('markaz_admin/tambah_page');
?>
  <div class="form-group">
    <?php 
    $id_random = rand(1111111, 9999999);
	$id_page = array('name' => 'id_page', 'type' => 'hidden', 'value' => $id_random);
	echo form_input($id_page);
	echo form_error('id_page');
	?>
  </div>
  <div class="form-group">
    <?php 
	echo form_label('Judul Page', 'judul_page'); 
	$judul_page = array('name' => 'judul_page', 'class' => 'form-control', 'placeholder' => 'Masukan Judul Page');
	echo form_input($judul_page);
	echo form_error('judul_page');
	?>
  </div>
  <div class="form-group">
    <?php 
    $nama_user = $this->session->userdata('jabatan');
	$penulis_page = array('name' => 'penulis_page', 'type' => 'hidden', 'class' => 'form-control input-sm', 'value' => $nama_user);
	echo form_input($penulis_page);
	echo form_error('penulis_page');
	?>
  </div>
  <div class="form-group"> 
    <?php 
	echo form_label('Isi', 'isi_page'); 
	$isi_page = array('name' => 'isi_page', 'class' => 'form-control input-sm', 'id' => 'markaz_editor', 'rows' => '3', 'placeholder' => 'Tulis Page');
	echo form_textarea($isi_page);
	echo form_error('isi_page');
	?>
  </div>
  <div class="form-group">
    <?php 
	echo form_label('Foto', 'foto_page'); 
	echo form_upload('userfile');
	?>
  </div>
  <?php
  $kembali = array('type' => 'button', 'onclick' => 'history.go(-1);', 'class' => 'btn btn-default');
  echo form_submit($kembali,'Kembali');
  echo " ";
  $btn = array('type' => 'submit', 'name' => 'simpan', 'class' => 'btn btn-primary btn-sm');
  echo form_submit($btn,'Simpan');
  
echo form_close();
?>
</div>