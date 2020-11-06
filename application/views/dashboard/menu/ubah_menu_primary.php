<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li><a href="<?php echo base_url('markaz_admin/menu_primary'); ?>">Menu Primary</a></li>
          <li>Ubah Menu Primary</li>
        </ul>
       </div>
  </div>
<br>
<div class="scrool">
<?php
echo form_open_multipart('markaz_admin/ubah_menu_primary/'.$menu_primary->id_second_menu);
?>
  <div class="form-group">
    <?php 
	     echo form_label('Nama Menu Primary', 'second_menu'); 
	     $nama_menu_primary = array('name' => 'second_menu', 'class' => 'form-control', 'placeholder' => 'Masukan Nama Menu Primary', 'value' => $menu_primary->second_menu);
	  echo form_input($nama_menu_primary);
	  ?>
  </div>
  <div class="form-group">
    <?php 
       echo form_label('Link Menu', 'link_menu'); 
       $link_menu = array('name' => 'link_menu', 'class' => 'form-control', 'placeholder' => 'Masukan Link Menu', 'value' => $menu_primary->link_menu);
    echo form_input($link_menu);
    ?>
  </div>
  <div class="form-group">
      <?php 
        echo form_label('Lokasi Blok', 'blok_id');
     ?>
    <select name="blok_id" class="form-control">
      <option value="<?php echo $menu_primary->blok_id; ?>">Blok <?php echo $menu_primary->blok_id; ?></option>
      <option value="1">Blok 1</option>
      <option value="2">Blok 2</option>
      <option value="3">Blok 3</option>
      <option value="4">Blok 4</option>
    </select> 
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