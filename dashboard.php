<?php 
/*session_start();

if($_SESSION['email'])
{
	//checks if user is logged in
}
	else{
		// redirects if user is not logged in
	header("location:index.php"); 
	}
	//assigns user value for the session
$username= $_SESSION['username']; 
*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Kaiote dashboard</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<link href="styles/main.css" type="text/css" rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type='text/javascript' src='scripts/respond.min.js'></script>
	</head>
	<body>
		
		<div id="wrapper">
		
			<header>
				
			
				
				<h1>Home</h1>
				
				<nav>
					<ul>
						<li><a href="dashboard.php" class="active" title="Home">Home</a></li>
						<li><a href="records.php" title="Raw Records">Records</a></li>
						<li><a href="graph.php" title="Graph (per minute feeds)">Graph - (minute)</a></li>
						<li><a href="graph2.php" title="Graph (per 20 minutes feeds)">Graph - (20 minutes)</a></li>
						<li><a href="logout.php" title="Logout">Logout</a></li>
					</ul>
				</nav>
				</header>	
				
				<div id="banner">
					<p>Welcome to the dash board<br />					
					</p>
					
					
					<?php
					require('connect.php');

$result1 = mysql_query("SELECT * FROM thingsnetwork");


$countr = mysql_num_rows($result1);
?>
Total records <?php echo "($countr)";?> <br>
 
</p>


				</div>
				
			
		
			
		</div>

	</body>
</html>