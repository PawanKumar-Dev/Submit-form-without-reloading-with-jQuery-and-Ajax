<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$connect = mysqli_connect('localhost', 'root', '', 'ajax_form');

$sql = "insert into form_data (username, email, password) values('$username', '$email', '$password')";

if (mysqli_query($connect, $sql)) {
  echo "Data Inserted Successfully!";
} else {
  echo "Data failed to be inserted!";
}