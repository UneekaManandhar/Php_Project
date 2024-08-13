<?php
include 'dbconfig.php';
  $name = $_POST['name'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $sql = "INSERT INTO contact (name, number, email, message)
  VALUES ('$name', '$number', '$email', '$message')";
  if (mysqli_query($conn, $sql)) {
    echo "Data submitted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);




?>
