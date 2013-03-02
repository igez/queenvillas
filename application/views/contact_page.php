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
          lat: -8.348365,
          lng: 116.028821,
          zoom: 12
        });
        map.addMarker({
          lat: -8.348365,
          lng: 116.028821,
          title: 'Queen Villas & Spa',
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
            <p><i>Queen Villas & Spa</i></p>
          </div>
        </div>
      </div>
    </div>
  	<!-- -->
    <style>
      #map {
        height: 320px;
      }
      .statusMessage {
        position: absolute;
        left: 50%;
        margin-top: 110px;
        margin-left: -170px;
        background: #fff url('/assets/img/287.gif') no-repeat 10% 50%;
        display: block;
        border: 2px solid #bebebe;
        padding: 10px 50px 10px 8px;
      }
    </style>

    <script>
      var a = Math.ceil(Math.random() * 10);
      var b = Math.ceil(Math.random() * 10);       
      var c = a + b

      function DrawBotBoot()
      {
          document.write("<div class=\"span3\"><p style='width: 120px; float: left; margin-top: 3px;'>What is "+ a + " + " + b +"?</p>");
          document.write("<input placeholder='Please Answer' id='BotBootInput' type='text' style='width: 135px;'/></div>");
      }    

      $('#submitMessage').live('click', function () {
        var fname = $('.fname').val();
        var lname = $('.lname').val();
        var email = $('.email').val();
        var subject = $('.subject').val();
        var body = $('.body').val();
        
        if (fname == '') {
          $('.fname').parent().parent().attr('class', 'control-group error');
          $('.fname').popover('show')
          return false;
        }
        else {
          $('.fname').parent().parent().attr('class', 'control-group success');
        }

        if (lname == '') {
          $('.lname').parent().parent().attr('class', 'control-group error');
          return false;
        }
        else {
          $('.lname').parent().parent().attr('class', 'control-group success');
        }

        if (email == '') {
          $('.email').parent().parent().attr('class', 'control-group error');
          return false;
        }
        else {
          $('.email').parent().parent().attr('class', 'control-group success');
        }

        if (subject == '') {
          $('.subject').parent().parent().attr('class', 'control-group error');
          return false;
        }
        else {
          $('.subject').parent().parent().attr('class', 'control-group success');
        }

        if (body == '') {
          $('.body').parent().parent().attr('class', 'control-group error');
          return false;
        }
        else {
          $('.body').parent().parent().attr('class', 'control-group success');
        }

        if ($('#BotBootInput').val() == '') {
          $('#BotBootInput').css('border', '1px solid #b94a48');
          return false;
        }
        else if ($('#BotBootInput').val() == c) {
          console.log($('#BotBootInput').val());
        }
        else {
          $('#BotBootInput').css('border', '1px solid #b94a48');
          return false;
        }

        dataString = "fname="+fname+"&lname="+lname+"&email="+email+"&subject="+subject+"&body="+body;
        console.log(dataString);

        $.ajax({  
          type: "POST",  
          url: "/contact/do",  
          data: dataString,
          beforeSend: function(){
            $('#ContactForm').fadeTo('slow', '0.2');
            $('.statusMessage').fadeTo('very slow', '1');
          },

          success: function() {  
            // If Success!
            $('.statusMessage').css('background', '#fff url(/assets/img/yes.png) no-repeat 10% 50%');
            $('.statusMessage h4').html('Message Submited!');
            $('.statusMessage p').html('Thank you! We\'ll Be In Touch Soon!');
          },

          error: function () {
              $('.statusMessage').css('background', '#fff url(/assets/img/yes.png) no-repeat 10% 50%');
              $('.statusMessage h4').html('Message Submission Error!');
              $('.statusMessage p').html('Oops.. Something went wrong.');
          },
                 
        });  


      });
      
    </script>

    <div class="content container">
          <div class="row">
            <div class="span12" id="ContactForm">
              <div class="row">
                <div class="span5">
                  <div id="map"></div>
                </div>
                <div class="span7">
                  <div class="row">
                    <div class="span3">
                      <div class="control-group">
                        <label class="control-label" for="inputEmail">First Name</label>
                        <div class="controls">
                          <input type="text" id="inputEmail" class="span3 fname" placeholder="Your First Name">
                          <div class="popover fade top in">
                            <div class="arrow"></div>
                            <h3 class="popover-title">Popover on top</h3>
                            <div class="popover-content">Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</div>
                          </div>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputEmail">Last Name</label>
                        <div class="controls">
                          <input type="text" id="inputEmail" class="span3 lname" placeholder="Your Last Name">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                          <input type="text" id="inputEmail" class="span3 email" placeholder="Your Email Address">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputEmail">Subject</label>
                        <div class="controls">
                          <input type="text" id="inputEmail" class="span3 subject" placeholder="Subject Message">
                        </div>
                      </div>
                    </div>
                    <div class="span4">
                      <div class="control-group">
                        <label class="control-label" for="inputEmail">Message</label>
                        <div class="controls">
                          <textarea name="message" id="message" class="input-xlarge span4 body" rows="12"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                      <script type="text/javascript">DrawBotBoot()</script>
                      <div class="span4 pull-right">
                        <a class="btn btn-block btn-primary pull-right" id="submitMessage">Submit Message !</a>
                      </div>
                    </div>
                </div>
              </div>
              </div>
              <div class="statusMessage" style="display: none;">
                <h4 style="text-align: left; margin-left: 70px;">Sending Message</h4>
                <p style="margin-left: 70px;">Please Wait a Moment.</p>
              </div>
          </div>
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