<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  $con = mysqli_connect("localhost", "root", "1234");
  $sql = "SELECT dvdimage FROM dvd WHERE id=$id";
  $result = mysqli_query("$sql");
  $row = mysqli_fetch_assoc($result);
  mysqli_close($con);

  header("Content-type: image/jpeg");
  echo $row['image'];
?>