<?php
session_start();
include_once('db.php');
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$sql = "INSERT INTO user(name, email, password) VALUES ('$name', '$email', '$pass')";
if (mysqli_query($conn, $sql)) {
      $_SESSION['user'] = $row['name'];
      $_SESSION['email'] = $row['email'];
      header('Location: ../dashboard.php?division=Dhaka');
} else {
  echo "<html><script type='text/javascript'>
    window.alert('Something is wrong. Try again later.');
    window.location.href = '../signup.php';
    </script></html>";
  }
?>