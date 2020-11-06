<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li>Hubungi</li>
        </ul>
       </div>
  </div>
<br>
<div class="scrool">
<table class="table">
  <tr>
    <td><b>No.</b></td>
    <td><b>Nama</b></td>
    <td><b>Email</b></td>
    <td><b>Tanggal</b></td>
    <td><b>Aksi</b></td>
  </tr>
  <?php
  $no = $page+1;
  foreach($hasil->result() as $row):
    $tgl = tgl_str($row->tanggal);
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $row->nama; ?></td>
      <td><?php echo $row->email; ?></td>
      <td><?php echo $tgl; ?></td>
      <td>
	    <a href='<?php echo base_url()."c_admin/detail_hubungi/".$row->id_hubungi; ?>'>Detail</a> |
        <a href='<?php echo base_url()."c_admin/delete_hubungi/".$row->id_hubungi; ?>' onClick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
      </td>
    </tr>
  <?php
  $no++;
  endforeach;
  ?>
</table>
<?php
echo $paginator;
?>
</div>