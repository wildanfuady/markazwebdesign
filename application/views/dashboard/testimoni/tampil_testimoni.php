<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li>Testimoni</li>
        </ul>
       </div>
  </div>
<br>
<h4 class="judul"><a href="<?php echo base_url('markaz_admin/tambah_testimoni'); ?>" class="btn btn-primary">Tambah Testimoni</a>
</h4>
<table id="tbl" class="table">
    <thead class="thead-default">
      <tr>
        <td><b>No.</b></td>
        <td><b>Isi Testimoni</b></td>
        <td><b>Who Is</b></td>
        <td><b>Owner</b></td>
        <td><b>Aksi</b></td>
      </tr>
    </thead>
    <tbody>
  <?php
  $no = 1;
  foreach($testimoni->result() as $row):
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $row->isi_testimoni; ?></td>
      <td><?php echo $row->who_is; ?></td>
      <td><?php echo $row->owner; ?></td>
      <td>
	    <a href='<?php echo base_url()."markaz_admin/ubah_testimoni/".$row->id_testimoni; ?>' class='btn btn-primary'>Edit</a>
        <a href='<?php echo base_url()."markaz_admin/hapus_testimoni/".$row->id_testimoni; ?>' onClick="return confirm('Anda yakin ingin menghapus data ini?')" class='btn btn-danger'>Hapus</a>
      </td>
    </tr>
  <?php
  $no++;
  endforeach;
  ?>
  </tbody>
</table>
