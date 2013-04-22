<script>
	$(document).ready(function (e) {
		$('.viewMessage').live('click', function () {
			var id = $(this).attr('rel');

			$.ajax({
               	type: 'GET',
               	url:  '/admin/message/isread/'+id,
               	cache: 'false',
               	dataType: 'json',
               	success: function(response) {
                   	if(response.status == '1') {
                   		$(this).parent().parent().css('font-weight', 'normal');
                   		$('#Message-'+id).modal('show');
                   	} 

                   	else {
                    	alert(response.status);
                   	}
                }
            });
		});
	});
</script>

<div>
	<ul class="breadcrumb">
		<li>
			<a href="#">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">Message</a>
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
			<h2><i class="icon-user"></i> Inbox</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered">
			  <thead>
				  <tr>
					  <th>Sender</th>
					  <th>Email</th>
					  <th>Timestamp</th>
					  <th>Subject</th>
					  <th>Message</th>
				  </tr>
			  </thead>   
			  <tbody>
			  	<?php foreach ($data as $row): ?>
			  	<?php if ($row->read == NULL) : ?>
			  	<tr style="font-weight: bold;">
			  	<?php else : ?>
			  	<tr>
			  	<?php endif; ?>
			  		<td><?=$row->rcpt_lname;?>, <?=$row->rcpt_fname;?></td>
			  		<td><?=$row->rcpt_email;?></td>
			  		<td><?=$row->timestamp;?></td>
			  		<td><?=$row->subject;?></td>
			  		<td><a href="#" rel="<?=$row->id;?>" class="viewMessage" data-toggle="modal" role="button">View Message</a></td>
			  	</tr>
			  	<?php endforeach; ?>
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->
</div><!--/row-->

<!-- Modal Starts Here ! -->
<?php foreach ($data as $row): ?>
	<div id="Message-<?=$row->id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    <h3><?=$row->subject;?></h3>
	  </div>
	  <div class="modal-body">
	    <p><?=$row->body;?></p>
	  </div>
	  <div class="modal-footer">
	  	<a type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Reply</a>
	    <a type="button" class="btn btn-invert" data-dismiss="modal" aria-hidden="true">Close</a>
	  </div>
	</div>
<?php endforeach; ?>