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
			overflow: hidden;
			margin: 10px;
		}

		.thumbs {
			width: 262px;
			height: auto;
			padding: 2px;
			border:1px solid #E8E8E8;
		}

		.thumbs a {
			display: block;
			background: url('http://themes.webcreations907.com/ninezeroseven/option-one/wp-content/themes/ninezeroseven/assets/img/theme/img.png') no-repeat 50%;
		}

		.after {
		}

		#gal-filter ul {
			text-align: center;
		}

		#gal-filter li{
			list-style: none;
			display: inline-block;
			font-size: 12px;
		}
	</style>
	<script type="text/javascript">
		$(window).load(function(){
			$('.thumbs a img').css("opacity", "1");

			$('.thumbs a img').mouseover(function() {
				$(this).stop().animate({"opacity": "0.3"}, "slow");
			}).mouseout(function(){
				$(this).stop().animate({"opacity": "1"}, "fast");
			});
		});

		$(document).ready(function() {
			$(".pop").fancybox({
				openEffect	: 'fade',
				closeEffect	: 'fade'
			});

			// get the action filter option item on page load
		  	var $filterType = $('#gal-filter li a').attr('data-type');
		  
		  	// get and assign the ourHolder element to the
		  	// $holder varible for use later
		  	var $holder = $('ul.gallery-holder');

		  	// clone all items within the pre-assigned $holder element
		  	var $data = $holder.clone();

		  	// attempt to call Quicksand when a filter option
		  	// item is clicked
		  	$('#gal-filter li a').click(function(e) {
		    	// reset the active class on all the buttons
		    	$('#gal-filter li').removeClass('active');
		    
		    	// assign the class of the clicked filter option
		    	// element to our $filterType variable
		    	var $filterType = $(this).attr('data-type');
		    	$(this).parent().addClass('active');
		    
		    	if ($filterType == 'all') {
		      		// assign all li items to the $filteredData var when
		      		// the 'All' filter option is clicked
		      		var $filteredData = $data.find('li');
		    	} 
		    	else {
		      		// find all li elements that have our required $filterType
		      		// values for the data-type element
		      		var $filteredData = $data.find('li[data-type=' + $filterType + ']');
		    	}
		    
		    	// call quicksand and assign transition parameters
		    	$holder.quicksand($filteredData, {
		      		duration: 800,
		      		easing: 'easeInOutQuad'
		    	});
		    	e.preventDefault();
		    	return false;
		  	});
		});
		
	</script>
	<div class="content container">
		<ul id="gal-filter">
			<li><a href="#" class="btn" data-type="all">All</a></li>
			<li><a href="#" class="btn" data-type="qv">Queen Villas & Spa</a></li>
		    <li><a href="#" class="btn" data-type="ag">Around Gili</a></li>
		    <li><a href="#" class="btn" data-type="al">Around Lombok</a></li>
		</ul>
		<div class="gallery-list">
			<ul class="gallery-holder">
				<li class="thumbs" data-id="id-1" data-type="qv">
					<a href="/assets/img/slide-01.jpg" class="pop"><img src="/assets/img/slide-01.jpg"></a>
				</li>	
				<li class="thumbs" data-id="id-2" data-type="ag">
					<a href="/assets/img/slide-02.jpg" class="pop"><img src="/assets/img/slide-02.jpg"></a>
				</li>
				<li class="thumbs" data-id="id-3" data-type="qv">
					<a href="/assets/img/vintage-410x230.jpg" class="pop"><img src="/assets/img/vintage-410x230.jpg"></a>
				</li>
				<li class="thumbs" data-id="id-4" data-type="al">
					<a href="/assets/img/vintage-410x230.jpg" class="pop"><img src="/assets/img/vintage-410x230.jpg"></a>
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
