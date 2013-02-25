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
	<!-- Slider
	<div class="captions">
		<h4><a href="">Hello From The Jewel of Gilis</a></h4>
		<p class="desc">
			Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur.
		</p>
	</div>
	
  	<!-- Slider
    <div id="big_screen">
	    <img class="slide" src="/assets/img/sliders/5.jpg" alt="" />
	    <img class="slide" src="/assets/img/sliders/17.jpg" alt="" />
	    <img class="slide" src="/assets/img/sliders/2.jpg" alt="" />
	</div>
	-->

	<style type="text/css">
		<?php $i=1;?>
		<?php foreach ($slide->slides as $row): ?>
		.demo-2 .bg-img-<?=$i;?> {
			background-image: url(/assets/img/sliders/<?=$row['img'];?>);
		}
		<?php $i++; ?>
		<?php endforeach; ?>
	</style>
	<div class="demo-2">
		<div class="grad"></div>
		<div id="slider" class="sl-slider-wrapper">

		<div class="sl-slider">
		<?php $i=1;?>
		<?php foreach ($slide->slides as $row): ?>
			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-<?=$i;?>"></div>
					<h2><a href="">Hello From The Queen of Gilis</a></h2>
					<blockquote><p><?=$row['caption'];?></p></blockquote>
				</div>
			</div>
		<?php $i++; ?>
	<?php endforeach; ?>
		</div><!-- /sl-slider -->

		<nav id="nav-dots" class="nav-dots">
			<span class="nav-dot-current"></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</nav>

	</div><!-- /slider-wrapper -->
	</div>
	
    	<script type="text/javascript">	
			$(function() {
					var heig = $(window).height();
					$(window).resize(function() {
						heig = $(window).height();
						console.log(heig);
						$('.sl-slider-wrapper').css('min-height', heig);
					});
					$('.sl-slider-wrapper').css('min-height', heig);
				
				$.Slitslider.defaults   = {
					// transitions speed
					speed : 1200,
					// if true the item's slices will also animate the opacity value
					optOpacity : true,
					// amount (%) to translate both slices - adjust as necessary
					translateFactor : 230,
					// maximum possible angle
					maxAngle : 25,
					// maximum possible scale
					maxScale : 2,
					// slideshow on / off
					autoplay : true,
					// keyboard navigation
					keyboard : true,
					// time between transitions
					interval : 7000,
					// callbacks
					onBeforeChange : function( slide, idx ) { return false; },
					onAfterChange : function( slide, idx ) { return false; }
				};
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
		</script>
  </body>
</html>