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
<div class="row-fluid sortable">	
	<div class="box span12">
		<div class="box-header well">
			<h2><i class="icon-picture"></i> Gallery</h2>
		</div>
		<div class="box-content">
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
	    <div class="clearfix"></div>
	    <hr />
	    <div class="control-group">
	    	<label for="">Upload Images to Gallery</label>
	    	<div class="controls">
	    		<input data-no-uniform="true" type="file" name="file_upload" id="file_upload" />
	    	</div>
	    </div>
		</div>
	</div><!--/span-->

</div><!--/row-->