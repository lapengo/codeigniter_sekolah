<?= form_open($action) ?>

<div class="item form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="level">Name Level<span class="required">*</span></label>
	<div class="col-md-6 col-sm-6 col-xs-12">

		<input type="hidden" name="id" value='<?= $level->idlevel ?>'>
		<input type="text" id="level" value='<?= $level->name ?>' class="form-control col-md-7 col-xs-12" data-validate-length-range="5" name="level" placeholder="both name(s) e.g Jon Doe" required="required" type="text">

	</div>
</div>

<br/><br/><br/><br/>
<div class="form-group">
<div class="col-md-6 col-md-offset-3">
  <button id="send" type="submit" class="btn btn-success">Submit</button>
</div>
</div>
<?= form_close() ?>
