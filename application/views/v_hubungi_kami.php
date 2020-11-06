<html>
	<head>
		<title> Hubungi Kami </title>
	</head>
	
	<body>
	<!-- Container (Contact Section) -->
<html>
	<head>
		<title> Hubungi Kami </title>
	</head>
<body>
<br />
<br />
<br />
<br />
<div id="contact" class="bg-grey">
  <div class="col-md-12 bg-grey">
		<h2 class="text-center">CONTACT</h2>
		<h4 class="text-center">Hubungi kami! Kami akan berusaha membalas pesan Anda kurang dari 24 jam.</h4>
	<br />
	<br />
	<div class="col-sm-7 bg-grey">
		<p><h4><strong>Kontak Kantor</strong></h4></p>
		<p><span class="glyphicon glyphicon-map-marker"></span> Jl. Pajajaran Raya, RT 05/06, Desa Pabuaran, Kec. Bojong Gede, Kab. Bogor, Indonesia</p>
		<p><span class="glyphicon glyphicon-phone"></span> +62 822 4090 6362 (WhatsApp)</p>
		<p><span class="glyphicon glyphicon-envelope"></span><a href="mailto:admin@markazwebdesign.net"> admin@markazwebdesign.net</a></p>
		<br />
		<br />
		<p><h4><strong>Form Pesan</strong></h4></p>
		<?php 
			echo form_open('hubungi_kami/simpan', array('name'=>'form1', 'class'=>'form_control', 'method'=>'POST'));
		?>
		<?php
			$pesan = $this->input->get("pesan");
			if ($pesan == "sukses") {
			echo '
					<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert"></button>
					<strong>Pesan berhasil dikirim.</strong> Kami akan berusaha membalas pesan anda selekasnya.
					</div>';
			}
		?>
				<div class="col-sm-6 form-group">
					<input class="form-control" id="nama" name="nama" placeholder="Nama Lengkap Anda" type="text" required>
				</div>
				<div class="col-sm-6 form-group">
					<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
				</div>
				<div class="col-sm-12 form-group">
					<input class="form-control" id="subjek" name="subjek" placeholder="Subjek Pesan" type="text" required>
				</div>
				<textarea class="form-control" id="pesan" name="pesan" placeholder="Pesan" rows="5"></textarea><br>
				<div class="col-sm-12 form-group">
					<button class="btn btn-primary" type="submit">Kirim</button> 
				</div>
		<?php
		
		echo form_close();
		?>
		</div>
	<div class="col-sm-5 bg-grey">
	    <br />
	    <br />
	    <br />
		<img src="<?php echo base_url('img/cs.png'); ?>">
		<br />
	    <br />
	    <br />
		<br />
	    <br />
	</div>
  </div>
</div>
</body>
</html>