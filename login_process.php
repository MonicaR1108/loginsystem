<?php
include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM users WHERE email='$email'");

if($result->num_rows > 0){

    $row = $result->fetch_assoc();

    if(password_verify($password, $row['password'])){

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['name'] = $row['name'];

        header("Location: dashboard.php");
    } else {
        echo "Wrong Password";
    }

}else{
    echo "User not found";
}
?>
