<h3 class="judul garis"><?php echo $jenis; ?></h3>
<div class="scrool">
<?php 
echo form_open_multipart('c_admin/add_download');
?>
  <div class="form-group">
    <?php 
	echo form_label('Judul', 'judul'); 
	$judul = array('name' => 'judul', 'class' => 'form-control input-sm', 'placeholder' => 'Masukan Judul');
	echo form_input($judul);
	echo form_error('judul');
	?>
  </div>
  <div class="form-group">
    <?php 
	echo form_label('Nama File/Gambar', 'gambar'); 
	echo form_upload('userfile');
	?>
  </div>
  <?php
  $btn = array('type' => 'submit', 'name' => 'simpan', 'class' => 'btn btn-primary btn-sm');
  echo form_submit($btn,'Simpan');
  
echo form_close();
?>
</div>