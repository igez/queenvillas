<div>
	<ul class="breadcrumb">
		<li>
			<a href="#">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">Setting</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">General</a>
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
			<h2><i class="icon-user"></i> General Setting</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered">
			 	<tr>
			 		<td>System Email</td>
			 		<td>
			 			<input type="text" name="hrd_email" class="input" value="<?=$this->config->item('info_email');?>" style="margin-bottom: 0;">
			 			<span><a href="#" class="btn">Save</a></span>
			 			<span><a href="#" class="btn">Change Password</a></span>
			 		</td>
			 	</tr>
			 	<tr>
			 		<td>Admin Email</td>
			 		<td>
			 			<input type="text" name="hrd_email" value="<?=$this->config->item('admin_email');?>"  style="margin-bottom: 0;">
			 			<span><a href="#" class="btn">Save</a></span>
			 		</td>
			 	</tr>
			 	<tr>
			 		<td>HRD Email</td>
			 		<td>
			 			<input type="text" name="hrd_email" value="<?=$this->config->item('hrd_email');?>"  style="margin-bottom: 0;">
			 			<span><a href="#" class="btn">Save</a></span>
			 		</td>
			 	</tr>
			 	<tr>
			 		<td>Manager Email</td>
			 		<td>
			 			<input type="text" name="hrd_email" value="<?=$this->config->item('manager_email');?>"  style="margin-bottom: 0;">
			 			<span><a href="#" class="btn">Save</a></span>
			 		</td>
			 	</tr>
		  	</table>            
		</div>
	</div><!--/span-->

</div><!--/row-->