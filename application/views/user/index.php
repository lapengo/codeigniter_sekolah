<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<!-- Flash message -->
<?php $this->load->view('_partial/flash_message') ?>

<p>
    <?php echo anchor('admincr', '<i class="glyphicon glyphicon-plus"> <b>Tambah Data</b></i>', array('class' => 'btn btn-primary btn-sm')); ?>
</p>

<div class="x_content">
    <p class="text-muted font-13 m-b-30">
<?php if ($user): ?>
    <table id="datatable" class="table table-striped table-bordered">
      <thead>
        <tr>
          	<th>No</th>
          	<th>Level User</th>
          	<th>Nama Admin</th>
          	<th>Email</th>
          	<th>joinDate</th>
            <th>Action</th>
        </tr>
      </thead>
		<?php $i=1; ?>

      <tbody>
      <?php foreach($user as $row): ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $row->name ?></td>
              <td><?= $row->nameUser ?></td>
              <td><?= $row->email ?></td>
              <td><?= $row->joinDate ?></td>

      <?php 

        $iduser= base64_encode($row->iduser);
        $status= base64_encode($row->status);
        if ($row->status == "active") {
          $link= anchor("admupd/$iduser/$status", '<i class="fa fa-unlock"></i>', array('class' => 'btn btn-success btn-xs'));
        }
        elseif ($row->status == "blockir") {
          $link= anchor("admupd/$iduser/$status", '<i class="fa fa-unlock-alt"></i>', array('class' => 'btn btn-warning btn-xs'));
        }
        else{
          $link= '<div class="btn btn-default btn-xs"><i class="fa fa-clock-o"></i></div>';
        }
      ?>
              <td>
                <?= $link; ?>
                <?= anchor("admdel/$iduser", '<i class="fa fa-remove"></i>', array('class' => 'btn btn-danger btn-xs')); ?>
              </td>
            </tr>
       <?php endforeach ?>
      </tbody>
    </table>
<?php else: ?>
	<p>Data <b>User</b> kosong atau tidak ditemukan.</p>
<?php endif ?>
  </div>
