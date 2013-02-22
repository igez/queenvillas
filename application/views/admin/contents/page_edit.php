<div>
	<ul class="breadcrumb">
		<li>
			<a href="#">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">Page</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="">Edit</a> <span class="divider">/</span>
		</li>
		<li><a href=""><?=$page->title;?></a></li>
	</ul>
</div>
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
			<h2><i class="icon-edit"></i> <?=$page->title;?></h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" action="/admin/post/update" method="POST" enctype="multipart/form-data">
			  <fieldset>
				<div class="control-group">
				  <label class="control-label" for="typeahead">Title </label>
				  <input type="hidden" name="id" value="<?=$page->id;?>"/>
				  <div class="controls">
					<input type="text" id="title" name="title" value="<?=$page->title;?>">
				  </div>
				  <div class="control">
				  	<input type="hidden" class="slug" name="slug"/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="typeahead">Images </label>
				  
				  <input type="hidden" name="id"/>
				  <div class="controls">
					<input type="text" id="title" name="title">
				  </div>
				  <div class="control">
				  	<input type="hidden" class="slug" name="slug"/>
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