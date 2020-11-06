<h3 class="judul garis"><?php echo $jenis; ?></h3>
<div class="scrool">
<?php
echo form_open_multipart('c_admin/edit_download/'.$hasil->id_download);
?>
  <div class="form-group">
    <?php 
	echo form_label('Judul', 'judul'); 
	$judul = array('name' => 'judul', 'class' => 'form-control input-sm', 'placeholder' => 'Masukan Judul', 'value' => $hasil->judul);
	echo form_input($judul);
	?>
  </div>
  <div class="form-group">
    <?php 
	echo form_label('File Download');
	echo "<br /><b>".$hasil->nama_file."</b>";
	?>
    <br />
    <br />
    <?php
	echo form_label('Rubah File Download');
	echo form_upload('userfile');
	?>
  </div>
  <?php
  $btn = array('type' => 'submit', 'name' => 'simpan', 'class' => 'btn btn-primary btn-sm');
  echo form_submit($btn,'Simpan');
  
echo form_close();
?>
</div>