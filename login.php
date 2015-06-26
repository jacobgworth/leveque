<?php
session_start();

	include 'db_connect.php';
	include 'header.php';
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = md5($_POST['password']);
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `users` WHERE email='$username' and password='$password'";
 
$result = mysql_query($query) or die(mysql_error());
$userDetails = mysql_fetch_array($result);
$count = mysql_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;

    $_SESSION['login_username'] = $userDetails['name'];
    $_SESSION['campaign_email'] = $userDetails['email'];
    $_SESSION['logged_user_id'] = $userDetails['user_id'];

if($userDetails['name'] == 'admin') { 
 //header("location:admin-campaigns.php"); 
 echo '<script> window.location="admin-campaigns.php";</script>'; exit;
}
echo '<script> window.location="dashboard.php";</script>'; exit;
//header("location:http://leveque.newstorycharity.org/dashboard.php"); exit;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$msg = "Invalid Login Credentials.";
}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>My New Story Login</title>
    <meta http-equiv="Content-Type"
    content="text/html; charset=UTF-8" />
    <link href="style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/newstoryapp.webflow.css">
    <script src="jquery-1.7.1.min.js" ></script>
    <script src="jquery.validate.min.js" ></script>
<script>
$(document).ready(function(){
    $('#login').validate({
        rules: {
            name: {
                required: true
            },
            password: {
                required: true,
                email: true
            }
        },
        messages: {
            name: {
                required: 'Password is required.'  
            },
            password: {
                required: 'Email is required.',
                email : 'Invalid Email.'
            }
        }
    }); // end register validation
});
</script>
</head>
    <body>
        <div id="divLogin">
			<h2 style="font-weight: 600;">Log In</h2>
            <form action="" id="login" method="POST">
				<div class="form-group">
					<label>Enter your email:</label>
					<input type="text" id="username" name="username" />
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" id="password" name="password" />
				</div>
				<div class="form-group">
					<input type="hidden" name="login" value="login" />
					<input type="submit" id="submit" name="submit" value="log in" />
					<div class="create"><a href="create-campaign.php">don't have an account? </a></div>
				</div>
				<div><?php echo (isset($msg) ? '<font color="red">'.$msg.'</font>': '');?></div>
            </form>
        </div>
    </body>
</html>

