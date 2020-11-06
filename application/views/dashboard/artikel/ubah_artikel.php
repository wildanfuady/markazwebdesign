<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li><a href="<?php echo base_url('markaz_admin/artikel'); ?>">Artikel</a></li>
          <li>Ubah Artikel</li>
        </ul>
       </div>
  </div>
<br>
<div class="scrool">
<?php
echo $editor; 
echo form_open_multipart('markaz_admin/edit_artikel/'.$artikel->id_artikel);
?>
  <div class="form-group">
    <?php
  $id_artikel = array('name' => 'id_artikel', 'type' => 'hidden', 'value' => $artikel->id_artikel, 'enabled');
  echo form_input($id_artikel);
  echo form_error('id_artikel');
  ?>
  </div>
  <div class="form-group">
    <?php 
	echo form_label('Judul', 'judul'); 
	$judul = array('name' => 'judul', 'class' => 'form-control input-sm', 'placeholder' => 'Masukan Judul Berita', 'value' => $artikel->judul);
	echo form_input($judul);
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
	echo form_label('Penulis', 'penulis'); 
	$penulis = array('name' => 'penulis', 'class' => 'form-control input-sm', 'placeholder' => 'Masukan Penulis Berita', 'value' => $artikel->penulis);
	echo form_input($penulis);
	?>
  </div>
  <div class="form-group">
    <?php 
	echo form_label('Isi', 'isi'); 
	$isi = array('name' => 'isi', 'class' => 'form-control input-sm', 'id' => 'markaz_editor', 'rows' => '3', 'placeholder' => 'Tulis Berita', 'value' => $artikel->isi);
	echo form_textarea($isi);
	?>
  </div>
  <div class="form-group">
    <?php 
	echo form_label('Gambar Awal', 'gambar');
	
  if($artikel->gambar == ""){
    ?>
    <img class="media-object img-rounded" src="<?php echo base_url('foto/foto_artikel/no_image.jpg'); ?>" width="130" height="100" />
    <?php
  } else {
    ?>
    <img class="media-object img-rounded" src="<?php echo base_url();?>foto/foto_artikel/<?php echo $artikel->gambar; ?>" width="130" />
    <?php
    }
    ?>
    <br />
    <?php
	echo form_label('Ganti Gambar', 'gambar');
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