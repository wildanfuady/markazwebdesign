<br />
<br />
<br />
<br />
<div class="container">
<div class="col-md-8"><!--class media-->
<div class="media">
  <?php
    foreach($d_page->result() as $row):
      $gambar = $row->foto_page;
      $tgl   = tgl_indo($row->tgl_post);
    ?>
  <h2 class="media-heading"><?php echo $row->judul_page; ?></h2>
  <span class="post">
    <i class="fa fa-user fa-fw"></i> <?php echo $row->penulis_page; ?> <i class="fa fa-calendar fa-fw"></i> <?php echo $row->hari ?>, <?php echo $tgl; ?> <i class="fa fa-clock-o fa-fw"></i> <?php echo $row->jam; ?> <i class="fa fa-eye fa-fw"></i> <?php echo $row->dibaca; ?>
  </span>
  <hr>
  <a class="pull-left" href="#">
  <?php
  if ($gambar!=''){
  ?>
    <img class="media-object img-rounded" id="img-page" src="<?php echo base_url(); ?>foto/foto_page/<?php echo $row->foto_page; ?>" width="260"/>
  <?php
  }
  ?>
  </a>
  <span class="isi"><?php echo $row->isi_page; ?></span>
  <hr>
  <br><br><a href=javascript:history.go(-1)> Kembali </a><p>&nbsp;</p>
  <?php
    endforeach;
  ?>
</div>
</div>
</div>