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
<div>
	<ul class="breadcrumb">
		<li>
			<a href="#">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">Setting</a> <span class="divider">/</span>
		</li>
		<li><a href="">Landing Page</a></li>
	</ul>
</div>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Landing Page Configuration Page</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
				<style type="text/css">
					.slider-holder {
						width: 100%;
						min-height: 220px;
						border: 1px solid #ccc;
						display: block;

					}

					.slider-thumbnail {
						width: 300px;
						padding: 10px;
						float: left;

					}

					.slider-content {
						width: 50%;
						float: left;
						padding: 10px;
					}

					.slider-content input {
						width: 100%;
					}
					.slider-content textarea {
						margin-top: 10px;
						width: 100%;
						height:148px;
					}

				</style>
				<script type="text/javascript">
					
				</script>
				
			<form class="form-horizontal" action="/admin/post/save" method="POST">
			  <fieldset>
			  	<div class="slider-holder">
			  		<div class="slider-thumbnail">
			  			<img src="http://lorempixel.com/300/200">
			  		</div>
			  		<div class="slider-content">
			  			<input type="text" placeholder="Text input" name="title">
			  			<textarea name="caption" placeholder="Text input"></textarea>
			  		</div>
			  	</div>
				<hr />
				<div class="form-actions">
				  <button type="submit" name="submit" class="btn btn-primary" value="doSave">Save</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div>
	<div class="modal hide fade" id="sliderImg">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    <h3>Select Images :</h3>
	  </div>
	  <div class="modal-body">
	  	<script type="text/javascript">
	  		$('.img-gal').live('click', function() {
	  			$(this).find("img[rel]").attr("rel");
	  		});
	  	</script>
	    <div id="imagez">
	    <?php
	    foreach (new DirectoryIterator("./assets/uploads/images/sliders/") as $fn) {
	    	$tpl = "/assets/uploads/images/sliders/";
	    	$fullpath = $_SERVER['DOCUMENT_ROOT'];
	    	if ($fn->getExtension() == 'jpg' || $fn->getExtension() == 'png' || $fn->getExtension() == 'gif') {
	    		echo "<li class='img-gal' style='float: left; padding: 0 6px 6px 0; list-style:none;'>";
	    		echo "<img rel='".$fn->getFilename()."' src='".$tpl.$fn->getFilename()."' width='100px' height='100px' class='thumb-img'>";
				//echo "<img rel='".$fn->getFilename()."' src='".$tpl.$fn->getFilename()."' width='100px' height='100px' class='thumb-img'>";
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