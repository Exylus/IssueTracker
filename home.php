<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}
// Include config file
require_once "cfg/config.php";
// Perform query

if ($Userinfos = $link -> query("SELECT * FROM users WHERE username = '{$_SESSION['username']}'")) {
}
  if ($Userinfos -> num_rows > 0) {
  }
                      ////////////////////
                      /* GET USER INFOS */
                      ////////////////////
    while($row = $Userinfos -> fetch_assoc()) {
        $assigned_to = $row[assigned_to];
        $userid = $row[id];
        $username = $row[username];

        $Project_infos = $link -> query("SELECT * FROM projects WHERE project_id = '{$assigned_to}' ");
      }
        if ($Project_infos -> num_rows > 0) {
        }

                        ///////////////////////
                        /* GET PROJECT INFOS */
                        ///////////////////////
          while($row = $Project_infos -> fetch_assoc()) {
            $project_id = $row[project_id];
            $project_name = $row[project_name];

          }

// Close connection
mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>OwlSight - Flexible Issue Tracker</title>
</head>
<body>
<header>
    <!-- NAVBAR -->
    <nav class="top-nav">
        <ul class="nav-list">
            <li id="thispage">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li>
                <a href="overview.php" class="nav-link">Overview</a>
            </li>
            <li>
                <a href="#" class="nav-link">Help</a>
            </li>
            <li>
                <a href="#" class="nav-link">Profile</a>
            </li>
            <li>
                <a href="logout.php" class="nav-link">Sign Out</a>
            </li>
        </ul>
    </nav>


    <h1><?php echo date('l jS \of F Y'); ?></h1>
    <h2>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h2>
    <h3>Welcome to OwlSight</h3>
</header>

<footer>
  <div class="up" id="up">
    <i class="fas fa-chevron-up"></i>
  </div>
  <p>&copy; 2019-2020 Erwan Thomy</p>
</footer>
</body>
</html>
