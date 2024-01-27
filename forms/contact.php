<?php

$errors = [];

if (!empty($_POST)) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $appointmentdate = $_POST['appointmentdate'];
  $department = $_POST['department'];
  $doctors = $_POST['doctor'];
  $message = $_POST['message'];
 
 
  if (empty($name)) {
      $errors[] = 'Name is empty';
  }

  if (empty($email)) {
      $errors[] = 'Email is empty';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = 'Email is invalid';
  }

  if (empty($message)) {
      $errors[] = 'Message is empty';
  }
}
