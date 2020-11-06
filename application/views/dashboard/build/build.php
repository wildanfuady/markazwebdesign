<html>
<head>
	<title>Markaz Admin - <?php echo $jenis; ?></title>
	<style media="all">
		.container{border: solid 0px #000;margin-top:50px;}
		/*.row{margin:10px 0 0px 0px;border:solid 0px #000;} */
		/*.row > *{height:30px;background-color:#ccc;border:solid 1px #00f;margin-top:0px;} */
		p{padding:0px;}
		
	</style>
  </head>
  <body>
  <h3 class="judul garis"><?php echo $jenis; ?></h3>
	<br>
	<div class="col-sm-10">
			<div class="panel-body">
				<ul class="breadcrumb" style="">
					<li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
					<li>Build</li>
				</ul>
			 </div>
	</div>
	<div class="col-sm-12 col-md-10" style="border:0px solid #bbb;border-radius:10px;padding:20px;">
			
				<ul id="myTabs" class="nav nav-tabs" role="tablist">
				  <li role="presentation" class="active"><a href="#style" id="home-tab" role="tab" data-toggle="tab" aria-controls="harian" aria-expanded="true">Style</a></li>
				  <li role="presentation"><a href="#portofolio" role="tab" id="profile-tab" data-toggle="tab" aria-controls="bulanan">Portofolio</a></li>
				  <li role="presentation"><a href="#produk">Produk</a></li>
				  <li role="presentation"><a href="#slide">Slide</a></li>
				  <li role="presentation"><a href="#testimoni">Testimoni</a></li>
				  <li role="presentation"><a href="#whyme">Whyme</a></li>
				</ul>
				<br />
			<div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="style" aria-labelledBy="home-tab">
				<?php
				echo $editor; 
	          	echo form_open_multipart('markaz_admin/update_style');
	        	?>
	           <div class="form-group">
	              <?php 
	                echo form_label('Header', 'header_color'); 
	                $header_color = array('name' => 'header_color', 'class' => 'form-control', 'type' => 'color', 'size' => '5', 'value' => $style->header_color);
	              echo form_input($header_color);
	              echo form_error('header_color');
	              ?>
	            </div>
	            <div class="form-group">
	              <?php 
	                echo form_label('Button', 'button'); 
	                $button = array('name' => 'button', 'class' => 'form-control', 'type' => 'color', 'size' => '5', 'value' => $style->button_color);
	              echo form_input($button);
	              echo form_error('button');
	              ?>
	            </div>
	            <div class="form-group">
	              <?php 
	                echo form_label('Footer 1', 'footer1_color'); 
	                $footer1_color = array('name' => 'footer1_color', 'class' => 'form-control', 'type' => 'color', 'size' => '5', 'value' => $style->footer1_color);
	              echo form_input($footer1_color);
	              echo form_error('footer1_color');
	              ?>
	            </div>
	            <div class="form-group">
	              <?php 
	                echo form_label('Footer 2', 'footer2_color'); 
	                $footer2_color = array('name' => 'footer2_color', 'class' => 'form-control', 'type' => 'color', 'size' => '5', 'value' => $footer2->header_color);
	              echo form_input($footer2_color);
	              echo form_error('footer2_color');
	              ?>
	            </div>
	            <?php
	          	$kembali = array('type' => 'button', 'onclick' => 'history.go(-1);', 'class' => 'btn btn-default');
		        echo form_submit($kembali,'Kembali');
		        echo " ";
		        $btn = array('type' => 'submit', 'name' => 'simpan', 'class' => 'btn btn-primary btn-sm');
		        echo form_submit($btn,'Simpan');
		        echo form_close();
	        	?>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="portofolio" aria-labelledBy="profile-tab">
				
				</div>
			</div>
		</div>
		<!--div class="row">
			<div class="col-md-8" style="border:1px solid #bbb;border-radius:10px;padding:10px 0 5px 10px;background:#fff;">
				
				<p><code>&lt;span class="caret"&gt;&lt;&#47;span&gt;</code></p>
		
			</div>
		</div-->
		
	
	
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script-->
	<script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>