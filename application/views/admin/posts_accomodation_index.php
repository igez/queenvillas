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
		<tr class="accordion-group">
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
				<!--
				<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#<?=$row->slug;?>">
					<i class="icon-star icon-white"></i>
					Pricing
				</button>
				<div id="<?=$row->slug;?>" class="collapse out">
					<div class="offers" style="margin-top:10px;">
						<div class="offer-label" style="width: 150px; float: left; margin-top: 3px;">Normal Price</div>
						<div class="offer-form"><input type="text" style="width: 100px;"></div>
						<div class="offer-label" style="width: 150px; float: left; margin-top: 3px;">Special Price</div>
						<div class="offer-form"><input type="text" style="width: 100px;"></div>
						<div class="offer-label" style="width: 150px; float: left; margin-top: 3px;">Quantity</div>
						<div class="offer-form"><input type="text" style="width: 100px;"></div>
					</div>
				</div>
				-->
			</td>
		</tr>
		<?php endforeach; ?>
	  </tbody>
  </table>            
</div>