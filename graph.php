<?php 
session_start();

if($_SESSION['username'])
{
	//checks if user is logged in
}
	else{
	header("location:index.php"); // redirects if user is not logged in
	}
$username = $_SESSION['username']; //assigns user value

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
						<li><a href="dashboard.php"  title="Home">Home</a></li>
						<li><a href="records.php" title="Raw Records">Records</a></li>
						<li><a href="graph.php"  class="active" title="Graph (per minute feeds)">Graph - (1 min)</a></li>
						<li><a href="graph2.php"  title="Graph (per 20 minutes feeds)">Graph - (20 min)</a></li>
						<li><a href="logout.php" title="Logout">Logout</a></li>
					</ul>
					
				</nav>
				</header>
				
				<div id="banner">
				<h3>Graphed records - 20 latest records: duration: 1 minute<br><br></h3>
<?php
require('call-graph.php');
?>

				</div>
				
				
		
			
	
		</div>

	</body>
</html>