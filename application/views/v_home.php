<?php
  foreach ($instansi->result() as $row):
    ?>
<!DOCTYPE html>
<html>
<head> 
	<title><?php echo $row->nama_instansi; ?> - <?php echo $row->tagline_instansi; ?></title>
</head>
<br>
<body>
<?php
	endforeach;
	foreach ($setting ->result() as $row) :
	
	if($row->status_slide == "ON"){
	?>
	<div class="thumbs-image col-md-12">
		<div class="image-description">
			<h1>Membuat UMKM Anda dikenal luas dan mendapatkan OMZET lebih banyak.</h1>
			<p><button class="button">Pesan Sekarang</button></p>
		</div>
	</div>
		
	<?php
	} else {
		echo "";
	}
	endforeach;
	?>
<!-- Perkenalan -->
<?php
	foreach ($setting ->result() as $row) :
	
	if($row->status_perkenalan == "ON"){

		?>

<div class="col-sm-12">
	<br /><br />
		<center>
			<h2><?php echo $row->judul_perkenalan; ?></h2>
			<h4><?php echo $row->desc_perkenalan; ?></h4>
			<br>
		</center>
    <div class="col-sm-6">
		<br />
		<br />
		<br />
		<center>
			<h4>
				<?php
				foreach($profile->result() as $row) :
				echo $row->about_instansi; 
				endforeach;
				?>

			</h4>
				
		</center>
    </div>
    <div class="col-sm-6">
		<br />
		<center><img src="<?php echo base_url('img/cs.png'); ?>" /></center>
		<br />
		<br />
    </div>
</div>
	<?php
	} else {
		echo "";
	}
	endforeach;
	?>

<!-- Visi Misi / Value -->
<?php
	foreach ($setting ->result() as $row) :
	
	if($row->status_our_value == "ON"){

		?>

<div class="col-sm-12 bg-grey">
	<br /><br />
		<center>
			<h2><?php echo $row->judul_our_value; ?></h2>
			<h4><?php echo $row->desc_our_value; ?></h4>
		</center>
		<div class="col-sm-6">
			<img src="<?php echo base_url('img/oke.png'); ?>" />
		</div>
		<div class="col-sm-6">
				<br>
				<br>
				<br>
				<?php
						foreach($profile->result() as $row) :
				?>			
				<h4><?php echo $row->visi_instansi; ?><br /></h4><br />
				<h4><?php echo $row->misi_instansi; ?><br /></h4>
				<br><br>
				<?php
				endforeach;
				?>
		</div>
</div>
	<?php
	} else {
		echo "";
	}
	endforeach;
	?>

<!-- Mengapa Kami -->
<?php
	foreach ($setting ->result() as $row) :
	
	if($row->status_whyme == "ON"){

		?>
<div class="col-md-12">
	<br /><br />
	<center>
		<br><h2><?php echo $row->judul_whyme; ?></h2>
		<h4><?php echo $row->desc_whyme; ?></h4>
		<br>
	</center>
	<div class="row slideanim" align="center">
    <?php
					foreach($whyme->result() as $row) :
			?>	
	    <div class="col-sm-4">
	    <?php $ico = "".$row->icon." logo-small" ?>
	      <span class="<?php echo $ico; ?>"></span>
	      <h4><?php echo $row->fitur; ?></h4>
	      <?php echo $row->deskripsi; ?>
	    </div>
	    <?php
			endforeach;
	?>
  	</div>
  	<br>
</div>
<?php
	} else {
		echo "";
	}
	endforeach;
	?>

<!-- Portofolio -->

<?php
	foreach ($setting ->result() as $row) :
	
	if($row->status_portofolio == "ON"){ 

		?>
<div class="col-md-12 bg-grey">
	<br /><br />
	<center>
		<br><h2><?php echo $row->judul_portofolio; ?></h2>
		<h4><?php echo $row->desc_portofolio; ?></h4>
		<br>
	</center>
	<div class="row text-center">
	<?php

	foreach ($portofolio ->result() as $row) :
	
	?>
    <div class="col-sm-4">
      <div class="thumbnail thumb-image">

	        <img src="<?php echo base_url('foto/foto_portofolio/'.$row->gambar_project); ?>" width="400" height="300" class="image">

	         <div class="middle">
    			<div class="text"><?php echo $row->nama_project; ?></div>
  			</div>

	        <p><a href="http://<?php echo $row->link_project; ?>"><strong><?php echo $row->nama_project; ?></strong></a></p>
	        <p>We Build in <?php echo $row->build_project; ?></p>
      </div>
    </div>
    <?php
    endforeach;
    ?>
    </div>
</div>
<br>
<?php
} else {
	echo "";
}
endforeach;
?>

<!-- Testimoni-->
<?php
	foreach ($setting ->result() as $row) :
	
	if($row->status_testimoni == "ON"){ 

		?>
	<div class="col-md-12" id="testimoni">  
		<center>
			<br><h2><?php echo $row->judul_testimoni; ?></h2>
			<h4><?php echo $row->desc_testimoni; ?></h4>
			<br>
		</center>
		<div class="col-md-6">
		<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
			<br />
			<br />
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<h5>"Diantara 1 - 10, saya beri nilai untuk www.markazwebdesign.net '9'!"<br><strong>Yahya Muhanna,</strong> RumahSedekah.Com</h5>
				</div>
				<?php
				foreach($testimoni->result() as $row) :
				?>
				<div class="item">
					<h5><?php echo $row->isi_testimoni; ?><br><strong><?php echo $row->who_is; ?>, </strong><?php echo $row->owner; ?></h5>
				</div>
				<?php
				endforeach;
				?>
			
			</div>
		</div>
	</div>
    <div class="col-sm-6" align="center">
		<img src="<?php echo base_url('img/testimonial.png'); ?>">
		<br />
		<br />
		<br />
    </div>
</div>
<?php
} else {
	echo "";
}
endforeach;
?>

<!-- Layanan -->
<?php
	foreach ($setting ->result() as $row) :
	
	if($row->status_product == "ON"){ 

		?>
<div class="col-md-12">
	<center>
		<br><h2><?php echo $row->judul_product; ?></h2>
		<h4><?php echo $row->desc_product; ?></h4>
		<br>
	</center>
	<div class="row slideanim">
		<?php 
		foreach ($product->result() as $row):
		?>
		<div class="col-sm-4 col-xs-12">
	      <div class="panel panel-default text-center">
	        <div class="panel-heading">
	          <h1><?php echo $row->nama_product; ?></h1>
	        </div>
	        <div class="panel-body">
	          <p><?php echo $row->spec_product; ?></p>
	        </div>
	        <div class="panel-footer">
	          <h3><?php echo rupiah($row->harga_product); ?></h3>
	          <h4>Sekali Bayar</h4>
	         <a class='btn btn-lg' href=<?php echo base_url()."order/".$row->id_product; ?>>Pesan Sekarang</a>
	        </div>
	      </div>
	    </div>
	    <?php
	    endforeach;
	    ?>
	</div>
</div>
<?php
} else {
	echo "";
}
endforeach;
?>

<!-- Hubungi Kami -->
<?php
	foreach ($setting ->result() as $row) :
	
	if($row->status_contact == "ON"){ 

		?>
<div class="col-md-12 bg-grey">
  	<center>
		<br><h2><?php echo $row->judul_contact; ?></h2>
		<h4><?php echo $row->desc_contact; ?></h4>
		<br>
	</center>
  <div class="row">
    <div class="col-sm-6">
	  <p><h4><strong>Kontak Kantor</strong></h4></p>
	  <?php
				foreach($profile->result() as $row) :
		?>
      <p><span class="glyphicon glyphicon-map-marker"></span><?php echo $row->alamat_instansi; ?>
      </p>
      <p><span class="glyphicon glyphicon-phone"></span>
      	<?php echo $row->no_hp; ?>
      </p>
      <p><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:admin@markazwebdesign.net"> <?php echo $row->email_instansi; ?></a></p>

      <?php
      endforeach;
      ?>
    </div>
    <div class="col-sm-6">
    <div id="googleMap" style="height:300px;width:100%;"></div>
    <br><br>
    </div>
</div>
</div>
</div>
</body>
</html>
<?php
} else {
	echo "";
}
endforeach;
?>

<!-- Add Google Maps -->
<script>
    function initMap() {
       var uluru = new google.maps.LatLng(-6.4652596,106.7961593);
       var map = new google.maps.Map(document.getElementById('googleMap'), {
         zoom: 4,
         center: uluru
       });
       var marker = new google.maps.Marker({
         position: uluru,
         map: map
       });
     }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqq3oFPrW98Ec1Q5_gC8XgLMXA2aHUpd8&callback=initMap">
</script>