<div>
	<ul class="breadcrumb">
		<li>
			<a href="#">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="/admin/comment">Comment</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#"><?=$data->title;?></a>
		</li>
	</ul>
</div>

<?php if ($this->session->flashdata('success')) : ?>
<div class="alert alert-success" style="margin-top: 10px;">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<?=$this->session->flashdata('success');?>
</div>
<?php endif; ?>

<div class="row-fluid sortable">	
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> Comments</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form action="" method="POST">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">  
				  <tbody>
					<tr>
						<input type="hidden" name="admin" value="<?=$this->ion_auth->user()->row()->id;?>">
						<input type="hidden" name="id" value="<?=$data->id;?>">
						<td width="100">Guest Name</td>
						<td><input type="text" name="name" value="<?=$data->cust_name;?>"></td>
					</tr>
					<tr>
						<td>Guest From</td>
						<td><input type="text" name="from" value="<?=$data->cust_from;?>"></td>
					</tr>
					<tr>
						<td>Title</td>
						<td><input type="text" name="title" class="input-xxlarge" value="<?=$data->title;?>"></td>
					</tr>
					<tr>
						<td>Testimonial</td>
						<td>
							<textarea name="testi" id="" rows="10" style="width:530px;"><?=$data->testimonial;?></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<button class="btn btn-success" type="submit" value="submit" name="submit">
								Save                                            
							</button>
							<a class="btn" href="/admin/comment/">
								
								Cancel
							</a>
						</td>
					</tr>
				  </tbody>
			  </table>    
		  </form>        
		</div>
	</div><!--/span-->

</div><!--/row-->