<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li>Artikel</li>
        </ul>
       </div>
  </div>
<br>
<h4 class="judul"><a href="<?php echo base_url('markaz_admin/tambah_artikel'); ?>" class="btn btn-primary">Tambah Artikel</a></h4>
<div class="scrool">
<table class="table" id="tbl">
  <thead>
  <tr>
    <td><b>No.</b></td>
    <td><b>Judul</b></td>
    <td><b>Tanggal</b></td>
    <td><b>Aksi</b></td>
  </tr>
  </thead>
  <tbody>
  <?php
  $no = 1;
  foreach($hasil->result() as $row):
 $isi   = $row->isi;
$id    = $row->id_artikel;
$kategori_id    = $row->kategori_id;
$link_judul = $row->link_judul;
$judul = $row->judul;
$tgl   = tgl_indo($row->tgl_post);
$cleanurl = set_cleanurl($kategori_id, $id);
$link  = set_linkurl($id, $judul);
$isi   = substr($isi, 0, 250);

?>
      <td><?php echo $no; ?></td>
      <td><?php echo anchor('artikel/'.$link_judul, $row->judul); ?></td>
      <td><?php echo $tgl; ?></td>
      <td>
	    <a href='<?php echo base_url()."markaz_admin/edit_artikel/".$row->id_artikel; ?>' class='btn btn-primary'>Edit</a>
        <a href='<?php echo base_url()."markaz_admin/delete_artikel/".$row->id_artikel; ?>' class='btn btn-danger' onClick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
      </td>
    </tr>
  <?php
  $no++;
  endforeach;
  ?>
  </tbody>
</table>
</div>