<?php
session_start();
$conn = mysqli_connect('localhost', 'root', 'mathenge,./1998');
mysqli_select_db($conn, 'trials');


$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$reg_no = $_POST['reg_no'];
$password = $_POST['password'];
$password1 = $_POST['password1'];

if ($password !== $password1) {
    echo "please ensure both passwords match";
} else {

    $sql = "SELECT * from users WHERE name = '$name'";

    // $result = mysqli_query($conn, $sql);


    if ($name === $sql) {
        echo "There is another user with the same name";
    } else {
        $reg = "INSERT INTO users(name,email,telephone) 
        VALUES('$name','$email','$telephone')";
        //     $reg = "INSERT INTO users('name', 'email','telephone','address','reg_no', 'password')
        //  VALUES ('$name','$email','$telephone','$address','$reg_no','$password')";
    }

    // $id = "SELECT userid from users WHERE name = '$name'";
    if (mysqli_query($conn, $reg)) {

        header('location: main.html');
        exit;
    } else {
        echo "Account creation failed.";
    }
}
