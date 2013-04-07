<div>
	<ul class="breadcrumb">
		<li>
			<a href="#">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="/admin/comment">Comment</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#"><?=$data->title;?></a>
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
			<h2><i class="icon-user"></i> Comments</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">  
			  <tbody>
				<tr>
					<td width="100">Guest Name</td>
					<td><?=$data->cust_name;?></td>
				</tr>
				<tr>
					<td>Guest From</td>
					<td><?=$data->cust_from;?></td>
				</tr>
				<tr>
					<td>Title</td>
					<td><?=$data->title;?></td>
				</tr>
				<tr>
					<td>Testimonial</td>
					<td><?=$data->testimonial;?></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<a class="btn btn-info" href="/admin/comment/edit/<?=$data->id;?>">
							<i class="icon-edit icon-white"></i>  
							Edit                                            
						</a>
						<a class="btn btn-danger" onClick="return confirm('Are you sure delete this comment?');" href="/admin/comment/delete/<?=$data->id;?>">
							<i class="icon-trash icon-white"></i> 
							Delete
						</a>
					</td>
				</tr>
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->