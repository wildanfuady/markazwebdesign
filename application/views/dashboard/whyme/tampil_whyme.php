<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li>Whyme</li>
        </ul>
       </div>
  </div>
<br>
<h4 class="judul"><a href="<?php echo base_url('markaz_admin/tambah_whyme'); ?>" class="btn btn-primary"><?php echo "Tambah $jenis"; ?></a>
</h4>
<table id="tbl" class="table">
    <thead class="thead-default">
      <tr>
        <td><b>No.</b></td>
        <td><b>Fitur</b></td>
        <td><b>Icon</b></td>
        <td><b>Aksi</b></td>
      </tr>
    </thead>
    <tbody>
  <?php
  $no = 1;
  foreach($whyme->result() as $row):
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $row->fitur; ?></td>
      <td><?php echo $row->icon; ?></td>
      <td>
	    <a href='<?php echo base_url()."markaz_admin/ubah_whyme/".$row->id_whyme; ?>' class='btn btn-primary'>Edit</a>
        <a href='<?php echo base_url()."markaz_admin/hapus_whyme/".$row->id_whyme; ?>' onClick="return confirm('Anda yakin ingin menghapus data ini?')" class='btn btn-danger'>Hapus</a>
      </td>
    </tr>
  <?php
  $no++;
  endforeach;
  ?>
  </tbody>
</table>