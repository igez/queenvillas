<!DOCTYPE html>
<html>
  <head>
    <title>Queen Villas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/assets/css/style.css" />
	<script type="text/javascript" src="/assets/js/modernizr.custom.79639.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
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
						return false;
					}
					else {
						$('.expandRsvp').slideUp('slow');
						return false;
					}
				});
			});
		</script>
		<style type="text/css">
			.bookingModule {
				width: 100%;
				background: transparent;
				background-position: 50% top;
			}
			
			.expandBook a {
				display: block;
				text-align: center;
				border-bottom: 1px solid #ccc;
				padding-bottom: 10px;
				margin-bottom: 10px;
				color: #000;
				font-weight: bold;
			}
			
			.expandBook a:hover {
				text-decoration: none;
			}
			
			.expandRsvp {
				border-bottom: 1px solid #ccc;
				padding-bottom: 10px;
				margin-bottom: 20px;
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
		</style>
		<div class="bookingModule">
			<div class="row">
				<div class="span12">
					<div class="expandBook">
						<a href="#"><i>Book Your Stay <b class="icon-chevron-down"></b></i></a>
					</div>
					<div class="expandRsvp">
						<div class="row">
							<div class="span4"></div>
							<form action="/reservation/booking" class="span4" method="GET">
								<div class="row">
									<div class="span2">
										<select name="adult" id="" class="span2">
											<option value="1">Adults</option>
										</select>
										<select name="child" id="" class="span2">
											<option value="1">Child</option>
										</select>
										<select name="room" id="" class="span2">
											<option value="1">Rooms</option>
										</select>
									</div>
									<div class="span2">
										<div class="input-append" style="margin-bottom: 10px;">
										  <input class="span2" id="appendedInput" type="text" placeholder="Arrival" name="fromDate">
										  <span class="add-on"><i class="icon-calendar"></i></span>
										</div>
										<div class="input-append" style="margin-bottom: 10px;">
										  <input class="span2" id="appendedInput" type="text" placeholder="Departure" name="toDate">
										  <span class="add-on"><i class="icon-calendar"></i></span>
										</div>
									</div>
									<div class="span4">
								  		<input type="radio" name="bookingRequest" id="optionsRadios1" value="true" checked>
								  		Booking Request
								  		<input type="radio" name="bookingOnline" id="optionsRadios1" value="true">
								  		Booking Online
									</div>
									<div class="row">
										<div class="span4 pull-right">
											<button class="btn btn-warning" type="submit" name="send" value="book">Send</button>
										</div>
									</div>
								</div>
							</form>
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