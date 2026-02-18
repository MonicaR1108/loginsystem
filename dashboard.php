<?php
include 'db.php';

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="dashboard-box">
<h2 >Welcome <?php echo $_SESSION['name']; ?></h2>
<p>You are successfully logged in.</p>
<a href="logout.php" class="logout-btn">Logout</a>
</div>
</body>
</html>