/*
Code Writtern by : Faiyaz Rafeek
                   CEO & Founder of FA Design
*/
<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Login I FA Design</title>
</head>
<body>
  <div class="form-wrapper">
  
  <form action="validate.php" method="post">
    <h3>Login here</h3>
	
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username / Email" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  
  <div class="reminder">
    <p>Not a member? <a href="register.php">Sign up now</a></p>
    <p><a href="forgot.php">Forgot password?</a></p>
	</div>  
</div>

</body>
</html>