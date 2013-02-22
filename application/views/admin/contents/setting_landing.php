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
					.slide-thumb {
						
						margin: 10px;
						width: 300px;
						height: auto;
						float: left;
					}

					.slide-thumb-empty {
						margin: 10px;
						width: 300px;
						height: 300px;
						float: left;
						background: #ccc url('http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=3249213') no-repeat 50%;
						display: block;
					}
					
					
					.slider-holder {
						background: #ccc;
						display: block;
						width: 300px;
						height: 200px;
						border: 1px solid #ccc;
					}
					
					.slide-caption {
						width: 96%;
						padding: 2%;
						border-radius: 0;
						-webkit-border-radius: 0;
					}
					
					.slide-btn {
						position: absolute;
						background: #fff;
						padding: 4px;
						margin: 5px;
						border-radius: 5px;
					}
				</style>
				<script type="text/javascript">
					$('#addImg').live('click', function() {
						alert('ewe');
					});
				</script>
				<div class="slide-thumb">
					<div class="slider-holder">
						<a href="#" class="btn btn-small slide-btn chImg">Change Image</a>
						<img src="/assets/uploads/images/sliders/" alt="" width="300px"/>
					</div>
					<textarea name="" id="" cols="30" rows="4" class="slide-caption"><?=$row['caption'];?></textarea>
				</div>
				<div class="slide-thumb-empty" id="addImg">

				</div>
			<div class="clearfix"></div>
			<form class="form-horizontal" action="/admin/post/save" method="POST">
			  <fieldset>

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