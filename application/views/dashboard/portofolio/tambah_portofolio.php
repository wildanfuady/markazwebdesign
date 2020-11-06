<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li><a href="<?php echo base_url('markaz_admin/portofolio'); ?>">Portofolio</a></li>
          <li>Tambah Portofolio</li>
        </ul>
       </div>
  </div>
<br>
<div class="scrool">
<?php
          echo form_open_multipart('markaz_admin/tambah_portofolio');
        ?>
           <div class="form-group">
              <?php 
                echo form_label('Nama Project', 'nama_project'); 
                $nama_project = array('name' => 'nama_project', 'class' => 'form-control', 'placeholder' => 'Masukan Nama Project...');
              echo form_input($nama_project);
              echo form_error('nama_project');
              ?>
            </div>
            <div class="form-group">
              <?php 
                echo form_label('Link Project', 'link_project'); 
                $link_project = array('name' => 'link_project', 'class' => 'form-control', 'placeholder' => 'Masukan Link Project...');
              echo form_input($link_project);
              echo form_error('link_project');
              ?>
            </div>
            <div class="form-group">
              <?php 
                echo form_label('Build Project', 'build_project'); 
                $build_project = array('name' => 'build_project', 'class' => 'form-control', 'placeholder' => 'Masukan Build Project...');
              echo form_input($build_project);
              echo form_error('build_project');
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