<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li><a href="<?php echo base_url('markaz_admin/artikel'); ?>">Artikel</a></li>
          <li>Tambah Artikel</li>
        </ul>
       </div>
  </div>
<br>
<div class="scrool">
<?php
echo $editor; 
echo form_open_multipart('markaz_admin/tambah_artikel');
?>
  <div class="form-group">
    <?php 
    $id_random = rand(1111111, 9999999);
	$id_artikel = array('name' => 'id_artikel', 'type' => 'hidden', 'value' => $id_random, 'enabled');
	echo form_input($id_artikel);
	echo form_error('id_artikel');
	?>
  </div> 
  <div class="form-group">
    <?php 
	echo form_label('Judul', 'judul'); 
	$judul = array('name' => 'judul', 'class' => 'form-control', 'placeholder' => 'Masukan Judul Artikel');
	echo form_input($judul);
	echo form_error('judul');
	?>
  </div>
  <div class="form-group">
    <?php 
	echo form_label('Penulis', 'penulis'); 
	$penulis = array('name' => 'penulis', 'class' => 'form-control input-sm', 'placeholder' => 'Masukan Penulis Artikel');
	echo form_input($penulis);
	echo form_error('penulis');
	?>
  </div>
  <div class="form-group">
  	<?php 
		echo form_label('Kategori', 'kategori'); 
	?>
	<select name="kategori_id" class="form-control">
		<option value="">---Pilih Kategori--</option>
	<?php 
		foreach($kategori_id->result() as $row):
	?>
		<option value="<?php echo $row->id_kategori; ?>"><?php echo $row->nama_kategori; ?></option> 
	<?php
	endforeach;
	?>
	</select> 
  </div>
  <div class="form-group"> 
    <?php 
	echo form_label('Isi', 'isi'); 
	$isi = array('name' => 'isi', 'class' => 'form-control input-sm', 'id' => 'markaz_editor', 'rows' => '3', 'placeholder' => 'Tulis Berita');
	echo form_textarea($isi);
	echo form_error('isi');
	?>
  </div>
  <div class="form-group">
    <?php 
	echo form_label('Gambar', 'gambar'); 
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