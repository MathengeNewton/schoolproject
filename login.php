<?php
session_start();
$conn = mysqli_connect('localhost', 'root', 'mathenge,./1998');
mysqli_select_db($conn, 'unimarket');

$name = $_POST['name'];
$password = $_POST['password'];

$sql = "SELECT * from users WHERE name = '$name'";

$result = mysqli_query($conn, $sql);

if ($name == mysqli_query($conn, $sql)) {
      header("index.html");
} else {
      echo "unable to log in";
}
