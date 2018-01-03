<?PHP
session_start();
session_destroy();
//echo 'Logged out Successfully';
//echo '<p><a href="index.php">Go to Home</a></p>';
sleep(3);
header("Location: index.php");
?>