<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          	<th>Level User</th>
		                    <th>FUll Name</th>
		                    <th>Email</th>
		                    <th>User Description</th>
		                    <th>Join Date</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php foreach ($user as $row){ ?>
	                        <tr>
	                          <td><?php echo $row->idlevel; ?></td>
	                          <td><?php echo $row->nameUser; ?></td>
	                          <td><?php echo $row->email; ?></td>
	                          <td><?php echo $row->userDescription; ?></td>
	                          <td><?php echo $row->joinDate; ?></td>
	                        </tr>                      	
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>