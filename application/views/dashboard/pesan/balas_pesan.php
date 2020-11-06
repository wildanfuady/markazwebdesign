<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li><a href="<?php echo base_url('markaz_admin/pesan'); ?>">Pesan</a></li>
          <li>Balas Pesan</li>
        </ul>
       </div>
  </div>
<br>
<div class="scrool">
<?php
echo $editor; 
echo form_open_multipart('markaz_admin/email');
?>
  <div class="form-group">
    <?php 
	     echo form_label('Nama Penerima', 'nama'); 
	     $nama_pengirim = array('name' => 'nama_penerima', 'class' => 'form-control', 'placeholder' => 'Masukan Nama Pengirim', 'value' => $pesan->nama);
	  echo form_input($nama_pengirim);
	  ?>
  </div>
  <div class="form-group">
    <?php 
       echo form_label('Email Penerima', 'email'); 
       $email_penerima = array('name' => 'email', 'class' => 'form-control', 'placeholder' => 'Masukan Nama Penerima', 'value' => $pesan->email);
    echo form_input($email_penerima);
    ?>
  </div>
  <div class="form-group">
    <?php 
       echo form_label('Subjek', 'subjek'); 
       $subjek = array('name' => 'subjek', 'class' => 'form-control', 'placeholder' => 'Masukan Link Menu', 'value' => 'Re: '.$pesan->subjek);
    echo form_input($subjek);
    ?>
  </div>
   <div class="form-group">
    <?php 
      echo form_label('Kirim Balasan', 'kirim_balasan'); 
      $kirim = array('name' => 'kirim_balasan', 'class' => 'form-control input-sm', 'id' => 'markaz_editor', 'rows' => '3', 'placeholder' => 'Tulis Balasan', 'value' => $pesan->pesan);
      echo form_textarea($kirim);
    ?>
  </div>
  <?php
  $kembali = array('type' => 'button', 'name' => 'kembali', 'class' => 'btn btn-default', 'onclick' => 'history.go(-1);');
  echo form_submit($kembali,'Kembali');
  echo " "; 
  $btn = array('type' => 'submit', 'name' => 'simpan', 'class' => 'btn btn-primary');
  echo form_submit($btn,'Kirim');
  
echo form_close();
?>
</div>