
<form action="<?php echo site_url().$form_action;?>" method="post">
<?= isset($input->iduser) ? form_hidden('iduser', $input->iduser) : '' ?>

<div class="form-group">
	<?= form_label('Nama Lengkap', 'nama_user', ['class' => 'control-label col-md-3']) ?>
	<span class="required">*</span>
	<div class="col-md-4">
		 <?= form_input('nameUser', $input->nameUser, ['class'=>'form-control has-feedback-left']) ?>
		 <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	</div>
			<?= form_error('nameUser') ?>
</div>


<div class="row">
		<div class="col-2">&nbsp;</div>
		<div class="col-8"><?= form_button(['type' => 'submit', 'content' => 'Simpan', 'class' => 'btn-primary']) ?></div>
</div>

<?= form_close() ?>


<?php echo $form_action; ?>