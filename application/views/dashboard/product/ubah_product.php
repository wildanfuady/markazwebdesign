<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li><a href="<?php echo base_url('markaz_admin/portofolio'); ?>">Portofolio</a></li>
          <li>Ubah Product</li>
        </ul>
       </div>
  </div>
<br>
<div class="scrool">
<?php
echo $editor;
echo form_open_multipart('markaz_admin/ubah_product/'.$product->id_product);
?>
             <div class="form-group">
              <?php 
                echo form_label('Nama Product', 'nama_product'); 
                $nama_product = array('name' => 'nama_product', 'class' => 'form-control', 'placeholder' => 'Masukan Nama Product', 'value' => $product->nama_product);
              echo form_input($nama_product);
              echo form_error('nama_product');
              ?>
            </div>
            <div class="form-group">
            <?php 
              echo form_label('Spesifikasi Product', 'spec_product'); 
              $spec_product = array('name' => 'spec_product', 'class' => 'form-control input-sm', 'id' => 'markaz_editor', 'rows' => '3', 'placeholder' => 'Tulis Spesifikasi Product', 'value' => $product->spec_product);
              echo form_textarea($spec_product);
            ?>
            </div>
            <div class="form-group">
              <?php 
                echo form_label('Harga Product', 'harga_product'); 
                $harga_product = array('name' => 'harga_product', 'type' => 'number', 'class' => 'form-control', 'placeholder' => 'Masukan Harga Product', 'value' => $product->harga_product);
              echo form_input($harga_product);
              echo form_error('harga_product');
              ?>
            </div>
            <div class="form-group">
              <?php 
                echo form_label('Harga Per Tahun Product', 'per_tahun_product'); 
                $per_tahun_product = array('name' => 'per_tahun_product', 'type' => 'number', 'class' => 'form-control', 'placeholder' => 'Masukan Harga Per Tahun Product', 'value' => $product->per_tahun_product);
              echo form_input($per_tahun_product);
              echo form_error('per_tahun_product');
              ?>
            </div>
  <?php
  $btn = array('type' => 'submit', 'name' => 'simpan', 'class' => 'btn btn-primary');
  echo form_submit($btn,'Ubah');
  
echo form_close();

















?>
</div>