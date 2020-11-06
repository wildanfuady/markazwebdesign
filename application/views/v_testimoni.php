<?php
	foreach($testimoni->result() as $row) :
?>
	<div class="item-active">
		<h5><?php echo $row->isi_testimoni; ?><br><strong><?php echo $row->who_is; ?>,</strong><?php echo $row->owner; ?></h4>
	</div>
<?php
	endforeach;
?>