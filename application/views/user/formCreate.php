<?= form_open($action, array(
								'class' => 'form-horizontal form-label-left'
							)) 
?>

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12">Level<span class="required">*</span></label>
<div class="col-md-2 col-sm-2 col-xs-12">
  	<?= form_dropdown('idlevel', getDropdownList('level', ['idlevel', 'name']), set_value('level'), 'class="form-control"') ?>
</div>
	<?= form_error('idlevel', '<span id="helpBlock2" class="help-block label label-danger">', '</span>'); ?>
</div>

<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Email Active<span class="required">*</span></label>
	<div class="col-md-3 col-sm-3 col-xs-12">
	  <?= form_input(array(	  						
        					'type' => 'text',
	  						'name' => 'email', 
	  						'class'=>'form-control has-feedback-left',
	  						'value'=> set_value('email')
	  	)); ?>
	  	<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
	</div>
	<?= form_error('email', '<span id="helpBlock2" class="help-block label label-danger">', '</span>'); ?>
</div> 

<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required">*</span></label>
	<div class="col-md-3 col-sm-3 col-xs-12">	  
	  <?= form_input(array(	  						
        					'type' => 'password',
	  						'name' => 'pws', 
	  						'class'=>'form-control col-md-10',
	  						'value'=> set_value('pws')
	  	)); ?>
	</div>
	<?= form_error('pws', '<span id="helpBlock2" class="help-block label label-danger">', '</span>'); ?>
</div>

<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Full Name<span class="required">*</span></label>
	<div class="col-md-3 col-sm-3 col-xs-12">	  
	  <?= form_input(array(	  						
        					'type' => 'text',
	  						'name' => 'nameUser', 
	  						'set_value' => 'fname',
	  						'class'=>'form-control has-feedback-left',
	  						'value'=> set_value('nameUser')
	  	)); ?>
	  	<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	</div>
	<?= form_error('nameUser', '<span id="helpBlock2" class="help-block label label-danger">', '</span>'); ?>
</div>

<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
	<div class="col-md-3 col-sm-3 col-xs-12">
	  <?= form_textarea(array(	  							
	  						'name' => 'descr', 
	  						'rows' => '3',
	  						'class'=> 'form-control col-md-10',
	  						'value'=> set_value('descr')
	  )); ?>
	</div>
	<?= form_error('descr', '<span id="helpBlock2" class="help-block label label-danger">', '</span>'); ?>
</div>

<div class="form-group">
<div class="col-md-6 col-md-offset-3">
  <?= form_submit(array(
  						'class' => 'btn btn-success',
  						'value' => 'Save Data'
  						)); ?>
</div>
</div>

<?= form_close() ?>
