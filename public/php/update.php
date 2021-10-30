<?php
session_start();
include 'db.php';
$id = $_POST['id'];
$booked = $_POST['booked'];
$icu_booked = $_POST['icu_booked'];
$sql = "UPDATE venue SET booked=$booked, icu_booked=$icu_booked WHERE id=$id";
if (mysqli_query($conn, $sql)) {
  echo "<script>window.alert('Updated successfully');
  window.location.href = '../admin.php';</script>";
} else {
  echo "<script>window.alert('Error: " . $sql . "<br>" . mysqli_error($conn)."');
  window.location.href = '../admin.php';</script>";
}
?>