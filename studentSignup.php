<?php
include 'dbh.php';



if (isset($_POST['password'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $grade = mysqli_real_escape_string($conn, $_POST['grade']);
    $query = "INSERT INTO Students(name,email,password,grade) VALUES('$name','$email','$password','$grade')";
}

if (mysqli_query($conn, $query)) {
    echo "added";
} else {
    echo 'ERROR ' . mysqli_error($conn);
}
