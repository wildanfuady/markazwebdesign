<html>
<head>
  <title>Semua Artikel | Markazwebdesign.net</title>

<style>
#img-artikel {
  margin:20px 20px 20px 20px;
  border: 1px solid #CCCCCC;
  padding: 3px;
  float: left;
  margin: 5px;
}
.container-kategori {
  margin:20px 20px 20px 20px;
  border: 1px solid #CCCCCC;
  padding: 3px;
  margin: 5px;
  width: 260px;
}
.link-kategori p {
  list-style-type: none;
}
</style>
</head>
<body>
<br />
<br />
<br />
<br />
<div class="container">
<div class="col-md-8"><!--class media-->
<?php
foreach($s_artikel->result() as $row) :
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
  <!-- Menampilkan semua artikel-->
  <div class="media-body">
    <h2 class="media-heading"><?php echo anchor('artikel/'.$link_judul, $row->judul); ?></h2>
 	  <span class="post">
      <i class="fa fa-user fa-fw"></i> <?php echo $row->penulis; ?> <i class="fa fa-calendar fa-fw"></i> <?php echo $row->hari ?>, <?php echo $tgl; ?> <i class="fa fa-clock-o fa-fw"></i> <?php echo $row->jam; ?> <i class="fa fa-eye fa-fw"></i> <?php echo $row->dibaca; ?>
    </span>
    <hr>
        <a class="pull-left" href="<?php echo base_url(); ?>foto/foto_artikel/<?php echo $row->gambar; ?>">
        <?php
          if ($row->gambar!=''){
          ?>
            <img class="media-object img-rounded" id="img-artikel" src="<?php echo base_url(); ?>foto/foto_artikel/<?php echo $row->gambar; ?>" width="260"/>
            <?php
          }
          ?>
        </a>
        <span class="isi"><?php echo $isi; ?> ... <?php echo anchor('artikel/'.$link_judul, 'Selengkapnya'); ?></span>
  </div><!--end class media-body-->
  <hr class="bsemua" />
<?php 
endforeach;
?>
</div><!--end class media-->

<div class="col-md-4"> <!-- Widget -->

  <div class="alert alert-success"><b>SEARCH</b></div> <!-- Widget Search -->
  <?php 
        $frm_cari = array('name' => 'frm_cari', 'class' => 'form-grup', 'role' => 'search'); 
        echo form_open('artikel/cari', $frm_cari);
        ?>
        <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" aria-describedby="sizing-addon2" name="search">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-primary" type="button"><i class="fa fa-search fa-fw"></i></button><!-- radio (append) -->
            </span> 
          </div>
        </div>  
          <?php
        echo form_close(); 
        ?>
        <br />

  <div class="alert alert-success"><b>POPULAR POST</b></div> <!-- Widget Post Popular -->

<?php
foreach($post_popular->result() as $row) :
$isi   = $row->isi;
$id    = $row->id_artikel;
$kategori_id    = $row->kategori_id;
$link_judul = $row->link_judul;
$judul = $row->judul;
$tgl   = tgl_indo($row->tgl_post);
$cleanurl = set_cleanurl($kategori_id, $id);
$link  = set_linkurl($id, $judul);
$isi   = substr($isi, 0, 50);
?>
  <!-- Menampilkan popular post -->
  <div class="media-body">
    <div class="media-heading"><?php echo anchor('artikel/'.$link_judul, $row->judul); ?></div>
        <a class="pull-left" href="<?php echo base_url(); ?>foto/foto_artikel/<?php echo $row->gambar; ?>">
        <?php
          if ($row->gambar!=''){
          ?>
            <img class="media-object img-rounded" id="img-artikel" src="<?php echo base_url(); ?>foto/foto_artikel/<?php echo $row->gambar; ?>" width="50"/>
            <?php
          }
          ?>
        </a>
        <span class="isi"><?php echo $isi; ?> ... <?php echo anchor('artikel/'.$link_judul, 'Selengkapnya'); ?></span>
  </div><!--end class media-body-->
  <hr class="bsemua" />
<?php 
endforeach;
?>
</div> <!-- End Widget Kanan --> 
</div>
</body>
</html>
