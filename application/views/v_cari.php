<br />
<br />
<br />
<br />
<div class="container">
<div class="col-md-8"><!--class media-->
<?php
$banyak = count($search_berita->result_array());
echo "<div class='alert alert-warning'> Ditemukan <b>".$banyak."</b> data dari hasil pencarian dengan kata <b>".$search."</b></div>";

if (count($search_berita->result_array())>0){
  foreach($search_berita->result() as $row) :
    $isi   = $row->isi;
    $id    = $row->id_artikel;
    $judul = $row->judul;
    $tgl   = tgl_indo($row->tgl_post);
    $link  = set_linkurl($id,$judul); 
    $isi   = substr($isi, 0, 250);
?>
    <div class="media"><!--class media-->
      <span class="post">
      <h2 class="media-heading"><?php echo anchor('artikel/view/'.$link, $row->judul); ?></h2>
          <i class="fa fa-user fa-fw"></i> <?php echo $row->penulis; ?> <i class="fa fa-calendar fa-fw"></i> <?php echo $row->hari ?>, <?php echo $tgl; ?> <i class="fa fa-clock-o fa-fw"></i> <?php echo $row->jam; ?> <i class="fa fa-eye fa-fw"></i> <?php echo $row->dibaca; ?>
        </span>
        <hr>
        <a class="pull-left" href="#">
        <img class="media-object img-rounded" src="<?php echo base_url(); ?>foto/foto_artikel/<?php echo $row->gambar; ?>" width="130" height="100" />
      </a> 
      <div class="media-body"><!--class media-body-->
        <span class="isi"><?php echo $isi; ?> ... <?php echo anchor('artikel/view/'.$link, 'Selengkapnya'); ?></span>
      </div><!--end class media-body-->
    </div><!--end class media-->
    <hr class="bbaru" />
<?php
  endforeach;
}
else{ 
?>
<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  Pencarian data dengan kata <strong><?php echo $search; ?></strong> tidak ditemukan
</div>
<?php
}
echo "<br/>";
echo $paginator;
?>
</div>
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
$judul = $row->judul;
$tgl   = tgl_indo($row->tgl_post);
$link  = set_linkurl($id, $judul);
$isi   = substr($isi, 0, 50);
?>
  <!-- Menampilkan popular post -->
  <div class="media-body">
    <div class="media-heading"><?php echo anchor('artikel/view/'.$link, $row->judul); ?></div>
        <a class="pull-left" href="<?php echo base_url(); ?>foto/foto_artikel/<?php echo $row->gambar; ?>">
        <?php
          if ($row->gambar!=''){
          ?>
            <img class="media-object img-rounded" id="img-artikel" src="<?php echo base_url(); ?>foto/foto_artikel/<?php echo $row->gambar; ?>" width="50"/>
            <?php
          }
          ?>
        </a>
        <span class="isi"><?php echo $isi; ?> ... <?php echo anchor('artikel/view/'.$link, 'Selengkapnya'); ?></span>
  </div><!--end class media-body-->
  <hr class="bsemua" />
<?php 
endforeach;
?>

  <div class="alert alert-success"><b>KATEGORI</b></div> <!-- Widget Kategori -->
  <div class="link-kategori">
  <?php
    foreach($kategori->result() as $row) :
      $id = $row->id_kategori;
      $nk = $row->nama_kategori;
      $lk  = set_linkurl($id, $nk);
      ?>
    <p>> > <?php echo anchor('artikel/kanal/'.$lk, $row->nama_kategori); ?></p>
    <hr>
    <?php 
    endforeach;
  ?>
  </div>
  <div class="alert alert-success"><b>BANNER</b></div> <!-- Widget Banner -->
</div>

</div> <!-- End Widget Kanan --> 
</div>
