<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<!-- Flash message -->
<?php $this->load->view('_partial/flash_message') ?>
<p>
    <?php echo anchor('level/create', '<i class="glyphicon glyphicon-plus"> <b>Tambah Data</b></i>', array('class' => 'btn btn-primary btn-sm')); ?>
</p>

<div class="x_content">
    <p class="text-muted font-13 m-b-30">
<?php if ($level): ?>
    <table id="datatable" class="table table-striped table-bordered">
      <thead>
        <tr>
          	<th>No</th>
          	<th>Level User</th>
            <th>Action</th>
        </tr>
      </thead>
		<?php $i=1; ?>

      <tbody>
      <?php foreach($level as $row): ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $row->name ?></td>
              <td>
                <?php echo anchor("level/edit/$row->idlevel", '<i class="fa fa-edit"></i>', array('class' => 'btn btn-warning btn-xs')); ?>
                <?php echo anchor("level/delete/$row->idlevel", '<i class="fa fa-remove"></i>', array('class' => 'btn btn-danger btn-xs')); ?>
              </td>
            </tr>
       <?php endforeach ?>
      </tbody>
    </table>
<?php else: ?>
	<p>Data <b>User</b> kosong atau tidak ditemukan.</p>
<?php endif ?>
  </div>
