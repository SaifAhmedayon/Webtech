<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body>
<header>Welcome to Personal Finance Tracker, <?php echo $_SESSION["username"]; ?>!</header>
<div class="container">
    <h3>Select a Feature</h3>
    <nav>
        <a href="budget.php">Set Budget Goals</a>
        <a href="report.php">View Reports</a>
        <a href="login.php">Logout</a>
    </nav>
</div>
</body>
</html>
