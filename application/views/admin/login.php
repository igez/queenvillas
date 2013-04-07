<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Custom Login Form Styling</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="/assets/css/login.css" />
		<script src="/assets/js/modernizr.custom.79639.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #7f9b4e url(images/bg2.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
			h2 { font-weight: normal;font-family: sans-serif;font-size: 14pt;color: #fff;}
		</style>
    </head>
    <body>
        <div class="container">
			<header>
			
				<h1><strong>Queen Villas & Spa</strong></h1>
				<h2>Best Gili Trawangan Hotel & Resort</h2>
				
			</header>
			
			<section class="main">
				<form class="form-4">
				    <h2>Administrator Login</h2>
				    <p>
				        <label for="login">Username or email</label>
				        <input type="text" name="login" placeholder="Username or email" required>
				    </p>
				    <p>
				        <label for="password">Password</label>
				        <input type="password" name='password' placeholder="Password" required> 
				    </p>

				    <p>
				        <input type="submit" name="submit" value="Login">
				    </p>       
				</form>​
			</section>
			
        </div>
    </body>
</html>