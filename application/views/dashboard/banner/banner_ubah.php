<h3 class="judul garis"><?php echo $jenis; ?></h3>
<div class="scrool">
<?php
echo form_open_multipart('c_admin/edit_link/'.$hasil->id_banner);
?>
  <div class="form-group">
    <?php 
	echo form_label('Nama Link', 'judul'); 
	$judul = array('name' => 'judul', 'class' => 'form-control input-sm', 'placeholder' => 'Masukan Nama Link', 'value' => $hasil->judul);
	echo form_input($judul);
	?>
  </div>
  <div class="form-group">
    <?php 
	echo form_label('URL', 'url'); 
	$url = array('name' => 'url', 'class' => 'form-control input-sm', 'placeholder' => 'Masukan Link URL', 'value' => $hasil->url);
	echo form_input($url);
	?>
  </div>
  <div class="form-group">
    <?php 
	echo form_label('Gambar Awal', 'gambar');
	?>
    <img class="media-object img-rounded" src="<?php echo base_url();?>foto/foto_banner/<?php echo $hasil->gambar; ?>" width="160" height="60" />
    <br />
    <?php
	echo form_label('Ganti Gambar', 'gambar');
	echo form_upload('userfile');
	?>
  </div>
  <?php
  $btn = array('type' => 'submit', 'name' => 'simpan', 'class' => 'btn btn-primary btn-sm');
  echo form_submit($btn,'Simpan');
  
echo form_close();
?>
</div>