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
			<h2><i class="icon-user"></i> Add New Users</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form action="/admin/setting/user/save" method="POST">
				
				<table class="table table-striped table-bordered">  
				  	<tbody>
				  		<tr>
							<td width="200">First Name</td>
							<td><input type="text" placeholder="First Name" name="firstname"></td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td><input type="text" placeholder="Last Name" name="lastname"></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input type="text" placeholder="Username" name="username"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="text" placeholder="Email" name="email"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" placeholder="Password" name="password"></td>
						</tr>
						<tr>
							<td>Password Confirmation</td>
							<td><input type="password" placeholder="Password Confirmation" name="passconf"></td>
						</tr>
						<tr>
							<td></td>
							<td><button type="submit" class="btn btn-primary">Submit</button></td>
						</tr>
				</table>

			</form>         
		</div>
	</div><!--/span-->
</div><!--/row-->