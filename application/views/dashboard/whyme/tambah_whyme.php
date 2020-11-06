<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li><a href="<?php echo base_url('markaz_admin/whyme'); ?>">Whyme</a></li>
          <li>Tambah Whyme</li>
        </ul>
       </div>
  </div>
<br>
<div class="scrool">
<?php
echo $editor; 
          echo form_open_multipart('markaz_admin/tambah_whyme');
        ?>
           <div class="form-group">
              <?php 
                echo form_label('Fitur', 'fitur'); 
                $fitur = array('name' => 'fitur', 'class' => 'form-control', 'placeholder' => 'Masukan Fitur Layanan');
              echo form_input($fitur);
              echo form_error('fitur');
              ?>
            </div>
            <div class="form-group">
            <?php 
              echo form_label('Deskripsi', 'deskripsi'); 
              $deskripsi = array('name' => 'deskripsi', 'class' => 'form-control input-sm', 'id' => 'markaz_editor', 'rows' => '3', 'placeholder' => 'Tulis Deskripsi Layanan');
              echo form_textarea($deskripsi);
              echo form_error('deskripsi');
            ?>
            </div>
            <div class="form-group">
              <?php 
                echo form_label('Icon', 'icon'); 
                $icon = array('name' => 'icon', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Masukan URL Icon Layanan');
              echo form_input($icon);
              echo form_error('icon');
              ?>
            <small class="text-muted" style="color:red;">* URL icon bisa mengambil <a href="<?php echo base_url('icon/glyphicons1.html'); ?>">URL-1</a> | <a href="<?php echo base_url('icon/glyphicons2.html'); ?>">URL-2</a> | <a href="<?php echo base_url('icon/glyphicons3.html'); ?>">URL-3.</a> Contoh: "glyphicon glyphicon-glass".</small>
            </div>

            <?php
          $kembali = array('type' => 'button', 'onclick' => 'history.go(-1);', 'class' => 'btn btn-default');
          echo form_submit($kembali,'Kembali');
          echo " ";
          $btn = array('type' => 'submit', 'name' => 'simpan', 'class' => 'btn btn-primary btn-sm');
          echo form_submit($btn,'Simpan');
          echo form_close();
        ?>