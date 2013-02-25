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
  <body>
  	<?php $this->load->view('static/nav'); ?>
  	<?php if ($content->cover_image) : ?>
  		<div class="bg-head" style="background: url('/assets/uploads/images/cover/<?=$content->cover_image;?>') no-repeat; background-size: cover;">
  	<?php else : ?>
  		<div class="bg-head" style="background: gray;">
  	<?php endif ;?>

  	</div>
  	<div class="bahe">
      <div class="title-container">
        <div class="yellow-s"></div>
        <div class="container">
          <div class="yellow">
            <h2><?=$content->title;?></h2>
            <p>Lorem Ipsum Dolor Sit</p>
          </div>
        </div>
      </div>
    </div>
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
  					$('img.thumb-3').load(function() {
  						$('.thumb-3').hide().css({visibility: "visible"}).fadeIn("fast");
  					});
  					$('img.thumb-4').load(function() {
  						$('.thumb-4').hide().css({visibility: "visible"}).fadeIn("fast");
  					});
  			});
  			$(function() {
				$(".thumb-box2").click(function() {
					var image = $(this).attr("rel");
					$('#screen-1170').hide();
					$('#screen-1170').fadeIn('slow');
					$('#screen-1170').html('<img src="' + image + '"/>');
					return false;
				});
			});
  	</script>
  	<div class="content container">
  		<div class="img-slider-1170">
  			<div id="screen-1170">
          <?php $imgs = explode(', ', $content->images); ?>
  				<img src="/assets/uploads/images/<?=$imgs[0];?>" alt="" />
  			</div>
  			<div class="thumb-list">
  			<?php $i = 1; ?>
  			<?php foreach ($imgs as $row) : ?>
  				<a href="#" class="thumb-box2" rel="/assets/uploads/images/<?=$row;?>">
  					<img src="/assets/uploads/images/<?=$row;?>" alt="" class="thumb-<?=$i;?>" height="100px"/>
	  			</a>
	  			<?php $i++;?>
	  		<?php endforeach; ?>
	  			<div class="clearfix"></div>
  			</div>
  			<div class="facility-desc">
  				<p><?=$content->content;?></p>
  			</div>
  			<div class="clearfix"></div>
  		</div>
      <?php if ($content->slug == 'meeting-room') : ?>
        <?php $this->load->view('facility/rsvp'); ?>
      <?php endif; ?>
  	</div> <!-- end of content -->
    <div class="flame">
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