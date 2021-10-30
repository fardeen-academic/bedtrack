<?php
session_start();
include_once('db.php');
$email = $_POST['email'];
$pass = $_POST['pass'];
$sql = "SELECT * FROM admin WHERE email='$email' AND password='$pass'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $_SESSION['admin-email'] = $row['email'];
      header('Location: ../admin.php');
    }
} else {
  echo "<html><script type='text/javascript'>
    window.alert('Invalid email or password');
    window.location.href = '../admin-login.php';
    </script></html>";
  }
?>