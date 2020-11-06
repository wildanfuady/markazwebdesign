<h3 class="judul garis"><?php echo $jenis; ?></h3>
<h4 class="judul"><?php echo anchor('c_admin/add_link', 'Tambah Partner Link'); ?></h4>
<div class="scrool">
<table class="table">
  <tr>
    <td><b>No.</b></td>
    <td><b>Nama Link</b></td>
    <td><b>URL</b></td>
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
      <td><?php echo $row->url; ?></td>
      <td><?php echo $tgl; ?></td>
      <td>
	    <a href='<?php echo base_url()."c_admin/edit_link/".$row->id_banner; ?>'>Edit</a> |
        <a href='<?php echo base_url()."c_admin/delete_link/".$row->id_banner; ?>' onClick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
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