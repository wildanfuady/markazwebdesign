<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li><a href="<?php echo base_url('markaz_admin/kategori'); ?>">Kategori</a></li>
          <li>Ubah Kategori</li>
        </ul>
       </div>
  </div>
<br>
<div class="scrool">
<?php
echo form_open_multipart('markaz_admin/ubah_kategori/'.$kategori->id_kategori);
?>
  <div class="form-group">
    <?php 
	     echo form_label('Nama Kategori', 'nama_kategori'); 
	     $nama_kategori = array('name' => 'nama_kategori', 'class' => 'form-control', 'placeholder' => 'Masukan Nama Kategori', 'value' => $kategori->nama_kategori);
	  echo form_input($nama_kategori);
	  ?>
  </div>
  <?php
  $btn = array('type' => 'submit', 'name' => 'simpan', 'class' => 'btn btn-primary');
  echo form_submit($btn,'Ubah');
  
echo form_close();
?>
</div>