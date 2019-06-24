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
  <title>Reset Password I FA Design</title>
</head>
<body>
<div class="form-wrapper-forgot">
  
  <form action="#" method="post">
    <h3>Reset Password</h3>
	
    <div class="form-item">
		<input type="email" name="email" required="required" placeholder="Enter your email" autofocus required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Submit" name="submit" value="Submit"></input>
    </div>
  </form>
  
  <div class="reminder">
    <a href="index.php">Back to Login</a>
  </div>
  <p>Copyright &copy; FA Design.</p>
  
</div>
<div class="text">
  
</div>


</body>
</html>