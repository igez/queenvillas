<div class="box-content">
	<div class="alert alert-success status-message" style="display: none;"></div>
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
					<input type="hidden" name="id" value="<?=$row->post_id;?>">
					<td><div class="room-name">
						<?=$this->post_model->getRoomName($row->post_id)->title;?>
					</div></td>
					<td style="text-align: center;">
						<div class="input-prepend">
						  	<span class="add-on">$</span>
						  	<input class="span2" name="nprice" id="prependedInput" type="text" value="<?=$row->nprice;?>"  style="width:100px; text-align: right;">
						</div>
					</td>
					<td style="text-align: center;">
						<div class="input-prepend">
						  	<span class="add-on">$</span>
						  	<input class="span2" name="sprice" id="prependedInput" type="text" value="<?=$row->sprice;?>" style="width:100px; text-align: right;">
						</div>
					</td>
					<td style="text-align: center;">
						<input type="text" name="q" value="<?=$row->q;?>" style="width:40px; text-align: right;">
					</td>
					<td style="text-align: center;">
						<input type="checkbox" name="publish"<?php if ($row->publish == 1) : echo "checked"; endif?>>
					</td>
					<td>
						<a class="btn btn-info" href="#" id="submit">
							<i class="icon-ok-sign icon-white"></i> Save                                        
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
<script>
	$(document).ready(function() {
		$('a#submit').click(function() {
			var obj = $(this);
			obj.html('Saving <img src="/assets/img/ajax-save.gif">');
			$(".status-message").fadeOut(200);
			var parent = $(this).parent().parent();
			var room = $(parent).find('.room-name').text();
			var id = $(parent).find('input[name=id]').val();
			var special = $(parent).find('input[name=sprice]').val();
			var normal = $(parent).find('input[name=nprice]').val();
			var q = $(parent).find('input[name=q]').val();
			var publish = $(parent).find('input[name=publish]').is(':checked');

			var dataString = 'id='+id+'&sprice='+special+'&nprice='+normal+'&q='+q+'&publish='+publish;

			$.ajax({
				type: "POST",  
				url: "/ajax/accomodation/save",  
				data: dataString,  
				success: function(data) {
							if (data == 1) {
								$(".status-message").html('<img src="/assets/img/yes.png" alt="" width="16px" style="margin-top: -8px; margin-right: 5px;">  <b>'+room+'</b> has been successfully updated. <a class="close" data-dismiss="alert" href="#">&times;</a>');
								$(".status-message").fadeIn(300);
								obj.html('<i class="icon-ok-sign icon-white"></i> Save ');
							}
						}
			});
			return false;

		});
	});
</script>