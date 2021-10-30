<?php
session_start();
include_once('db.php');
$email = $_POST['email'];
$pass = $_POST['pass'];
$sql = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $_SESSION['user'] = $row['name'];
      $_SESSION['email'] = $row['email'];
      header('Location: ../dashboard.php?division=Dhaka');
    }
} else {
  echo "<html><script type='text/javascript'>
    window.alert('Invalid email or password');
    window.location.href = '../index.php';
    </script></html>";
  }
?>