<div class="box-content">
	<table class="table table-striped table-bordered">
	  <thead>
		  <tr>
			  <th>Accomodation Type</th>
			  <th>Normal Price</th>
			  <th>Special Offer</th>
			  <th>Quantity</th>
			  <th>Publish</th>
			  <th>Action</th>
		  </tr>
	  	</thead>   
	  	<tbody>
			
				<?php foreach ($offers as $row): ?>
				<tr>
					<td><?=$this->post_model->getRoomName($row->post_id)->title;?></td>
					<td style="text-align: center;">
						<div class="input-prepend">
						  	<span class="add-on">$</span>
						  	<input class="span2" name="nprice" id="prependedInput" type="text" value="<?=$row->nprice;?>.00"  style="width:100px; text-align: right;">
						</div>
					</td>
					<td style="text-align: center;">
						<div class="input-prepend">
						  	<span class="add-on">$</span>
						  	<input class="span2" name="sprice" id="prependedInput" type="text" value="<?=$row->sprice;?>.00" style="width:100px; text-align: right;">
						</div>
					</td>
					<td style="text-align: center;">
						<input type="text" name="q" value="<?=$row->q;?>" style="width:40px; text-align: right;">
					</td>
					<td style="text-align: center;">
						<input type="checkbox" name="publish"<?php if ($row->publish == 1) : echo "checked"; endif?>>
					</td>
					<td>
						<a class="btn btn-info" href="#">
							<i class="icon-edit icon-white"></i>  
							Apply                                            
						</a>
						<a class="btn btn-danger">
							<i class="icon-trash icon-white"></i> 
							Reset
						</a>
					</td>
					</tr>
				<?php endforeach ?>
			
	  	</tbody>
  	</table>            
</div>