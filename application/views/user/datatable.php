<!-- ini belum bisa dipakai -->

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<br>
<p>
    <?php echo anchor('user/add_user', '<i class="glyphicon glyphicon-plus"> <b>Tambah Data</b></i>', array('class' => 'btn btn-primary btn-sm')); ?>
</p>

<div class="x_content">
    <p class="text-muted font-13 m-b-30">
    <table id="datatable" class="table table-striped table-bordered">
      <thead>
        <tr>
          	<th>Level User</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>User Description</th>
            <th>Join Date</th>
            <th width="5%">Action</th>
        </tr>
      </thead>


      <tbody>
      <?php foreach($user as $row){ ?>
            <tr>
              <td><?php echo $row->name ?></td>
              <td><?php echo $row->nameUser ?></td>
              <td><?php echo $row->email ?></td>
              <td><?php echo $row->userDescription ?></td>
              <td><?php echo $row->joinDate ?></td>
              <td>                  
                <?php echo anchor('user/edit_user', '<i class="fa fa-edit"></i>', array('class' => 'btn btn-warning btn-xs')); ?>
                <?php echo anchor('user/delete_user', '<i class="fa fa-remove"></i>', array('class' => 'btn btn-danger btn-xs')); ?>
              </td>
            </tr>                      	
      <?php } ?>
      </tbody>
    </table>
  </div>

  <!-- <script type="text/javascript">
  	$(document).ready(function() {
	    $('#datatable').DataTable( {
	        "processing": true,
	        "serverSide": true,
	        // "ajax": "<?php echo base_url(); ?>/user/index"
          "ajax":{
              url:"<?php echo base_url() . '/user/index'; ?>",
              type:"POST"
          },
          "columnDefs":{
              "target":[0, 3, 4],
              "orderable":false,
          }
	    } );
	} );
  </script> -->