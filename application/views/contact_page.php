<!DOCTYPE html>
<html>
  <head>
    <title>Queen Villas</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="/assets/js/gmap.js"></script>
    <script type="text/javascript" src="/assets/js/prettify.js"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/assets/css/style.css" />
	<script type="text/javascript" src="/assets/js/modernizr.custom.79639.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.ba-cond.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.slitslider.js"></script>
  </head>
  <script>
      var map;
      $(document).ready(function(){
        prettyPrint();
        map = new GMaps({
          div: '#map',
          lat: -12.043333,
          lng: -77.028333
        });
        map.addMarker({
          lat: -12.043333,
          lng: -77.03,
          title: 'Lima',
          details: {
            database_id: 42,
            author: 'HPNeo'
          }
        });
      });
  </script>
  <body>
  	<?php $this->load->view('static/nav'); ?>
  		<div class="bg-head" style="background-image:url('/assets/img/contactcover.jpg') no-repeat;background-size:cover;">
  		<div class="bg-head" style="background: url('/assets/img/contactcover.jpg'); background-size: cover;">
  	 </div>
  	<div class="bahe">
      <div class="title-container">
        <div class="yellow-s"></div>
        <div class="container">
          <div class="yellow">
            <h2>Contact</h2>
            <p>Lorem Ipsum Dolor Sit</p>
          </div>
        </div>
      </div>
    </div>
  	<!-- -->
    <style>
      #map {
        height: 300px;
      }
    </style>
    <div class="content container">
        <form>
          <div class="row">
            <div class="span5">
              <div id="map"></div>
            </div>
            <div class="span3">
              <label>First Name</label>
              <input type="text" class="span3" placeholder="Your First Name">
              <label>Last Name</label>
              <input type="text" class="span3" placeholder="Your Last Name">
              <label>Email Address</label>
              <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span><input type="text" id="inputIcon" class="span2" style="width:233px" placeholder="Your email address">
              </div>
              <label>Subject
              <select id="subject" name="subject" class="span3">
                <option value="na" selected="">Choose One:</option>
                <option value="service">General Customer Service</option>
                <option value="suggestions">Suggestions</option>
                <option value="product">Product Support</option>
              </select>
              </label>
            </div>
            <div class="span4">
              <label>Message</label>
              <textarea name="message" id="message" class="input-xlarge span4" rows="10"></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-primary pull-right">Send</button>
        </form>
    </div>
    <!-- -->
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