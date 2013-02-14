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
  	
  	<style type="text/css">
  		.bg-head {
  			z-index: -2;
  			width: 100%;
  			height: 480px;
  			background: url('/assets/img/acco-bg-head.jpg') no-repeat;
  			background-size: cover;
  			background-position: bottom;
  			position: relative;
  		}
  		
  		.title-container {
  			margin-top: -35px;
  			height: 80px;
  		}
  		
  		.yellow {
  			margin-top: -10px;
  			font-family: Georgia;
  			background: #feca28;
  			height: 70px;
  			width: 300px;
  		}
  		
  		.yellow h2 {
  			font-weight: normal;
  			line-height: 22px;
  			padding-top:10px;
  		}
  		
  		.yellow p {
  			text-align:right;
  			padding: 0 20px;
  		}
  		
  		.yellow-s {
  			position: absolute;
  			background: #feca28;
  			height: 70px;
  			min-width: 200px;
  			float: left;
  			margin-top: 0;
  			z-index: -1;
  		}
  		
  		.title-box {
  			background: red;
  			width: 400px;
  			height: 80px;
  			padding: 0;
  			margin-top: -10px;
  		}
  		
  		.content {
  			padding-top: 40px;
  		}
  		
  		.img-slider {
  			float: left;
  			max-width: 500px;
  		}
  		
  		#screen {
  			background: url('/assets/img/103.gif') no-repeat 50%;
  			height: 300px;
  			width: 500px;
  			overflow-y: hidden;
  		}
  		
  		.screen {
  			visibility: hidden;
  		}
  		
  		.acco-desc {
  			padding-left: 20px;
  			width: 650px;
  			float: left;
  		}
  		
  		.thumb {
  			display: block;
  			margin-top: 2px;
  			margin-right: 2px;
  			float: left;
  		}
  		
  		.facility-box {
  			float: left;
  		}
  		
  		.facility-box ul {
  			list-style: none;
  			margin: 0;
  			padding: 0;
  			margin-left: 10px;
  		}
  		
  		.facility-box li {
  			float: left;
  			display: block;
  			padding: 4px 8px;
  		}
  		
  		.facility-box span p {
  			font-size: 10pt;
  			text-align: center;
  		}
		
		#v-footer {
			text-align: center;
			padding-bottom: 30px;
		}
		
		#menu-footer-menu {
			list-style: none;
		}
		
		footer {
			background: url('/assets/img/footer-bg.gif') repeat-x;
			height: 98px;
			-webkit-box-shadow: 1px -1px 4px 1px #ccc;
box-shadow: 1px -1px 4px 1px #ccc;
		}
		
		.footer-logo {
			margin-left: 20px;
			width: 162px;
			height: 98px;
			background: url('/assets/img/qv-logo.png') no-repeat 50%;
		}
		
		.footer-desc {
			width: 280px;
		}
		
		.footer-desc p {
			margin-left: 20px;
			font-size: 10px;
			line-height: 8px;
		}
		
		.footer-soc {
			width: 150px;
			float: right;
			height: 22px;
			margin-top: 40px;
		}
		
		.footer-soc ul li {
			list-style: none;
			float: left;
		}
		
		.footer-soc li {
			padding-left: 5px;
		}
  		
  	</style>
  	<div class="bg-head" style="background: url('/assets/img/pool-bar.jpg') no-repeat; background-size: cover;">

  	</div>
  	<div class="title-container">
  		<div class="yellow-s">
  		
  		</div>
  		<div class="container">
  			<div class="yellow">
  				<h2>Luxury Villa</h2>
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
  			<div id="screen"><img src="/assets/img/tmp/IMG_7424-2.jpg" alt="" class="screen"/></div>
  			<a href="#" rel="/assets/img/tmp/IMG_7424-2.jpg" class="thumb"><img src="/assets/img/tmp/IMG_7424-2.jpg" alt="" width="100px" height="100px"/></a>
  			<a href="#" rel="/assets/img/tmp/IMG_8367.jpg" class="thumb"><img src="/assets/img/tmp/IMG_8367.jpg" alt="" width="100px" height="100px"/></a>
  		</div>
  		<div class="acco-desc">
  			<p>Donec ullamcorper nulla non metus auctor fringilla. Maecenas faucibus mollis interdum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus.</p>

<p>Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
			<ul>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ul>
  		</div>
  		<div class="facility-box">
  			<ul>
  				<li><img src="/assets/img/tmp/swim.jpg" alt="" /><span><p>Private Pool</p></span></li>
  				<li><img src="/assets/img/tmp/swim.jpg" alt="" /><span><p>Safe Deposit Box</p></span></li>
  				<li><img src="/assets/img/tmp/swim.jpg" alt="" /></li>
  				<li><img src="/assets/img/tmp/swim.jpg" alt="" /></li>
  				<li><img src="/assets/img/tmp/swim.jpg" alt="" /></li>
  			</ul>
  			<div class="clearfix"></div>
  		</div>
  		<div class="clearfix"></div>
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