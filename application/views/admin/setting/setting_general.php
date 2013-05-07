<div>
	<ul class="breadcrumb">
		<li>
			<a href="#">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">Setting</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">General</a>
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
			<h2><i class="icon-user"></i> Email Setting</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="POST" action="">
 		 		<div class="control-group">
    				<label class="control-label" for="inputEmail">System Email</label>
    				<div class="controls">
      					<input type="text" id="inputEmail" name="sysmail" placeholder="System Email" value="<?=$emails->system_email;?>">
    					<span>Email account for system outgoing email.</span>
    				</div>
    				<div class="controls" style="margin-top: 10px;">
      					<input type="password" id="inputEmail" name="sysmail-password" placeholder="Password">
    				</div>
  				</div>
          <div class="control-group">
             <label class="control-label" for="inputEmail">Booking Recipient</label>
            <div class="controls">
                <input type="text" id="inputEmail" name="booking" placeholder="Manager Email" value="<?=$emails->booking;?>">
            </div>
          </div>
  				<div class="control-group">
    			   <label class="control-label" for="inputEmail">Meeting Reservation Recipient</label>
    				<div class="controls">
      					<input type="text" id="inputEmail" name="rsvp" placeholder="Manager Email" value="<?=$emails->reservation;?>">
    				</div>
  				</div>
          <div class="control-group">
             <label class="control-label" for="inputEmail">Support Recipient</label>
            <div class="controls">
                <input type="text" id="inputEmail" name="support" placeholder="Manager Email" value="<?=$emails->support;?>">
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
                <button class="btn" type="submit">Save</button>
            </div>
          </div>
			</form>        
		</div>
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> System Setting</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
	</div><!--/span-->

</div><!--/row-->