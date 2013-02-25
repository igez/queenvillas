<!DOCTYPE html>
<html>
  <head>
    <title>Queen Villas</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/assets/css/style.css" />
	<script type="text/javascript" src="/assets/js/modernizr.custom.79639.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.ba-cond.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.slitslider.js"></script>
  </head>
  <body>
  	<?php $this->load->view('static/nav'); ?>
  	<?php if ($content->cover_image) : ?>
  		<div class="bg-head" style="background: url('/assets/uploads/images/cover/<?=$content->cover_image;?>') no-repeat; background-size: cover;;">
  	<?php else : ?>
  		<div class="bg-head" style="background: gray;">
  	<?php endif ;?>
  		
  	</div>
  	<div class="title-container">
  		<div class="yellow-s">
  		
  		</div>
  		<div class="container">
			<div class="yellow">
  				<h2><?=$content->title;?></h2>
	  			<p>Lorem Ipsum Dolor Sit</p>
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
		</script>
  		<div class="img-slider">
  			<div id="screen"><img src="/assets/uploads/images/<?=$images[0];?>" alt="" class="screen"/></div>
  			<?php foreach ($images as $row) : ?>
  			<a href="#" rel="/assets/uploads/images/<?=$row;?>" class="thumb">
  				<img src="/assets/uploads/images/<?=$row;?>" alt="" width="100px" class="thumb-1"/>
  			</a>
  			<?php endforeach; ?>
  		
		</div>
  		<div class="acco-desc">
  			<?=$content->content;?>
  		</div>
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