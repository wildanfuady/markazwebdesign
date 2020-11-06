<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li><a href="<?php echo base_url('markaz_admin/testimoni'); ?>">Testimoni</a></li>
          <li>Tambah Testimoni</li>
        </ul>
       </div>
  </div>
<br>
<div class="scrool">
<?php
echo $editor;  
          echo form_open_multipart('markaz_admin/tambah_testimoni');
        ?>
           <div class="form-group">
              <?php 
                echo form_label('Isi Testimoni', 'isi_testimoni'); 
                $isi_testimoni = array('name' => 'isi_testimoni', 'class' => 'form-control', 'id' => 'markaz_editor', 'placeholder' => 'Masukan Testimoni...');
              echo form_textarea($isi_testimoni);
              echo form_error('isi_testimoni');
              ?>
            </div>
            <div class="form-group">
              <?php 
                echo form_label('Nama Anda', 'who_is'); 
                $who_is = array('name' => 'who_is', 'class' => 'form-control', 'placeholder' => 'Masukan Nama Anda');
              echo form_input($who_is);
              echo form_error('who_is');
              ?>
            </div>
            <div class="form-group">
              <?php 
                echo form_label('Owner', 'owner'); 
                $owner = array('name' => 'owner', 'class' => 'form-control', 'placeholder' => 'Masukan Nama Owner');
              echo form_input($owner);
              echo form_error('owner');
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