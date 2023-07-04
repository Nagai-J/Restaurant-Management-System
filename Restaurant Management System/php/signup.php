<?php
include("configAL.php");
if(!empty($_POST))
{
	$email = $_POST['email'];
	$pass = sha1($_POST['password']);
	$name = $_POST['name'];
	$sql = mysqli_query($al,"INSERT INTO rb_users(name,password,email) VALUES('$name','$pass','$email')");
	if($sql)
	{
		?>
        <script type="text/javascript">
		alert("Successfully Registrered");
		</script>
        <?php
	}else{
?>
        <script type="text/javascript">
		alert("Email Already Registered");
		</script>
<?php }		
		
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign-up Form Design</title>
	<link type="text/css" href="style1.css" rel="stylesheet" />
    <body>
      <div class="Sign-upbox">
        <img src="images/avatar1.png" class="avatar" />
        <h1>Sign-up Here</h1>
        
          <form method="post">
          
        <input required type="text" name="name" placeholder="Full Name">
        <input required type="password" name="password" placeholder="Password">
        <input required type="email" name="email" placeholder="Email">
       
        <button type="submit" name="submit_button">Sign-Up</button><br><br><br>
        
        <h3><a href="login.php">Click Here to Login</a></h3>
        <h3><a href="index.php">Back to Homepage</a></h3>


        </form>
      </div>
    </body>
  </head>
</html>