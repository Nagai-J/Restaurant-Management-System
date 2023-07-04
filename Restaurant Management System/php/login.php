<?php
session_start();
if(isset($_SESSION['email']))
{
	header("location:home.php");
}
include("configAL.php");
if(!empty($_POST))
{
	if($_POST['email']=="jaymce77@gmail.com" && $_POST['password']=="CPEN102" || $_POST['email']=="kaybee@gmail.com" && $_POST['password']=="CPEN102")
	{
		$_SESSION['admin'] = $_POST['email'];
		header('location:admin.php');
	}
	$email = mysqli_real_escape_string($al,$_POST['email']);
	$pass = mysqli_real_escape_string($al,sha1($_POST['password']));
	$sql = mysqli_query($al,"SELECT * FROM rb_users WHERE email = '$email' AND password = '$pass'");
	if(mysqli_fetch_array($sql)!=0)
	{
		$_SESSION['email'] = $email;
		header("location:home.php");
	}
	else
	{
		?><script type="text/javascript">alert("Wrong Email or Password");</script>
        <?php } 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style1.css" />
    <body>
      <div class="loginbox">
        <img src="images/avatar1.png" class="avatar" />
        <h1>Login Here</h1>



        <form method="post">
          <p>Email</p>
          <input required type="text" name="email" placeholder="Enter your email" />
          <p>Password</p>
          <input required type="Password" name="password" placeholder="Enter your Password" />
          <button type="submit" name="submit_button">Sign In</button><br><br><br>
          <h3><a href="signup.php">Don't have an account?</a></h3>
		  <h3><a href="index.php">Back to Homepage</a></h3>
        </form>
      </div>
    </body>
  </head>
</html>
