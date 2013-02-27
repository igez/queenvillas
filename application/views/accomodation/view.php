<!DOCTYPE html>
<html>
  <head>
    <title>Queen Villas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/assets/css/style.css" />
	<link rel="stylesheet" href="/assets/css/ui-lightness/jquery-ui-1.10.1.custom.css" />
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/assets/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery-ui-1.8.21.custom.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.ba-cond.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.slitslider.js"></script>

  </head>
  <style type="text/css">
  .dotbg {
    height: 300px;
    position: relative;
    z-index: -4;
    background-image:url('/assets/img/atfot.gif') no-repeat; 
    background-size:cover;
  }
  </style>
  <body>
  
  	<?php $this->load->view('static/nav'); ?>
  	<?php if ($content->cover_image) : ?>
  		<div class="bg-head" style="background: url('/assets/uploads/images/cover/<?=$content->cover_image;?>') no-repeat; background-size: cover;;">
  	<?php else : ?>
  		<div class="bg-head" style="background: gray;">
  	<?php endif ;?>
  		
  	</div>
    <style>
      .bahe {
        background: url('/assets/img/atfot.gif') repeat-x;
        width: 100%;
        height: 300px;
      }
    </style>
    <div class="bahe">
      <div class="title-container">
        <div class="yellow-s"></div>
        <div class="container">
          <div class="yellow">
            <h2><?=$content->title;?></h2>
            <p><i>Queen Villas & Spa</i></p>
          </div>
        </div>
      </div>
    </div>
  	
  
  	<div class="content container">

  		<script type="text/javascript">
  			$(document).ready(function() {
  					$('img.screen').load(function() {
  						$('.screen').hide().css({visibility: "visible"}).fadeIn("fast");
  					});
  					$('img.thumb-1').load(function() {
  						$('.thumb-1').hide().css({visibility: "visible"}).fadeIn("fast");
  					});
  					$('img.thumb-2').load(function() {
  						$('.thumb-2').hide().css({visibility: "visible"}).fadeIn("fast");
  					});
  			});
			$(function() {
				$(".thumb").click(function() {
					var image = $(this).attr("rel");
					$('#screen').hide();
					$('#screen').fadeIn('slow');
					$('#screen').html('<img src="' + image + '"/>');
					return false;
				});
			});
			$(function() {
				$('#doReserve').click(function() {
					$('#reservationModal').modal('show');
					return false;
				});
			});
			
			$(function() {
				$('.expandRsvp').hide();
				$('.expandBook a').click(function() {
					if ($('.expandRsvp').css('display') == 'none') {
						$('.expandRsvp').slideDown('slow');
						$('.bookingModule').css('border-bottom', '1px solid #ccc');
						return false;
					}
					else {
						$('.expandRsvp').slideUp('slow');
						$('.bookingModule').css('border-bottom', '0')
						return false;
					}
				});
			});

			$(function() {
				$('.loading').hide();
				$('.expandRsvp-2').hide();
				$('#SendReserve').click(function(e) {
					e.preventDefault();
					$('.expandRsvp').fadeTo('slow' ,'.3');
					$('.loading').fadeIn();
					
					$('.loading').fadeOut();
					$('.expandRsvp').slideUp();
					$('.expandRsvp-2').slideDown();
					//$('.loading').fadeOut();
					//$('.expandRsvp').fadeTo('fast', '1').html('ewe');
				});
			});
		</script>
		<style type="text/css">
			.bookingModule {
				width: 100%;
				background: transparent;
				background-position: 50% top;
			}
			
			.expandBook {
				border-bottom: 1px solid #ccc;
			}

			.expandBook a {
				display: block;
				text-align: center;
				color: #000;
				font-weight: bold;
				
			}
			
			.expandBook a:hover {
				text-decoration: none;
				color:#feca28;
			}
			
			.expandRsvp {
				padding: 20px 0;
				background: white;
			}
			
			.expandRsvp form {
				display: block;
				text-align: center;
				margin: 0 auto;
			}
			
			.rsvpLeft {
				width: 50%;
				float: left;
			}
			
			input {
				width: 220px;
			}

			.loading {
				position: absolute;
				width: 150px;
				height: 24px;
				background: url('/assets/img/287.gif') no-repeat;
				left: 50%;
				z-index: 1;
				margin-left: -75px;
				margin-top: 90px;
			}

			.loading p {
				padding-left: 40px;
				padding-top: 1px;
			}

			.contactDetails {
				margin-top: 30px;
			}

			.controls input, select {
				border-radius: 0;
				-webkit-border-radius: 0;
				box-shadow: none;
				-webkit-box-shadow: none;
			}

			.overide select {
				width: 234px;
			}

			.control-contactDetail {
				margin-bottom: 8px;
			}
		</style>
		<script>
			$(function() {
		      $( "#fromDate" ).datepicker();
		      $( "#toDate" ).datepicker();
		    });
		</script>
		<div class="bookingModule" style="margin-bottom: 20px;">
			<div class="row">
				<div class="span12">
					<div class="expandBook">
						<a href="#"><i>Book Your Stay <b class="icon-chevron-down"></b></i></a>
					</div>
					<div class="loading"><p style="font-family: arial"><i>Please Wait...</i></p></div>
					<div class="expandRsvp-2" style="bac">
						<div class="row">
							<div class="span3"></div>
							<div class="span6">
								<form class="form-horizontal contactDetails">
								  <div class="control-contactDetail">
								    <label class="control-label" for="inputEmail">Title</label>
								    <div class="controls overide">
								      <select name="" id="">
								      	<option value="Mr">Mr.</option>
								      	<option value="Mrs">Mrs.</option>
								      </select>
								    </div>
								  </div>
								  <div class="control-contactDetail">
								    <label class="control-label" for="inputPassword">Name</label>
								    <div class="controls">
								      <input type="text">
								    </div>
								  </div>
								  <div class="control-contactDetail">
								    <label class="control-label" for="inputPassword">Surname</label>
								    <div class="controls">
								      <input type="text">
								    </div>
								  </div>
								  <div class="control-contactDetail">
								    <label class="control-label" for="inputPassword">Email Address</label>
								    <div class="controls">
								      <input type="text">
								    </div>
								  </div>
								  <div class="control-contactDetail">
								    <label class="control-label" for="inputPassword">Ph.</label>
								    <div class="controls">
								      <input type="text">
								    </div>
								  </div>
								  <div class="control-contactDetail">
								    <label class="control-label" for="inputPassword">Fax</label>
								    <div class="controls">
								      <input type="text">
								    </div>
								  </div>
								  <hr>
								  <div class="control-contactDetail">
								    <label class="control-label" for="inputPassword">Address</label>
								    <div class="controls">
								      <input type="text">
								    </div>
								  </div>
								  <div class="control-contactDetail">
								    <label class="control-label" for="inputPassword">City</label>
								    <div class="controls">
								      <input type="text">
								    </div>
								  </div>
								  <div class="control-contactDetail">
								    <label class="control-label" for="inputPassword">Country</label>
								    <div class="controls">
								      <input type="text">
								    </div>
								  </div>
								  <hr>
								  <div class="control-contactDetail">
								    <div class="controls">
								      <label class="checkbox">
								        <input type="checkbox"> Remember me
								      </label>
								      <button type="submit" class="btn">Sign in</button>
								    </div>
								  </div>
								</form>
							</div>
							<div class="span3"></div>
						</div>
					</div>				
					<div class="expandRsvp" style="bac">
						<div class="row">
							<div class="span4"></div>
							<div class="span4">
								<!-- <form action="/reservation/booking" class="span4" method="GET"> -->
								<form action="/rsvp" class="span4" method="GET">
									<div class="row">
										<div class="span2">
											<input type="hidden" name="roomId" value="<?=$content->id;?>">
											<select name="adult" id="" class="span2">
												<option value="">Adults</option>
												<?php for($i=1;$i<20;$i++) :?>
													<option value="<?=$i;?>"><?=$i;?></option>
												<?php endfor; ?>
											</select>
											<select name="child" id="" class="span2">
												<option value="">Child</option>
												<?php for($i=1;$i<20;$i++) :?>
													<option value="<?=$i;?>"><?=$i;?></option>
												<?php endfor; ?>
											</select>
											<select name="room" id="" class="span2">
												<option value="">Rooms</option>
												<?php for($i=1;$i<20;$i++) :?>
													<option value="<?=$i;?>"><?=$i;?></option>
												<?php endfor; ?>
											</select>
										</div>
										<div class="span2">
											<div class="input-append" style="margin-bottom: 10px;">
											  <input class="span2" id="fromDate" type="text" placeholder="Arrival" name="fromDate" style="width:75%;">
											  <span class="add-on"><i class="icon-calendar"></i></span>
											</div>
											<div class="input-append" style="margin-bottom: 10px;">
											  <input class="span2" id="toDate" type="text" placeholder="Departure" name="toDate"  style="width:75%;">
											  <span class="add-on"><i class="icon-calendar"></i></span>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="span2" style="text-align: left;">
									  		<label class="radio">
											  <input type="radio" name="BookingRequest" id="optionsRadios1" value="true" checked>
											  Booking Request
											</label>
										</div>
										<div class="span2"  style="text-align: left;">
									  		<label class="radio">
											  <input type="radio" name="BookingOnline" id="optionsRadios1" value="true">
											  Booking Online
											</label>
										</div>
										<div class="row" >
											<div class="span4 pull-right" style="margin-top: 14px;">
												<button id="SendReserve" class="btn btn-block btn-warning" type="submit" name="send" value="book">Send</button>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="span4"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
  		<div class="img-slider">
  			<div id="screen"><img src="/assets/uploads/images/<?=$images[0];?>" alt="" class="screen"/></div>
  			<?php foreach ($images as $row) : ?>
  			<a href="#" rel="/assets/uploads/images/<?=$row;?>" class="thumb">
  				<img src="/assets/uploads/images/<?=$row;?>" alt="" class="thumb-1"/>
  			</a>
  			<?php endforeach; ?>
  		
		</div>

  		<div class="acco-desc">
  			<?=$content->content;?>
  		</div>
      	<div class="btn btn-warning btn-small pull-right" style="visibility:hidden;"><p>Book Now!</p></div>
  		<div class="facility-box">
  			<ul>
  				<li>
					<p style="text-align: center;"><img src="/assets/img/icon-facility-swim.gif" alt="" /></p>
					<span>
						<p>Private Pool</p>
					</span>
				</li>
				<li>
					<p style="text-align: center;"><img src="/assets/img/icon-facility-bed.gif" alt="" /></p>
					<span>
						<p>Spring Air Bed</p>
					</span>
				</li>
  				<li>
					<p style="text-align: center;"><img src="/assets/img/icon-facility-lock.gif" alt="" /></p>
					<span>
						<p>Safe Deposit Box</p>
					</span>
				</li>
				<li>
					<p style="text-align: center;"><img src="/assets/img/icon-facility-tv.gif" alt="" /></p>
					<span>
						<p>LED TV</p>
					</span>
				</li>
				<li>
					<p style="text-align: center;"><img src="/assets/img/icon-facility-coffee.gif" alt="" /></p>
					<span>
						<p>Coffee Maker</p>
					</span>
				</li>
  			</ul>
  			<div class="clearfix"></div>
  		</div>
  		<div class="clearfix"></div>
  	</div>
    <div class="flame" style="margin-top:-250px;">
    </div>
    <footer>
    	<div class="footer-logo pull-left">
    	</div>
    	<div class="footer-desc pull-left">
    		<p style="color: #695d58; font-weight: bold; font-size: 12px; padding-top: 10px;">Queen Villas & Spa</p>
    		<p>Gili Trawangan Island, North Lombok - Indonesia</p>
			<p>ph: (62) 370-633686 (hunting) m: (62) 878-6450-4800 </p>
			<p>fax: (62) 370-633626</p>
			<p>email: info@queenvillas.com</p>
    	</div>
    	<div class="footer-soc">
    		<ul>
    			<li><img src="/assets/img/twitter.gif" alt="" /></li>
    			<li><img src="/assets/img/fb.gif" alt="" /></li>
    			<li><img src="/assets/img/mail.gif" alt="" /></li>
    		</ul>
    	</div>
    </footer>
  </body>
</html>