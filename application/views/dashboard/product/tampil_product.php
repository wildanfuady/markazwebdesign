<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li>Product</li>
        </ul>
       </div>
  </div>
<br>
<h4 class="judul"><a href="<?php echo base_url('markaz_admin/tambah_product'); ?>" class="btn btn-primary">Tambah Product</a>
</h4>
<table id="tbl" class="table">
    <thead class="thead-default">
      <tr>
        <td><b>No.</b></td>
        <td><b>Id Product</b></td>
        <td><b>Nama Product</b></td>
        <td><b>Spesifikasi Product</b></td>
        <td><b>Per Tahun Product</b></td>
        <td><b>Harga Product</b></td>
        <td><b>Aksi</b></td>
      </tr>
    </thead>
    <tbody>
  <?php
  $no = 1;
  foreach($product->result() as $row):
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $row->id_product; ?></td>
      <td><?php echo $row->nama_product; ?></td>
      <td><?php echo $row->spec_product; ?></td>
      <td><?php echo $row->per_tahun_product; ?></td>
      <td><?php echo $row->harga_product; ?></td>
      <td>
	    <a href='<?php echo base_url()."markaz_admin/ubah_product/".$row->id_product; ?>' class='btn btn-primary'>Edit</a>
        <a href='<?php echo base_url()."markaz_admin/hapus_product/".$row->id_product; ?>' onClick="return confirm('Anda yakin ingin menghapus data ini?')" class='btn btn-danger'>Hapus</a>
      </td>
    </tr>
  <?php
  $no++;
  endforeach;
  ?>
  </tbody>
</table>