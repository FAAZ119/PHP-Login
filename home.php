/*
Code Writtern by : Faiyaz Rafeek
                   CEO & Founder of FA Design
*/
<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Home I FA Design</title>
</head>
<body>
<div class="form-wrapper"> 
    <center><h3>Welcome: <?php echo $row['name']; ?> </h3></center>
	 <div class="reminder">
     <p>
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo dolor error laboriosam culpa consectetur laborum adipisci dolorem porro, quae expedita! Eius iure enim amet officia. Voluptas officia libero consectetur distinctio?
     </p>
    <a href="logout.php">Log out</a>
  </div>
</div>

</body>
</html>