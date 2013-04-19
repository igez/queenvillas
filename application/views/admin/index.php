	<?php $this->load->view("admin/header"); ?>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
			<?php $this->load->view("admin/sidebar"); ?>
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			<div id="content" class="span10">
			<!-- content starts -->
			<?php $this->load->view("admin/$content");?>
			</div><!--/#content.span10-->
		</div><!--/fluid-row-->
				
		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

		<footer>
			
		</footer>
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	
	<!-- jQuery UI -->
	<script src="/assets/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="/assets/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="/assets/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="/assets/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="/assets/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="/assets/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="/assets/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="/assets/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="/assets/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="/assets/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="/assets/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="/assets/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="/assets/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="/assets/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="/assets/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='/assets/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='/assets/js/jquery.dataTables.min.js'></script>
	<script src="/assets/js/holder.js"></script>
	<!-- chart libraries start -->
	<script src="/assets/js/excanvas.js"></script>
	<script src="/assets/js/jquery.flot.min.js"></script>
	<script src="/assets/js/jquery.flot.pie.min.js"></script>
	<script src="/assets/js/jquery.flot.stack.js"></script>
	<script src="/assets/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="/assets/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="/assets/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="/assets/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="/assets/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="/assets/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="/assets/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="/assets/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="/assets/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="/assets/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="/assets/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="/assets/js/jquery.history.js"></script>
	
	<!-- application script for Charisma demo -->
	<script src="/assets/js/charisma.js"></script>
	<script src="/assets/js/html5.utils.js"></script>
	
	
	
		
</body>
</html>
