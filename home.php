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
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>OwlSight - Flexible Issue Tracker</title>
</head>
<body>
<header>
    <!-- NAVBAR -->
    <nav class="top-nav">
        <ul class="nav-list">
            <li>
                <a href="index.php" class="nav-link">Home</a>
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

<?php

$sql = "SELECT assigned_to FROM users WHERE username=" + "'" + $_SESSION["username"] + "'";
$result = mysqli_query($link, $sql);

$lastproject = $result;

$sql2 = "SELECT * FROM projects WHERE project_id=" + "'"+ $lastproject + "'";
$result2 = mysqli_query($link, $sql2);

$_SESSION["project_id"] = $result2;
echo "Last project:" . ($_SESSION["project_id"] == null ? "Null" : $_SESSION["project_id"]);
//if ($_SESSION["id"] == null) {
//    echo "C'est null";
//} else echo $_SESSION["id"];


?>
<footer>
  <div class="up" id="up">
    <i class="fas fa-chevron-up"></i>
  </div>
  <p>&copy; 2019-2020 Erwan Thomy & Xavier Wahl</p>
</footer>
</body>
</html>
