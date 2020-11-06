<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li>Portofolio</li>
        </ul>
       </div>
  </div>
<br>
<h4 class="judul"><a href="<?php echo base_url('markaz_admin/tambah_portofolio'); ?>" class="btn btn-primary">Tambah Portofolio</a>
</h4>
<table id="tbl" class="table">
    <thead class="thead-default">
      <tr>
        <td><b>No.</b></td>
        <td><b>Id Portofolio</b></td>
        <td><b>Nama Project</b></td>
        <td><b>Link Projeck</b></td>
        <td><b>Build Projeck</b></td>
        <td><b>Gambar Projeck</b></td>
        <td><b>Aksi</b></td>
      </tr>
    </thead>
    <tbody>
  <?php
  $no = 1;
  foreach($portofolio->result() as $row):
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $row->id_portofolio; ?></td>
      <td><?php echo $row->nama_project; ?></td>
      <td><?php echo $row->link_project; ?></td>
      <td><?php echo $row->build_project; ?></td>
      <td><?php echo $row->gambar_project; ?></td>
      <td>
	    <a href='<?php echo base_url()."markaz_admin/ubah_portofolio/".$row->id_portofolio; ?>' class='btn btn-primary'>Edit</a>
        <a href='<?php echo base_url()."markaz_admin/hapus_portofolio/".$row->id_portofolio; ?>' onClick="return confirm('Anda yakin ingin menghapus data ini?')" class='btn btn-danger'>Hapus</a>
      </td>
    </tr>
  <?php
  $no++;
  endforeach;
  ?>
  </tbody>
</table>
