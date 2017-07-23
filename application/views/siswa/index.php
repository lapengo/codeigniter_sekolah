<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<script type="text/javascript">
$(function(){
   var t = $('#datatable-responsive').DataTable({
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
    "targets": [0,1,3,4,5,6,7]
        }],
        "order": [[ 2, 'asc' ]],
    "processing": true,
        "serverSide": true,
        "ajax":{
    "url":"<?= site_url("siswa");?>",
    // "data":function(d){
    //   d.mykey="myval";
    // },
    "dataSrc":function(json){
      $("#total").text(json.total);
      return json.data;
    }
    }

    });

  });
</script>

<!-- Flash message -->
<?php $this->load->view('_partial/flash_message') ?>
<p>
    <?php echo anchor('siswa/create', '<i class="glyphicon glyphicon-plus"> <b>Tambah Data Siswa</b></i>', array('class' => 'btn btn-primary btn-sm')); ?>
</p>

<div class="x_content">
    <p class="text-muted font-13 m-b-30">
<?php if ($siswa): ?>
    <table id="datatable" class="table table-striped table-bordered">
      <thead>
        <tr>
          	<th>No</th>
            <th>NIS</th>
            <th>nmSiswac</th>
            <th>tmpLahir</th>
            <th>gender</th>
            <th>hp1</th>
            <th>hp2</th>
            <th>emailSiswa</th>
            <th>Action</th>
        </tr>
      </thead>
		<?php $i=1; ?>

      <tbody>

      </tbody>
    </table
    <div id="total"></div>
<?php else: ?>
	<p>Data <b>User</b> kosong atau tidak ditemukan.</p>
<?php endif ?>
  </div>
