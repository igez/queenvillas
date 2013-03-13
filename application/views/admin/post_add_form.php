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
			<h2><i class="icon-edit"></i> Form Elements</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" action="/admin/post/save" method="POST">
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
				<div class="control-group">
					<label for="fileInput" class="control-label">Images</label>
					<div class="controls">
						<div class="imagess"></div>
						<input type="hidden" name="files" value="" id="files"/>
						<div class="clearfix"></div>
						<a href="#" class="btn btn-primary btn-small gallery-open">Select Image(s)</a>
						<!-- <input data-no-uniform="true" type="file" name="file_upload" id="file_upload" /> -->
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
	
	<div class="modal hide fade" id="gallery">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    <h3>Select Images :</h3>
	  </div>
	  <div class="modal-body">
	  	<script type="text/javascript">
	  		console.log($('.imagess li').length);
	  		$('#imagez li').live('click', function () {
		      console.log($('.imagess li').length);
		      if ($('.imagess li').length > 3) {
		      	alert('You Have Excedeed Maximum Images. Max = 4');
		      }
		      else {
			      $('.selected').append("<span style='margin: 4px 4px 4px 0;' class='label'>"+$('img', this).attr('rel')+"</span>");
			      $('.imagess').append("<li style='margin: 2px;float: left;list-style:none;'><img src='"+$('img', this).attr('src')+"' width='100px' height='100px'></li>");
			      if ($('.imagess li').length > 1) {
			      	$('#files').val($('#files').val()+", "+$('img', this).attr('rel'));
			      }
			      else {
			      	$('#files').val($('img', this).attr('rel'));
			      }
			  }
		    });
	  	</script>
	  	<div class="selected" style="margin-bottom: 10px;"></div>
	    <div id="imagez">
	    <?php
	    foreach (new DirectoryIterator("./assets/uploads/images/") as $fn) {
	    	$tpl = "/assets/uploads/images/";
	    	if ($fn->getExtension() == 'jpg' || $fn->getExtension() == 'png' || $fn->getExtension() == 'gif') {
	    		echo "<li class='img-gal' style='float: left; padding: 0 6px 6px 0; list-style:none;'>";
				echo "<img rel='".$fn->getFilename()."' src='".$tpl.$fn->getFilename()."' width='100px' height='100px' class='thumb-img'>";
				echo "</li>";
			}
		}
	    
	    ?>
	    </div>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn btn-success" data-dismiss="modal" aria-hidden="true">Finish</a>
	  </div>
	</div>
	
</div><!--/row-->