<script type="text/javascript">
	$().ready(function () {
			$('.slug').slugify('#title');
		
			var pigLatin = function(str) {
				return str.replace(/(\w*)([aeiou]\w*)/g, "$2$1ay");
			}
		
			$('#pig_latin').slugify('#title', {
					slugFunc: function(str, originalFunc) { return pigLatin(originalFunc(str)); } 
				}
			);
		
		}); 
</script>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Add New Events</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" action="/admin/post/save" method="POST" enctype="multipart/form-data">
			  <fieldset>
				<div class="control-group">
				  <label class="control-label" for="typeahead">Title </label>
				  <div class="controls">
					<input type="text" id="title" name="title">
				  </div>
				  <div class="control">
				  	<input type="hidden" class="slug" name="slug"/>
				  </div>
				</div>
				
				<div class="control-group">
					<label for="" class="control-label">Category</label>
					<div class="controls">
						<select name="category" id="category">
							<?php foreach ($category as $row) : ?>
								<?php if ($_GET['category'] == $row->category): ?>
									<option value="<?=$row->id;?>" selected><?=$row->category;?></option>
								<?php else : ?>
									<option value="<?=$row->id;?>"><?=$row->category;?></option>
								<?php endif; ?>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="textarea2">Description</label>
				  <div class="controls">
					<textarea class="cleditor" id="textarea2" rows="3" name="desc"></textarea>
				  </div>
				</div>
				<div class="form-actions">
				  <button type="submit" name="submit" class="btn btn-primary" value="doSave">Save</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->
</div><!--/row-->