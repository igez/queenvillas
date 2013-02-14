<!DOCTYPE html>
<html>
  <head>
    <title>Queen Villas</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<link rel="stylesheet" href="/assets/css/login.css" />
	<script type="text/javascript" src="/assets/js/modernizr.custom.79639.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
  </head>
  <body>
	<form class="form-4" method="POST">
	<div id="infoMessage"><?php echo $message;?></div>
    <h1>Login</h1>
    <p>
        <label for="login">Username</label>
        <input type="text" name="identity" placeholder="Username" required>
    </p>
    <p>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" required> 
    </p>
 
    <p>
        <input type="submit" name="submit" value="Login">
    </p>       
	</form>
  </body>
</html>