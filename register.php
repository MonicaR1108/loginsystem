<!-- <link re="stylesheet" href="style.css"> -->

<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registeration Form</title>
        <link rel="stylesheet" href="assets/style.css">
</head>
<body>

 <form method="POST">
      <h2>Register</h2>
<label>Name</label>
        <input type="text" name="name" required>
        <br>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button name="register">Register</button>

        <a href="login.php">Already have an account? <span>Login</span></a>

<?php
if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";

    if($conn->query($sql)){
        echo "<p style='text-align:center;color:green;font-weight:bold;'>Registered Successfully</p>";
    } else {
        echo "<p style='text-align:center:red;font-weight:bold;'>Error: Email Email already exists!</p>";
    }
}
?>
</form>
</body>
</html>
