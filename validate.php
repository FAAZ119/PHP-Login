/*
Code Writtern by : Faiyaz Rafeek
                   CEO & Founder of FA Design
*/
<?php session_start();
include('dbcon.php');
    $username = mysqli_real_escape_string($con, $_POST['user']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);
			
	$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and (username='$username' or email='$username')");
	$row		= mysqli_fetch_array($query);
	$num_row 	= mysqli_num_rows($query);
			
	if ($num_row > 0) 
		{			
			$_SESSION['user_id']=$row['user_id'];
            header('location:home.php');
        }
    else
    	{
			echo '<script language="javascript">';
			echo 'alert("Invalid Username and Password Combination!");';
			echo 'window.location="index.php";';
			echo '</script>';			
		}
?>