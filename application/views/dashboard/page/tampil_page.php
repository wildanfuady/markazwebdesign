<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li>Page</li>
        </ul>
       </div>
  </div>
<br>
<h4 class="judul"><a href="<?php echo base_url('markaz_admin/tambah_page'); ?>" class="btn btn-primary">Tambah Page</a></h4>
<div class="scrool">
<table class="table" id="tbl">
  <thead>
  <tr>
    <td><b>No.</b></td>
    <td><b>Judul Page</b></td>
    <td><b>Tanggal</b></td>
    <td><b>Jam</b></td>
    <td><b>Aksi</b></td>
  </tr>
  </thead>
  <tbody>
  <?php
  $no = 1;
  foreach($page->result() as $row):
    $id = $row->id_page;
    $nk = $row->judul_page;
    $link_page = $row->link_page;
    $tgl = tgl_str($row->tgl_post);
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo anchor('page/'.$link_page, $row->judul_page); ?></td>
      <td><?php echo $tgl; ?></td>
      <td><?php echo $row->jam; ?></td>
      <td>
	    <a href='<?php echo base_url()."markaz_admin/edit_page/".$row->id_page; ?>' class='btn btn-primary'>Edit</a>
        <a href='<?php echo base_url()."markaz_admin/delete_page/".$row->id_page; ?>' class='btn btn-danger' onClick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
      </td>
    </tr>
  <?php
  $no++;
  endforeach;
  ?>
  </tbody>
</table>
</div>