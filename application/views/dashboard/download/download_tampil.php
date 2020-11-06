<h3 class="judul garis"><?php echo $jenis; ?></h3>
<h4 class="judul"><?php echo anchor('c_admin/add_download', 'Tambah Download'); ?></h4>
<table class="table">
  <tr>
    <td><b>No.</b></td>
    <td><b>Judul</b></td>
    <td><b>Nama File</b></td>
    <td><b>Tanggal</b></td>
    <td><b>Aksi</b></td>
  </tr>
  <?php
  $no = $page+1;
  foreach($hasil->result() as $row):
    $tgl = tgl_str($row->tgl_posting);
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $row->judul; ?></td>
      <td><?php echo $row->nama_file; ?></td>
      <td><?php echo $tgl; ?></td>
      <td>
	    <a href='<?php echo base_url()."c_admin/edit_download/".$row->id_download; ?>'>Edit</a> |
        <a href='<?php echo base_url()."c_admin/delete_download/".$row->id_download; ?>' onClick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
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