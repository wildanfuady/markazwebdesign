<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li><a href="<?php echo base_url('markaz_admin/users'); ?>">Users</a></li>
          <li>Tambah Users</li>
        </ul>
       </div>
  </div>
<br> 
<div class="scrool">
<?php
echo $editor;
          echo form_open_multipart('markaz_admin/tambah_users');
        ?>
           <div class="form-group">
              <?php 
                echo form_label('Username', 'username'); 
                $username = array('name' => 'username', 'class' => 'form-control', 'placeholder' => 'Masukan Username');
              echo form_input($username);
              echo form_error('username');
              ?>
            </div>
            <div class="form-group">
              <?php 
                echo form_label('Nama Users', 'nama_user'); 
                $nama_user = array('name' => 'nama_user', 'class' => 'form-control', 'placeholder' => 'Masukan Nama User...');
              echo form_input($nama_user);
              echo form_error('nama_user');
              ?>
            </div>
            <div class="form-group">
              <?php 
                echo form_label('Bio', 'bio'); 
                $bio = array('name' => 'bio', 'class' => 'form-control', 'id' => 'markaz_editor', 'placeholder' => 'Masukan Bio Anda...');
              echo form_textarea($bio);
              echo form_error('bio');
              ?>
            </div>
            <div class="form-group">
              <?php 
                echo form_label('Password', 'Password'); 
                $password = array('name' => 'password', 'class' => 'form-control', 'type' => 'password','placeholder' => 'Masukan Build Project...');
              echo form_input($password);
              echo form_error('password');
              ?>
            </div>
            <div class="form-group">
              <?php 
                echo form_label('Jabatan', 'Jabatan'); 
                ?>
              <select name="jabatan" class="form-control">
                <option value="">---Pilih Jabatan---</option>
                <option value="AUTHOR">AUTHOR</option>
                <option value="ADMIN">ADMIN</option>
              </select>
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