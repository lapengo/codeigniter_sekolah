<?= validation_errors(); ?>

<?= form_open($action, array(
								'class' => 'form-horizontal form-label-left'
							)) 
?>

	<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Kelas</label>
	<div class="col-md-3 col-sm-3 col-xs-12">
	  <?= form_input(array(	  						
        					'type' => 'text',
	  						'name' => 'kelas', 
	  						'class'=>'form-control col-md-10'
	  	)); ?>
	</div>
	</div> 

	<div class="form-group">
	<div class="col-md-6 col-md-offset-3">
	  <?= form_submit(array(
	  						'name'  => 'submit', 
	  						'class' => 'btn btn-success',
	  						'value' => 'Save Data'
	  						)); ?>
	</div>
	</div>

<?= form_close() ?>