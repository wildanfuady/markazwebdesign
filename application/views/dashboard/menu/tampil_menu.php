<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li>Menu</li>
        </ul>
       </div>
  </div>
<br>
<h4 class="judul">
    <a data-toggle="modal" href="#tambahMenu" class="btn btn-primary">Tambah Menu</a> 
    <br />
</h4>
<table id="tbl" class="table">
    <thead class="thead-default">
      <tr>
        <td><b>No.</b></td>
        <td><b>Id Menu</b></td>
        <td><b>Nama Menu</b></td>
        <td><b>Link Menu</b></td>
        <td><b>Aksi</b></td>
      </tr>
    </thead>
    <tbody>
  <?php
  $no = 1;
  foreach($menu->result() as $row):
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $row->id_menu; ?></td>
      <td><?php echo $row->nama_menu; ?></td>
       <td><?php echo $row->link_menu; ?></td>
      <td>
	    <a href='<?php echo base_url()."markaz_admin/ubah_menu/".$row->id_menu; ?>' class='btn btn-primary'>Edit</a>
        <a href='<?php echo base_url()."markaz_admin/hapus_menu/".$row->id_menu; ?>' onClick="return confirm('Anda yakin ingin menghapus data ini?')" class='btn btn-danger'>Hapus</a>
      </td>
    </tr>
  <?php
  $no++;
  endforeach;
  ?>
  </tbody>
</table>

<!-- Modal Tambah Kategori -->
  <div class="modal fade" id="tambahMenu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Tambah Menu</h4>
        </div>
        <div class="modal-body">
        <?php 
          echo form_open_multipart('markaz_admin/tambah_menu');
        ?>
            <fieldset class="form-group">
              <input type="hidden" class="form-control" name="id_menu">
            </fieldset>
            <fieldset class="form-group">
              <?php 
                echo form_label('Nama Menu', 'nama_menu'); 
                $nama_menu = array('name' => 'nama_menu', 'class' => 'form-control', 'placeholder' => 'Masukan Nama Menu');
              echo form_input($nama_menu);
              echo form_error('nama_menu');
              ?>
            </fieldset>
             <fieldset class="form-group">
              <?php 
                echo form_label('Link Menu', 'link_menu'); 
                $link_menu = array('name' => 'link_menu', 'class' => 'form-control', 'placeholder' => 'Masukan Link Menu');
              echo form_input($link_menu);
              echo form_error('link_menu');
              ?>
            </fieldset>
            <small class="text-muted" style="color:red;">* Wajib Diisi / Tidak Boleh Kosong</small>
            <div class="modal-footer">
            <?php
              $kembali = array('type' => 'button', 'name' => 'Kembali', 'class' => 'btn btn-default', 'data-dismiss' => 'modal');
              echo form_submit($kembali,'Kembali');
              $simpan = array('type' => 'submit', 'name' => 'Simpan', 'class' => 'btn btn-primary');
              echo form_submit($simpan,'Simpan');
            ?>
            </div>
        <?php
          echo form_close();
        ?>
        </div>
      </div>
    </div>
  </div>';