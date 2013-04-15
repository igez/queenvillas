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

<a class="btn btn-large btn-primary" href="/admin/posts?action=add&category=<?php echo $_GET['category']; ?>">Add Post</a>

<?php if ($this->session->flashdata('success')) : ?>
<div class="alert alert-success" style="margin-top: 10px;">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<?=$this->session->flashdata('success');?>
</div>
<?php endif; ?>

<div class="row-fluid sortable">	
	<div class="box span12">
		<ul class="nav nav-tabs" id="myTab">
		  	<li class="active"><a href="#index">Accomodation</a></li>
		  	<li><a href="#profile">Offers</a></li>
		</ul>
		<div class="tab-content">
		  	<div class="tab-pane active" id="index">
		  		<?php $this->load->view('admin/posts_accomodation_index'); ?>
		  	</div>
		  	<div class="tab-pane" id="profile">
		  		<?php $this->load->view('admin/posts_accomodation_configuration'); ?>
		  	</div>
		</div>
	</div><!--/span-->

</div><!--/row-->