<div>
	<ul class="breadcrumb">
		<li>
			<a href="#">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">Comment</a>
		</li>
	</ul>
</div>

<a class="btn btn-large btn-primary" href="/admin/comment/new">Add Comment</a>

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
			<table class="table table-striped table-bordered">
			  <thead>
				  <tr>
					  <th>Guest Name</th>
					  <th>Guest From</th>
					  <th>Title</th>
					  <th>Admin</th>
					  <th>Created</th>
					  <td>Action</td>
				  </tr>
			  </thead>   
			  <tbody>
				<?php foreach ($contents as $row) : ?>
					<tr>
						<td><?=$row->cust_name;?></td>
						<td><?=$row->cust_from;?></td>
						<td><a href="/admin/comment/view/<?=$row->id;?>"><?=$row->title;?></a></td>
						<td><?=$row->admin;?></td>
						<td><?=$row->timestamp;?></td>
						<td class="center">
						<a class="btn btn-success" href="/admin/comment/view/<?=$row->id;?>">
							<i class="icon-zoom-in icon-white"></i>  
							View                                            
						</a>
						<a class="btn btn-info" href="/admin/comment/edit/<?=$row->id;?>">
							<i class="icon-edit icon-white"></i>  
							Edit                                            
						</a>
						<a class="btn btn-danger" onclick="return confirm('Are you sure delete this comment?');"href="/admin/comment/delete/<?=$row->id;?>">
							<i class="icon-trash icon-white"></i> 
							Delete
						</a>
					</td>
					</tr>
				<?php endforeach; ?>
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->