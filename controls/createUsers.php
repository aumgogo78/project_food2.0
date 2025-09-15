<?php
  include 'db.php';

  if($_SERVER['REQUEST_METHOD'] = 'POST'){
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $mail = $_POST['email'];
    $pass = password_hash($_POST['password'],
    PASSWORD_DEFAULT);
    $phone = $_POST['phone'];
    $add = $_POST['address'];

    $sql = "INSERT INTO users (firstName, lastName, email, password, phone, address) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
      $fname,
      $lname,
      $mail,
      $pass,
      $phone,
      $add
    ]);

    header("location: ../Home.php");
  }
?>