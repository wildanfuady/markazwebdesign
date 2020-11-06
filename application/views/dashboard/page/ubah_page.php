<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li><a href="<?php echo base_url('markaz_admin/page'); ?>">page</a></li>
          <li>Ubah Page</li>
        </ul>
       </div>
  </div>
<br>
<div class="scrool">
<?php
echo $editor; 
echo form_open_multipart('markaz_admin/edit_page/'.$page->id_page);
?>
  <div class="form-group">
    <?php 
	echo form_label('Judul Page', 'judul_page'); 
	$judul_page = array('name' => 'judul_page', 'class' => 'form-control input-sm', 'placeholder' => 'Masukan Judul Page', 'value' => $page->judul_page);
	echo form_input($judul_page);
	?>
  </div>
  <div class="form-group">
    <?php 
	$penulis_page = array('name' => 'penulis_page', 'type' => 'hidden', 'class' => 'form-control input-sm', 'placeholder' => 'Masukan Penulis Page', 'value' => $page->penulis_page);
	echo form_input($penulis_page);
	?>
  </div>
  <div class="form-group">
    <?php 
	echo form_label('Isi', 'isi'); 
	$isi_page = array('name' => 'isi_page', 'class' => 'form-control input-sm', 'id' => 'markaz_editor', 'rows' => '3', 'placeholder' => 'Tulis Page', 'value' => $page->isi_page);
	echo form_textarea($isi_page);
	?>
  </div>
  <div class="form-group">
    <?php 
	echo form_label('Foto Awal', 'foto_page');


    if($page->foto_page == ""){
    ?>
    <img class="media-object img-rounded" src="<?php echo base_url('foto/foto_page/no_image.jpg'); ?>" width="130" />
    <?php
  } else {
    ?>
    <img class="media-object img-rounded" src="<?php echo base_url();?>foto/foto_page/thumbnails/<?php echo $page->foto_page; ?>" width="130"  />
    <?php
    }
    ?>
    <br />
    <?php
	echo form_label('Ganti Foto', 'foto_page');
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