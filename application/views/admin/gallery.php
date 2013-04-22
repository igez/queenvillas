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
	    	$thmb = "/assets/uploads/images/thumbs/";
	    	if ($fn->getExtension() == 'JPG' || $fn->getExtension() == 'jpg' || $fn->getExtension() == 'png' || $fn->getExtension() == 'gif') {
	    		echo "<li class='thumbnail' style='float: left; margin: 4px; list-style:none;'>";
	    		echo "<a style='background: url();' href='".$tpl.$fn->getFilename()."' class='cboxElement'>";
				echo "<img rel='".$thmb."thumb_".$fn->getFilename()."' src='".$thmb."thumb_".$fn->getFilename()."' width='100px' height='100px' class='thumb-img'>";
				echo "</a>";
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