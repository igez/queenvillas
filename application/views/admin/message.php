<div>
	<ul class="breadcrumb">
		<li>
			<a href="#">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">Page</a>
		</li>
	</ul>
</div>
<a class="btn btn-large btn-primary" href="/admin/posts?action=add">Add Page</a>

<?php if ($this->session->flashdata('success')) : ?>
<div class="alert alert-success" style="margin-top: 10px;">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<?=$this->session->flashdata('success');?>
</div>
<?php endif; ?>

<div class="row-fluid sortable">	
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> Pages</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>Title</th>
					  <th>Creator</th>
					  <th>Created</th>
					  <th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
			  	<?php foreach ($pages as $row): ?>
			  		<td><a href="/admin/page?action=edit&id=<?=$row->id;?>"><?=$row->title;?></a></td>
			  		<td>Administrator</td>
			  		<td><?=$row->timestamp;?></td>
			  		<td class="center">
						<a class="btn btn-success" href="/<?=$row->title;?>">
							<i class="icon-zoom-in icon-white"></i>  
							View                                            
						</a>
						<a class="btn btn-info" href="/admin/page?action=edit&id=<?=$row->id;?>">
							<i class="icon-edit icon-white"></i>  
							Edit                                            
						</a>
						<a class="btn btn-danger" href="#">
							<i class="icon-trash icon-white"></i> 
							Delete
						</a>
					</td>
			  	<?php endforeach; ?>
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->