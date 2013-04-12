<div>
	<ul class="breadcrumb">
		<li>
			<a href="#">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">Posts</a>
		</li>
	</ul>
</div>

<a class="btn btn-large btn-primary" href="/admin/posts?action=add&category=<?php echo $_GET['category']; ?>">Add Post</a>

<?php if ($this->session->flashdata('success')) : ?>
<div class="alert alert-success" style="margin-top: 10px;">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<?=$this->session->flashdata('success');?>
</div>
<?php endif; ?>

<div class="row-fluid sortable">	
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> <?php echo $_GET['category']; ?></h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered">
			  <thead>
				  <tr>
					  <th>Title</th>
					  <th>Category</th>
					  <th>Creator</th>
					  <th>Created</th>
					  <th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
				<?php foreach ($data as $row) : ?>
				<tr>
					<td><a href="/accomodation/<?=$row->slug;?>"><?=$row->title;?></a></td>
					<td class="center"><?=$this->category_model->findById($row->category_id);?></td>
					<td class="center">Administrator</td>
					<td class="center">
						<?=$row->timestamp;?>
					</td>
					<td class="center">
						<a class="btn btn-success" href="/accomodation/<?=$row->slug;?>">
							<i class="icon-zoom-in icon-white"></i>  
							View                                            
						</a>
						<a class="btn btn-info" href="/admin/posts?action=edit&id=<?=$row->id;?>&category=<?=$row->category_id;?>">
							<i class="icon-edit icon-white"></i>  
							Edit                                            
						</a>
						<a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="/admin/posts?action=delete&id=<?=$row->id;?>&category=<?=$this->input->get('category');?>">
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