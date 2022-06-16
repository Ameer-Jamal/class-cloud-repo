<?php
include 'dbh.php';


if (isset($_POST['password'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $studentEmail = mysqli_real_escape_string($conn, $_POST['studentEmail']);
}

$result = mysqli_query($conn, "SELECT * FROM Parents WHERE email = '$email'"); //check for duplicates
$num_rows = mysqli_num_rows($result); //number of rows where duplicates exist

if ($num_rows == 0) { //if no duplicate 
    //Check for if a student exists with this email
    $sql = "SELECT * FROM Students Where email='$studentEmail'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        //if yes insert
        $query = "INSERT INTO Parents(name,email,password,phone,studentEmail) VALUES('$name','$email','$password','$phone','$studentEmail')";
        echo "added";
        exit();
    } else {
        echo "student not found";
        exit();
    }
} else {
    echo "parent exists";
    exit();
}
