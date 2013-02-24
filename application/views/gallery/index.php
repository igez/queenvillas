	<?php $this->load->view('static/nav'); ?>
	<div class="bg-head" style="background: gray;"></div>
	<div class="title-container">
		<div class="yellow-s"></div>
		<div class="container">
			<div class="yellow">
				<h2>Photo Gallery</h2>
  				<p>Lorem Ipsum Dolor Sit</p>
			</div>
  		</div>
	</div>
	<style>
		.stage {
			width: 770px;
			height: 460px;
			background: gray;
			float: left;
		}

		.gallery {
			width: 100%;
		}

		.gallery ul {
			text-align: center;
		}

		.gallery ul li {
			list-style: none;
			display: inline-block;
		}

		.gallery li a {
			padding: 4px 20px;
		}

		.gallery-list ul {
			padding: 0;
			margin: 0;
		}

		.gallery-list ul li {
			list-style: none;
			display: inline-block;
		}

		.gallery-list li {
			padding: 12px 5px;
			width: 140px;
			height: 140px;
			overflow: hidden;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".pop").fancybox({
				openEffect	: 'fade',
				closeEffect	: 'fade'
			});
		});
		$(window).load(function(){
			$('.thumbs').css("opacity", ".5");

			$('.thumbs').mouseover(function() {
				$(this).stop().animate({"opacity": "1"}, "slow");
			}).mouseout(function(){
				$(this).stop().animate({"opacity": ".5"}, "slow");
			});
		});
		
	</script>
	<div class="content container">
		<div class="gallery category">
			<ul>
				<li><a href="#">Queen Villas & Spa</a></li>|
				<li><a href="#">Around Gili</a></li>|
				<li><a href="#">Around Lombok</a></li>
			</ul>
		</div>
		<div class="gallery-list">
			<ul>
				<li class="thumbs">
					<a href="/assets/img/wood_pattern.jpg" class="pop"><img src="/assets/img/wood_pattern.jpg"></a>
				</li>	
				<li class="thumbs">
					<a href="/assets/img/wood_pattern.jpg" class="pop"><img src="/assets/img/wood_pattern.jpg"></a>
				</li>
				<li class="thumbs">
					<a href="/assets/img/wood_pattern.jpg" class="pop"><img src="/assets/img/wood_pattern.jpg"></a>
				</li>
				<li class="thumbs">
					<a href="/assets/img/wood_pattern.jpg" class="pop"><img src="/assets/img/wood_pattern.jpg"></a>
				</li>	
				<li class="thumbs">
					<a href="/assets/img/wood_pattern.jpg" class="pop"><img src="/assets/img/wood_pattern.jpg"></a>
				</li>
				<li class="thumbs">
					<a href="/assets/img/wood_pattern.jpg" class="pop"><img src="/assets/img/wood_pattern.jpg"></a>
				</li>
				<li class="thumbs">
					<a href="/assets/img/wood_pattern.jpg" class="pop"><img src="/assets/img/wood_pattern.jpg"></a>
				</li>	
				<li class="thumbs">
					<a href="/assets/img/wood_pattern.jpg" class="pop"><img src="/assets/img/wood_pattern.jpg"></a>
				</li>
				<li class="thumbs">
					<a href="/assets/img/wood_pattern.jpg" class="pop"><img src="/assets/img/wood_pattern.jpg"></a>
				</li>
				<li class="thumbs">
					<a href="/assets/img/wood_pattern.jpg" class="pop"><img src="/assets/img/wood_pattern.jpg"></a>
				</li>	
				<li class="thumbs">
					<a href="/assets/img/wood_pattern.jpg" class="pop"><img src="/assets/img/wood_pattern.jpg"></a>
				</li>
				<li class="thumbs">
					<a href="/assets/img/wood_pattern.jpg" class="pop"><img src="/assets/img/wood_pattern.jpg"></a>
				</li>
			</ul>
		</div>
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
