/*
Code Writtern by : Faiyaz Rafeek
                   CEO & Founder of FA Design
*/
<?php session_start();
include('dbcon.php');
    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $name=$_POST['name'];
        
    $sql = "INSERT INTO users(username,password,email,name) 
            VALUES('$username', '$password','$email','$name')";
			
    if(mysqli_query($con, $sql)){
        echo '<script language="javascript">';
        echo 'alert("New user was added!");';
        echo 'window.location="index.php";';
        echo '</script>';
        
    } else {
        echo '<script language="javascript">';
        echo 'alert("Duplicate user!");';
        echo 'window.location="registration.php";';
        echo '</script>';
    }
?>