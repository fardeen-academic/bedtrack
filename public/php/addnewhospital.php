<?php
session_start();
include 'db.php';
$name = $_POST['name'];
$division = $_POST['division'];
$seat = $_POST['seat'];
$booked = $_POST['booked'];
$icu = $_POST['icu'];
$icu_booked = $_POST['icu_booked'];
$sql = "INSERT INTO venue (name, division, seat, booked, icu, icu_booked) VALUES ('$name', '$division', '$seat', '$booked', '$icu', '$icu_booked')";

if (mysqli_query($conn, $sql)) {
  echo "<script>window.alert('Hospital Added successfully');
  window.location.href = '../index.php';</script>";
} else {
  echo "<script>window.alert('Error: " . $sql . "<br>" . mysqli_error($conn)."');
  window.location.href = '../index.php';</script>";
}

?>