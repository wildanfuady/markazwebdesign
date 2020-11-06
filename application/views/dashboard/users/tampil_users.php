<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li>Users</li>
        </ul>
       </div>
  </div>
<br>
<h4 class="judul"><a href="<?php echo base_url('markaz_admin/tambah_users'); ?>" class="btn btn-primary">Tambah Users</a>
</h4>
<table id="tbl" class="table">
    <thead class="thead-default">
      <tr>
        <td><b>No.</b></td>
        <td><b>Id User</b></td>
        <td><b>Username</b></td>
        <td><b>Nama User</b></td>
        <td><b>Bio</b></td>
        <td><b>Jabatan</b></td>
        <td><b>Foto Profile</b></td>
        <td><b>Aksi</b></td>
      </tr>
    </thead>
    <tbody>
  <?php
  $no = 1;
  foreach($users->result() as $row):
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $row->id_user; ?></td>
      <td><?php echo $row->username; ?></td>
      <td><?php echo $row->nama_user; ?></td>
      <td><?php echo $row->bio; ?></td>
      <td><?php echo $row->jabatan; ?></td>
      <td><?php echo $row->foto_profile; ?></td>
      <td>
	    <a href='<?php echo base_url()."markaz_admin/edit_users/".$row->id_user; ?>' class='btn btn-primary'>Edit</a>
        <a href='<?php echo base_url()."markaz_admin/hapus_users/".$row->id_user; ?>' onClick="return confirm('Anda yakin ingin menghapus data ini?')" class='btn btn-danger'>Hapus</a>
      </td>
    </tr>
  <?php
  $no++;
  endforeach;
  ?>
  </tbody>
</table>
