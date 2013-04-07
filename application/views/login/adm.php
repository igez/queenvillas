<!DOCTYPE html>
<html>
  <head>
    <title>Queen Villas</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<link rel="stylesheet" href="/assets/css/login.css" />
	<script type="text/javascript" src="/assets/js/modernizr.custom.79639.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
  <style>
    h2 {font-family: serif;font-size: 10pt;color: #fff;font-weight: normal;padding-bottom: 20px;text-transform: uppercase;letter-spacing: 6px;padding-left: 
      10px;}
  </style>
  </head>
  <body>
  <div class="well well-large">
	<form class="form-4" method="POST">
	<div id="infoMessage"><?php echo $message;?></div>
    <img src="/assets/img/logo_resp.png"/ style="padding-bottom:20px;margin-left:13px;">
    <h2>Administrator Login</h2>
    <p>
        <label for="login">Username</label>
        <input type="text" name="identity" placeholder="Username" required>
    </p>
    <p>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" required> 
    </p>
 
    <p>
        <input type="submit" name="submit" value="Enter">
    </p>       
	</form>
</div>
  </body>
</html>