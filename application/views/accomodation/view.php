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
					if ($('.expandRsvp').css('display') == 'none' && $('.expandRsvp-2').css('display') == 'none') {
						$('.expandRsvp').css('opacity', '1');
						$('.expandRsvp').slideDown('slow');
						$('.bookingModule').css('border-bottom', '1px solid #ccc');
						return false;
					}
					else {
						$('.expandRsvp').slideUp('slow');
						$('.expandRsvp-2').slideUp('slow');
						$('.bookingModule').css('border-bottom', '0')
						return false;
					}
				});
			});

			$(function() {
				
			});


			$(function() {
				function IsNumeric(sText){
				    var ValidChars = "0123456789.";
				    var IsNumber = true;
				    var Char;
				    for (i = 0; i < sText.length && IsNumber == true; i++) {
				        Char = sText.charAt(i);
				        if (ValidChars.indexOf(Char) == -1) {
				            IsNumber = false;
				        }
				    }
				    return IsNumber;
				}

				$('.loading').hide();
				$('.loading-ajax').hide();
				$('.expandRsvp-2').hide();
				$('#SendReserve').click(function() {
					
					var roomId = $('.roomId').val();
					var adults = $('.adults').val();
					var child = $('.child').val();
					var rooms = $('.rooms').val();
					var fromDate = $('#fromDate').val();
					var toDate = $('#toDate').val();
					var BookingRequest = $('.BookingRequest').val();
					var bookingOnline = $('.bookingOnline').val();
					// contact details
					

					if (adults == '') {
						$('.adults').parent().parent().attr('class', 'control-group error');
						return false;
					}
					else {
						$('.adults').parent().parent().attr('class', 'control-group success');
					}

					if (child == '') {
						$('.child').parent().parent().attr('class', 'control-group error');
						return false;
					}
					else {
						$('.child').parent().parent().attr('class', 'control-group success');
					}

					if (rooms == '') {
						$('.rooms').parent().parent().attr('class', 'control-group error');
						return false;
					}
					else {
						$('.rooms').parent().parent().attr('class', 'control-group success');
					}

					if (fromDate == '') {
						$('#fromDate').parent().parent().attr('class', 'control-group error');
						return false;
					}
					else {
						$('#fromDate').parent().parent().attr('class', 'control-group success');
					}

					if (toDate == '') {
						$('#toDate').parent().parent().attr('class', 'control-group error');
						return false;
					}
					else {
						$('#toDate').parent().parent().attr('class', 'control-group success');
					}

					$('.expandRsvp').fadeTo('slow' ,'.3');
					$('.expandRsvp').slideUp();
					$('.expandRsvp-2').slideDown();
					//$('.loading').fadeOut();
					//$('.expandRsvp').fadeTo('fast', '1').html('ewe');
					$('#submitData').click(function(e) {
						var title = $('.title').val();
						var name = $('.name').val();
						var surname = $('.surname').val();
						var email = $('.email').val();
						var ph = $('.ph').val();
						var fax = $('.fax').val();
						var city = $('.city').val();
						var address = $('.address').val();
						var country = $('.country').val();
						e.preventDefault();
						$('.help-inline').remove();
						
						
						var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
						
						// Name Validation
						/*
						if (name == '') {
							$('.name').parent().parent().attr('class', 'control-group error');
							$('.name').parent().append('<span class="help-inline">Required</span>');
							console.log(roomId);
							return false;
						}
						else {
							$('.name').parent().parent().attr('class', 'control-group success');
							$('.name').parent().append('<span class="help-inline">OK !</span>');
						}

						// surname Validation
						if (surname == '') {
							$('.surname').parent().parent().attr('class', 'control-group error');
							$('.surname').parent().append('<span class="help-inline">Required</span>');
							return false;
						}
						else {
							$('.surname').parent().parent().attr('class', 'control-group success');
							$('.surname').parent().append('<span class="help-inline">OK !</span>');
						}

						// email Validation
						if (email == '') {
							$('.email').parent().parent().attr('class', 'control-group error');
							$('.email').parent().append('<span class="help-inline">Required</span>');
							return false;
						}
						else if (!email.match(re)) {
							$('.email').parent().parent().attr('class', 'control-group error');
							$('.email').parent().append('<span class="help-inline">Email Invalid</span>');
							return false;
						}
						else {
							$('.email').parent().parent().attr('class', 'control-group success');
							$('.email').parent().append('<span class="help-inline">OK !</span>');
						}

						// email Validation
						if (ph == '') {
							$('.ph').parent().parent().attr('class', 'control-group error');
							$('.ph').parent().append('<span class="help-inline">Required</span>');
							return false;
						}
						else if (!IsNumeric(ph)) {
							$('.ph').parent().parent().attr('class', 'control-group error');
							$('.ph').parent().append('<span class="help-inline">Numbers Only</span>');
							return false;
						}
						else if (ph.length < 8) {
							$('.ph').parent().parent().attr('class', 'control-group error');
							$('.ph').parent().append('<span class="help-inline">Must Contain at Least 8 Numbers</span>');
							return false;
						}
						else {
							$('.ph').parent().parent().attr('class', 'control-group success');
							$('.ph').parent().append('<span class="help-inline">OK !</span>');
						}

						if (address == '') {
							$('.address').parent().parent().attr('class', 'control-group error');
							$('.address').parent().append('<span class="help-inline">Required</span>');
							return false;
						}
						else {
							$('.address').parent().parent().attr('class', 'control-group success');
							$('.address').parent().append('<span class="help-inline">OK !</span>');
						}

						if (city == '') {
							$('.city').parent().parent().attr('class', 'control-group error');
							$('.city').parent().append('<span class="help-inline">Required</span>');
							return false;
						}
						else {
							$('.city').parent().parent().attr('class', 'control-group success');
							$('.city').parent().append('<span class="help-inline">OK !</span>');
						}

						if (country == '') {
							$('.country').parent().parent().attr('class', 'control-group error');
							$('.country').parent().append('<span class="help-inline">Required</span>');
							return false;
						}
						else {
							$('.country').parent().parent().attr('class', 'control-group success');
							$('.country').parent().append('<span class="help-inline">OK !</span>');
						}
						*/




						var dataString = "roomId="+roomId+"&adults="+adults+"&child="+child+"&rooms="+rooms+"&fromDate="+fromDate+"&toDate="+toDate+"&BookingRequest="+BookingRequest+"&title="+title+"+name="+name+"&surname="+surname+"&email="+email+"&ph="+ph+"&fax="+fax+"&city="+city+"&address="+address+"&country="+country;

						console.log(dataString);
						

						// ajax send
						$.ajax({  
						  	type: "POST",  
						  	url: "/reservation/do",  
						  	data: dataString,
						  	beforeSend: function(){
						  		$('.expandRsvp-2').fadeTo('slow', '.3');
						    	$('.loading-ajax').show();
						    },

						    complete: function(){
						        $('.loading-ajax').hide();
						        $('.expandRsvp-2').slideUp();
						    },

						    success: function() {  
						    	$('.loading-ajax').css('background' '#fff url(/assets/img/success-icon.png) no-repeat 10% 50%');
						    	$('.loading-ajax p').text('<b>Success!</b>');
						    	$('.loading-ajax').show();
						  	},

						    error: function () {
						        alert("There was an error. Image could not be added, please try again");
						    },
						  	 
						});  
						return false;
					})
					return false;
				});

					
			})
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

			.loading-ajax {
				display: block;
				position: absolute;
				width: 150px;
				height: 24px;
				background: #fff url('/assets/img/287.gif') no-repeat 10% 50%;
				left: 50%;
				z-index: 2;
				margin-left: -75px;
				margin-top: 200px;
				top: 50%;
				border: 1px solid #ccc;
				padding: 10px;
			}

			.loading p {
				padding-left: 50px;
				padding-top: 1px;
				font-size: 15px;
			}

			.loading-ajax p {
				padding-left: 40px;
				padding-top: 1px;
				font-size: 15px;
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

			.overide select, .overide input {
				width: 234px;
				border-radius: 0;
				-webkit-border-radius: 0;
				box-shadow: none;
				-webkit-box-shadow: none;
			}

			.control-group {
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
					<div class="loading-ajax"><p style="font-family: Georgia">Sending Data...</p></div>
					<div class="expandRsvp-2" style="bac">
						<div class="row">
							<div class="span3"></div>
							<div class="span6">
								<form class="form-horizontal contactDetails" method="GET" action="/reser">
								  <div class="control-group">
								    <label class="control-label" for="inputEmail">Title</label>
								    <div class="controls overide">
								      <select name="title" class="title" id="">
								      	<option value="Mr">Mr.</option>
								      	<option value="Mrs">Mrs.</option>
								      </select>
								    </div>
								  </div>
								  <div class="control-group">
								    <label class="control-label" for="inputPassword">Name</label>
								    <div class="controls">
								      <input type="text" name="name" class="name">
								    </div>
								  </div>
								  <div class="control-group">
								    <label class="control-label" for="inputPassword">Surname</label>
								    <div class="controls">
								      <input type="text" name="surname" class="surname">
								    </div>
								  </div>
								  <div class="control-group">
								    <label class="control-label" for="inputPassword">Email Address</label>
								    <div class="controls">
								      <input type="text" name="email" class="email">
								    </div>
								  </div>
								  <div class="control-group">
								    <label class="control-label" for="inputPassword">Ph.</label>
								    <div class="controls">
								      <input type="text" name="ph" class="ph">
								    </div>
								  </div>
								  <div class="control-group">
								    <label class="control-label" for="inputPassword">Fax</label>
								    <div class="controls">
								      <input type="text" name="fax" class="fax">
								    </div>
								  </div>
								  <hr>
								  <div class="control-group">
								    <label class="control-label" for="inputPassword">Address</label>
								    <div class="controls">
								      <input type="text" name="address" class="address">
								    </div>
								  </div>
								  <div class="control-group">
								    <label class="control-label" for="inputPassword">City</label>
								    <div class="controls">
								      <input type="text" name="city" class="city">
								    </div>
								  </div>
								  <div class="control-group">
								    <label class="control-label" for="inputPassword">Country</label>
								    <div class="controls overide">
								      <select name="country" class="country">
										<option value="">Select Country</option>
										<option value="AF">Afghanistan</option>
										<option value="AL">Albania</option>
										<option value="DZ">Algeria</option>
										<option value="AS">American Samoa</option>
										<option value="AD">Andorra</option>
										<option value="AG">Angola</option>
										<option value="AI">Anguilla</option>
										<option value="AG">Antigua &amp; Barbuda</option>
										<option value="AR">Argentina</option>
										<option value="AA">Armenia</option>
										<option value="AW">Aruba</option>
										<option value="AU">Australia</option>
										<option value="AT">Austria</option>
										<option value="AZ">Azerbaijan</option>
										<option value="BS">Bahamas</option>
										<option value="BH">Bahrain</option>
										<option value="BD">Bangladesh</option>
										<option value="BB">Barbados</option>
										<option value="BY">Belarus</option>
										<option value="BE">Belgium</option>
										<option value="BZ">Belize</option>
										<option value="BJ">Benin</option>
										<option value="BM">Bermuda</option>
										<option value="BT">Bhutan</option>
										<option value="BO">Bolivia</option>
										<option value="BL">Bonaire</option>
										<option value="BA">Bosnia &amp; Herzegovina</option>
										<option value="BW">Botswana</option>
										<option value="BR">Brazil</option>
										<option value="BC">British Indian Ocean Ter</option>
										<option value="BN">Brunei</option>
										<option value="BG">Bulgaria</option>
										<option value="BF">Burkina Faso</option>
										<option value="BI">Burundi</option>
										<option value="KH">Cambodia</option>
										<option value="CM">Cameroon</option>
										<option value="CA">Canada</option>
										<option value="IC">Canary Islands</option>
										<option value="CV">Cape Verde</option>
										<option value="KY">Cayman Islands</option>
										<option value="CF">Central African Republic</option>
										<option value="TD">Chad</option>
										<option value="CD">Channel Islands</option>
										<option value="CL">Chile</option>
										<option value="CN">China</option>
										<option value="CI">Christmas Island</option>
										<option value="CS">Cocos Island</option>
										<option value="CO">Colombia</option>
										<option value="CC">Comoros</option>
										<option value="CG">Congo</option>
										<option value="CK">Cook Islands</option>
										<option value="CR">Costa Rica</option>
										<option value="CT">Cote D'Ivoire</option>
										<option value="HR">Croatia</option>
										<option value="CU">Cuba</option>
										<option value="CB">Curacao</option>
										<option value="CY">Cyprus</option>
										<option value="CZ">Czech Republic</option>
										<option value="DK">Denmark</option>
										<option value="DJ">Djibouti</option>
										<option value="DM">Dominica</option>
										<option value="DO">Dominican Republic</option>
										<option value="TM">East Timor</option>
										<option value="EC">Ecuador</option>
										<option value="EG">Egypt</option>
										<option value="SV">El Salvador</option>
										<option value="GQ">Equatorial Guinea</option>
										<option value="ER">Eritrea</option>
										<option value="EE">Estonia</option>
										<option value="ET">Ethiopia</option>
										<option value="FA">Falkland Islands</option>
										<option value="FO">Faroe Islands</option>
										<option value="FJ">Fiji</option>
										<option value="FI">Finland</option>
										<option value="FR">France</option>
										<option value="GF">French Guiana</option>
										<option value="PF">French Polynesia</option>
										<option value="FS">French Southern Ter</option>
										<option value="GA">Gabon</option>
										<option value="GM">Gambia</option>
										<option value="GE">Georgia</option>
										<option value="DE">Germany</option>
										<option value="GH">Ghana</option>
										<option value="GI">Gibraltar</option>
										<option value="GB">Great Britain</option>
										<option value="GR">Greece</option>
										<option value="GL">Greenland</option>
										<option value="GD">Grenada</option>
										<option value="GP">Guadeloupe</option>
										<option value="GU">Guam</option>
										<option value="GT">Guatemala</option>
										<option value="GN">Guinea</option>
										<option value="GY">Guyana</option>
										<option value="HT">Haiti</option>
										<option value="HW">Hawaii</option>
										<option value="HN">Honduras</option>
										<option value="HK">Hong Kong</option>
										<option value="HU">Hungary</option>
										<option value="IS">Iceland</option>
										<option value="IN">India</option>
										<option value="ID">Indonesia</option>
										<option value="IA">Iran</option>
										<option value="IQ">Iraq</option>
										<option value="IR">Ireland</option>
										<option value="IM">Isle of Man</option>
										<option value="IL">Israel</option>
										<option value="IT">Italy</option>
										<option value="JM">Jamaica</option>
										<option value="JP">Japan</option>
										<option value="JO">Jordan</option>
										<option value="KZ">Kazakhstan</option>
										<option value="KE">Kenya</option>
										<option value="KI">Kiribati</option>
										<option value="NK">Korea North</option>
										<option value="KS">Korea South</option>
										<option value="KW">Kuwait</option>
										<option value="KG">Kyrgyzstan</option>
										<option value="LA">Laos</option>
										<option value="LV">Latvia</option>
										<option value="LB">Lebanon</option>
										<option value="LS">Lesotho</option>
										<option value="LR">Liberia</option>
										<option value="LY">Libya</option>
										<option value="LI">Liechtenstein</option>
										<option value="LT">Lithuania</option>
										<option value="LU">Luxembourg</option>
										<option value="MO">Macau</option>
										<option value="MK">Macedonia</option>
										<option value="MG">Madagascar</option>
										<option value="MY">Malaysia</option>
										<option value="MW">Malawi</option>
										<option value="MV">Maldives</option>
										<option value="ML">Mali</option>
										<option value="MT">Malta</option>
										<option value="MH">Marshall Islands</option>
										<option value="MQ">Martinique</option>
										<option value="MR">Mauritania</option>
										<option value="MU">Mauritius</option>
										<option value="ME">Mayotte</option>
										<option value="MX">Mexico</option>
										<option value="MI">Midway Islands</option>
										<option value="MD">Moldova</option>
										<option value="MC">Monaco</option>
										<option value="MN">Mongolia</option>
										<option value="MS">Montserrat</option>
										<option value="MA">Morocco</option>
										<option value="MZ">Mozambique</option>
										<option value="MM">Myanmar</option>
										<option value="NA">Nambia</option>
										<option value="NU">Nauru</option>
										<option value="NP">Nepal</option>
										<option value="AN">Netherland Antilles</option>
										<option value="NL">Netherlands (Holland, Europe)</option>
										<option value="NV">Nevis</option>
										<option value="NC">New Caledonia</option>
										<option value="NZ">New Zealand</option>
										<option value="NI">Nicaragua</option>
										<option value="NE">Niger</option>
										<option value="NG">Nigeria</option>
										<option value="NW">Niue</option>
										<option value="NF">Norfolk Island</option>
										<option value="NO">Norway</option>
										<option value="OM">Oman</option>
										<option value="PK">Pakistan</option>
										<option value="PW">Palau Island</option>
										<option value="PS">Palestine</option>
										<option value="PA">Panama</option>
										<option value="PG">Papua New Guinea</option>
										<option value="PY">Paraguay</option>
										<option value="PE">Peru</option>
										<option value="PH">Philippines</option>
										<option value="PO">Pitcairn Island</option>
										<option value="PL">Poland</option>
										<option value="PT">Portugal</option>
										<option value="PR">Puerto Rico</option>
										<option value="QA">Qatar</option>
										<option value="ME">Republic of Montenegro</option>
										<option value="RS">Republic of Serbia</option>
										<option value="RE">Reunion</option>
										<option value="RO">Romania</option>
										<option value="RU">Russia</option>
										<option value="RW">Rwanda</option>
										<option value="NT">St Barthelemy</option>
										<option value="EU">St Eustatius</option>
										<option value="HE">St Helena</option>
										<option value="KN">St Kitts-Nevis</option>
										<option value="LC">St Lucia</option>
										<option value="MB">St Maarten</option>
										<option value="PM">St Pierre &amp; Miquelon</option>
										<option value="VC">St Vincent &amp; Grenadines</option>
										<option value="SP">Saipan</option>
										<option value="SO">Samoa</option>
										<option value="AS">Samoa American</option>
										<option value="SM">San Marino</option>
										<option value="ST">Sao Tome &amp; Principe</option>
										<option value="SA">Saudi Arabia</option>
										<option value="SN">Senegal</option>
										<option value="SC">Seychelles</option>
										<option value="SL">Sierra Leone</option>
										<option value="SG">Singapore</option>
										<option value="SK">Slovakia</option>
										<option value="SI">Slovenia</option>
										<option value="SB">Solomon Islands</option>
										<option value="OI">Somalia</option>
										<option value="ZA">South Africa</option>
										<option value="ES">Spain</option>
										<option value="LK">Sri Lanka</option>
										<option value="SD">Sudan</option>
										<option value="SR">Suriname</option>
										<option value="SZ">Swaziland</option>
										<option value="SE">Sweden</option>
										<option value="CH">Switzerland</option>
										<option value="SY">Syria</option>
										<option value="TA">Tahiti</option>
										<option value="TW">Taiwan</option>
										<option value="TJ">Tajikistan</option>
										<option value="TZ">Tanzania</option>
										<option value="TH">Thailand</option>
										<option value="TG">Togo</option>
										<option value="TK">Tokelau</option>
										<option value="TO">Tonga</option>
										<option value="TT">Trinidad &amp; Tobago</option>
										<option value="TN">Tunisia</option>
										<option value="TR">Turkey</option>
										<option value="TU">Turkmenistan</option>
										<option value="TC">Turks &amp; Caicos Is</option>
										<option value="TV">Tuvalu</option>
										<option value="UG">Uganda</option>
										<option value="UA">Ukraine</option>
										<option value="AE">United Arab Emirates</option>
										<option value="GB">United Kingdom</option>
										<option value="US">United States of America</option>
										<option value="UY">Uruguay</option>
										<option value="UZ">Uzbekistan</option>
										<option value="VU">Vanuatu</option>
										<option value="VS">Vatican City State</option>
										<option value="VE">Venezuela</option>
										<option value="VN">Vietnam</option>
										<option value="VB">Virgin Islands (Brit)</option>
										<option value="VA">Virgin Islands (USA)</option>
										<option value="WK">Wake Island</option>
										<option value="WF">Wallis &amp; Futana Is</option>
										<option value="YE">Yemen</option>
										<option value="ZR">Zaire</option>
										<option value="ZM">Zambia</option>
										<option value="ZW">Zimbabwe</option>
									</select>
								    </div>
								  </div>
								  <hr>
								  <div class="control-group">
								    <div class="controls">
								      <button type="submit" name="submitData" id="submitData" class="btn btn-block btn-warning">Submit</button>
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
											<input type="hidden" class="roomId" name="roomId" value="<?=$content->id;?>">
											<div class="control-group">
												<div class="controls">
											      	<select name="adult" id="" class="span2 adults">
											      		<option value="">Adults</option>
														<?php for($i=1;$i<20;$i++) :?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor; ?>
											      	</select>
											    </div>
											</div>
											<div class="control-group">
												<div class="controls">
											      	<select name="child" id="" class="span2 child">
											      		<option value="">Child</option>
														<?php for($i=1;$i<20;$i++) :?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor; ?>
											      	</select>
											    </div>
											</div>
											<div class="control-group">
												<div class="controls">
											      	<select name="room" id="" class="span2 rooms">
											      		<option value="">Rooms</option>
														<?php for($i=1;$i<20;$i++) :?>
															<option value="<?=$i;?>"><?=$i;?></option>
														<?php endfor; ?>
											      	</select>
											    </div>
											</div>
										</div>
										<div class="span2">
											<div class="control-group">
												<div class="controls">
											      	<div class="input-append overide" style="margin-bottom: 18px;">
													  	<input class="span2" class="fromDate" id="fromDate" type="text" placeholder="Check in Date" name="fromDate" style="width:75%;">
													  	<span class="add-on"><i class="icon-calendar"></i></span>
													</div>
											    </div>
											</div>
											<div class="control-group">
												<div class="controls">
											      	<div class="input-append overide" style="margin-bottom: 18x;">
													  	<input class="span2" class="toDate" id="toDate" type="text" placeholder="Check out Date" name="toDate"  style="width:75%;">
													  	<span class="add-on"><i class="icon-calendar"></i></span>
													</div>
											    </div>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="span2" style="text-align: left;">
									  		<label class="radio">
											  <input type="radio" name="BookingType" class="BookingRequest" id="optionsRadios1" value="true" checked>
											  Booking Request
											</label>
										</div>
										<div class="span2"  style="text-align: left;">
									  		<label class="radio">
											  <input type="radio" name="BookingType" class="BookingOnline" id="optionsRadios2" value="true">
											  Booking Online
											</label>
										</div>
										<div class="row" >
											<div class="span4 pull-right" style="margin-top: 14px;">
												<button id="SendReserve" class="btn btn-block btn-warning" type="submit" name="send" value="book">Next &raquo</button>
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