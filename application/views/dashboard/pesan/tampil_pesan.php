<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li>Pesan</li>
        </ul>
       </div>
  </div>
<br>
<table id="tbl" class="table">
    <thead class="thead-default">
      <tr>
        <td><b>No.</b></td>
        <td><b>Nama Pengirim</b></td>
        <td><b>Subjek</b></td>
        <td><b>Email</b></td>
        <td><b>Pesan</b></td>
        <td><b>Aksi</b></td>
      </tr>
    </thead>
    <tbody>
  <?php
  $no = 1;
  foreach($pesan->result() as $row):
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $row->nama; ?></td>
      <td><?php echo $row->subjek; ?></td>
      <td><a href="mailto:<?php echo $row->email; ?>"><?php echo $row->email; ?></td>
      <td><?php echo $row->pesan; ?></td>
      <td>
	    <a href='<?php echo base_url()."markaz_admin/balas_pesan/".$row->id_hubungi_kami; ?>' class='btn btn-primary'>Balas</a>
        <a href='<?php echo base_url()."markaz_admin/hapus_pesan/".$row->id_hubungi_kami; ?>' onClick="return confirm('Anda yakin ingin menghapus data ini?')" class='btn btn-danger'>Hapus</a>
      </td>
    </tr>
  <?php
  $no++;
  endforeach;
  ?>
  </tbody>
</table>