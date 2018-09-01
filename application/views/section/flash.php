<?php if ($this->session->flashdata('sukses')): ?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Sukses!</strong> <?=$this->session->flashdata('sukses'); ?>
	</div>
<?php endif ?>
<?php if ($this->session->flashdata('gagal')): ?>
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Sukses!</strong> <?=$this->session->flashdata('gagal'); ?>
	</div>
<?php endif ?>