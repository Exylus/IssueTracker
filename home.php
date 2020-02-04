<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>OwlSight - Flexible Issue Tracker</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="top-nav">
			<ul class="nav-list">
				<li>
					<a href="index.php" class="nav-link">Home</a>
				</li>
				<li>
					<a href="#" class="nav-link">Overview</a>
				</li>
				<li>
					<a href="logout.php" class="nav-link">Sign Out</a>
				</li>
			</ul>
		</nav>
    <header>
      <h1><?php echo date('l jS \of F Y'); ?></h1>
      <h2>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h2>
    </header>
  </body>
</html>
