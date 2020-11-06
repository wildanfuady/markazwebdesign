<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li><a href="<?php echo base_url('markaz_admin/menu_utama'); ?>">Menu</a></li>
          <li>Ubah Menu</li>
        </ul>
       </div>
  </div>
<br>
<div class="scrool">
<?php
echo form_open_multipart('markaz_admin/ubah_menu/'.$menu->id_menu);
?>
  <div class="form-group">
    <?php 
	     echo form_label('Nama Menu', 'nama_menu'); 
	     $nama_menu = array('name' => 'nama_menu', 'class' => 'form-control', 'placeholder' => 'Masukan Nama Menu', 'value' => $menu->nama_menu);
	  echo form_input($nama_menu);
	  ?>
  </div>
  <div class="form-group">
    <?php 
       echo form_label('Link Menu', 'link_menu'); 
       $link_menu = array('name' => 'link_menu', 'class' => 'form-control', 'placeholder' => 'Masukan Link Menu', 'value' => $menu->link_menu);
    echo form_input($link_menu);
    ?>
  </div>
  <?php
  $kembali = array('type' => 'button', 'name' => 'kembali', 'class' => 'btn btn-default', 'onclick' => 'history.go(-1);');
  echo form_submit($kembali,'Kembali');
  echo " "; 
  $btn = array('type' => 'submit', 'name' => 'simpan', 'class' => 'btn btn-primary');
  echo form_submit($btn,'Ubah');
  
echo form_close();
?>
</div>