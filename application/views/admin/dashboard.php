<div>
	<ul class="breadcrumb">
		<li>
			<a href="#">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">Dashboard</a>
		</li>
	</ul>
</div>
<div class="row-fluid sortable">

	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> Dashboard</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<style>
			.box-dashboard {
				padding: 10px;
				border-right: 1px solid #dedede;
				min-height: 400px;
			}

			.box-dashboard h3 {
				font-weight: normal;
				margin-bottom: 10px;
			}

			ul li {
				list-style: none;
			}

			ul.shortcuts-dashboard {
				margin-left: 0;
				clear: both;
			}

			.shortcuts-dashboard li {
				float: left;
				display: block;
				padding: 10px;
				width: 45%;
				height: 45px;
			}

			.shortcuts-dashboard li a {
				clear:both;
				position: relative;
				top:15px;
			}

			.shortcut-img {
				display: block;
				width: 45px;
				height: 45px;
				float: left;
				padding: 0 10px;
			}

			.shortcut-link {
				clear: both;
			}

			ul.dashboard-notif {
				margin-left: 10px;
			}

			#holder { border: 10px dashed #ccc; width: 300px; min-height: 300px; background: url('/assets/img/plus.png') 50% no-repeat;}
			#holder.hover { border: 10px dashed #0c0; }
			#holder img { display: block; margin: 10px auto; }
			#holder p { margin: 10px; font-size: 14px; }
			progress { width: 100%; }
			progress:after { content: '%'; }
			.fail { background: #c00; padding: 2px; color: #fff; }
			.hidden { display: none !important;}
		</style>
		<div class="row-fluid">
			<div class="box-dashboard span3"  style="min-height: 400px; padding-left: 30px;">
				<h3>Notifications</h3>
				<ul class="dashboard-notif">
					<li>You have <a href="#">1 Unread Messages.</a></li>
					<li>You have <a href="#">4 Booking Request.</a></li>
					<li>You have <a href="#">1 Online Booking.</a> </li>
				</ul>
				<hr>
				<h3>System Alerts</h3>
				<ul class="dashboard-notif" style="margin-left: -10px;">
					<li><div class="alert alert-danger">/assets/uploads/ is not writable!</div></li>
					<li><div class="alert">Admin password should be change.</div></li>
				</ul>
			</div>
			<div class="box-dashboard span5" style="min-height: 400px;">
				<h3>Shortcuts</h3>
				<ul class="shortcuts-dashboard">
		        	<li>
	        			<div class="shortcut-img">
	        				<img src="/assets/img/sc_event.jpg" alt="">
	        			</div>
	        			<a href="/admin/posts?action=add&category=Event">Add New Events</a>
		        	</li>
		        	<li>
	        			<div class="shortcut-img">
	        				<img src="/assets/img/sc_comment.jpg" alt="">
	        			</div>
	        			<a href="/admin/comment">Comments</a>
		        	</li>
		        	<li>
	        			<div class="shortcut-img">
	        				<img src="/assets/img/sc_slide.jpg" alt="">
	        			</div>
	        			<a href="/admin/setting/slideshow">Slideshow Manager</a>
		        	</li>
		        	<li>
	        			<div class="shortcut-img">
	        				<img src="/assets/img/sc_message.jpg" alt="">
	        			</div>
	        			<a href="/admin/message">Messages</a>
		        	</li>
		        	<li>
	        			<div class="shortcut-img">
	        				<img src="/assets/img/sc_message.jpg" alt="">
	        			</div>
	        			<a href="/admin/posts?category=Accomodation">Edit Accomodations</a>
		        	</li>
		        	<li>
	        			<div class="shortcut-img">
	        				<img src="/assets/img/sc_message.jpg" alt="">
	        			</div>
	        			<a href="/admin/posts?category=Package">Edit Packages</a>
		        	</li>
		        	<li>
	        			<div class="shortcut-img">
	        				<img src="/assets/img/sc_message.jpg" alt="">
	        			</div>
	        			<a href="/admin/posts?category=Facility">Facilities</a>
		        	</li>
		        </ul>        
			</div>
			<div class="box-dashboard span4" style="min-height: 400px;">
				<h3>Drop Zone</h3>
				<div id="holder">
  				</div>        
			</div>
		</div>
	</div><!--/span-->

</div><!--/row-->