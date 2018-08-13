<div class="content-page">
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h4 class="page-title m-b-20 m-t-0">Users</h4>
				</div>
			</div>
			<?php if($this->session->userdata('message')) {  ?>
		         <?php echo $this->session->userdata('message');?>
			<?php } ?>
			<div class="row">
				<div class="col-lg-12">
					<div class="card-box m-b-0">
						<div class="table-responsive">
							<table class="table table-actions-bar table-striped releasetable m-b-0">
								<thead>
									<tr>                                                    
										<th>#</th>
										<th>Name</th>
										<th>E-mail</th>
										<th>verified</th>
										<th>Status</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									 if(!empty($list)) 
									{
									$i=1;
									foreach($list as $item) {
										$status = 'Active'; if($item['status']==1){$status = 'Inactive';} 
										$verified = 'Yes' ; if($item['verified']==1){$verified = 'No';} 
										if(!empty($item['parent_name'])){ $parent_category = $item['parent_name'];}
										?>
									<tr>                                                    
										<td><?php echo $i; ?></td>
										<td><?php echo $item['fullname']; ?></td>
										<td><?php echo $item['email']; ?></td>
										<td><?php echo $verified; ?></td>                                                       
										<td><?php echo $status; ?></td>
										<td class="text-right">
											<a href="<?php echo base_url()."admin/user/edit_user/".$item['USERID']; ?>" class="table-action-btn" title="Edit"><i class="mdi mdi-pencil text-success"></i></a>
											<!-- <a href="#" onclick="delete_user(<?php echo $item['USERID'] ?>)" class="table-action-btn" title="Delete"><i class="mdi mdi-window-close text-danger"></i></a> -->
										</td>
									</tr>
									<?php $i = $i+1; } } else { ?>
									<tr>
										<td colspan="6"><p class="text-danger text-center m-b-0">No Records Found</p></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>