<?php
session_start();
if(isset($_SESSION['username']))
{
    header("Location: dashboard.php");
    exit;
}

require('connect.php');
$loginError = "";
if (isset($_POST['username']) and isset($_POST['password']))
{
//Assigning posted values to variables.
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);

//Checking the values are existing in the database or not
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";		

$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);

//If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1)
{

//check if account is deactivated
$sql= "SELECT * FROM users WHERE username='$username' AND password='$password'";
$res = mysql_query($sql);

while($row = mysql_fetch_array($res)) {

$status = $row["status"];
}
//echo $status;
if ($status=='active'){
//proceed to normal account
//echo "active";

$_SESSION['username'] = $username;
header('Location: dashboard.php');
}
if ($status!=='active'){
// echo "inactive";
$loginError = "Account suspended.";
/*$_SESSION['username'] = $username;
header('Location: inactive.php');*/
}



}
else
{
//If the login credentials doesn't match, he will be shown with an error message.

$loginError = "Invalid credentials. Please try again";
}		
				
}
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>EED - Kaiote Assignment</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    
	 <link rel="stylesheet" type="text/css" href="stylesheets/login.css">
</head>    
    <body>
          <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 >Kaiote Assignment</h2><hr>
    <h2 class="active">Admin login</h2>
 

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="images/person.svg" id="icon" alt="User Icon" />
    </div>
<p><?php echo $loginError; ?></p>
    <!-- Login Form -->
    <form method="POST" action="">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" name="submit" value="Login">
    </form>

   
  </div>
</div>
        </body>
            </div>
	    
	     <script type="text/javascript">
	    
	   
</script>
	    