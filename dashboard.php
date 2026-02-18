<?php
include 'db.php';

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
}
?>

<h2>Welcome <?php echo $_SESSION['name']; ?></h2>

<a href="logout.php">Logout</a>