<script>

</script>

<div>
	<ul class="breadcrumb">
		<li>
			<a href="#">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">Setting</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">User</a>
		</li>
	</ul>
</div>

<?php if ($this->session->flashdata('success')) : ?>
<div class="alert alert-success" style="margin-top: 10px;">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<?=$this->session->flashdata('success');?>
</div>
<?php endif; ?>

<div class="row-fluid sortable">	
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> Users</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<a href="/admin/setting/users?action=add" class="btn btn-success" style="margin-bottom:10px;">Add User</a>
			<table class="table table-striped table-bordered ">
			  <thead>
				  <tr>
				  		<th>Fullname</th>
					  	<th>Username</th>
					  	<th>Password</th>
					  	<th>E-Mail</th>
					  	<th>Role</th>
					  	<th>Last Login</th>
				  </tr>
			  </thead>   
			  <tbody>
			  		<?php foreach ($users as $row) : ?>
			  		<tr>
			  			<td><?=$row->first_name . ' ' . $row->last_name;?></td>
				  		<td><?=$row->username;?></td>
				  		<td><a href="/admin/setting/user/chpass?id=<?=$row->id;?>&token=session_id">Change Password</a></td>
				  		<td><?=$row->email;?></td>
				  		<td>Administrator</td>
				  		<td><?=date('H:i:s l, n F Y', $row->last_login);?></td>
				  	</tr>
			  		<?php endforeach; ?>
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->
</div><!--/row-->