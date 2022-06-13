<?php

session_start();
include 'dbh.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("Location: logInPage.php?error=Email is required");
        exit();
    } else if (empty($password)) {
        header("Location: logInPage.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM Students Where email='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);


            if ($row['email'] == $username && $row['password'] == $password) {

                $_SESSION['email'] = $row['email'];
                $_SESSION['name']  = $row['name'];
                $_SESSION['grade'] = $row['grade'];
                if ($row['grade'] == 1 || $row['grade'] == 7) {
                    header("Location: studentPage{$row['grade']}.php");
                } else {
                    header("Location:/class-cloud-repo/errorPage/error.php");
                }


                exit();
            }
        } else {
            header("Location: logInPage.php?error=The Username or password is incorrect, Please try again");
            exit();
        }
    }
} else {
    header("Location: logInPage.php");
    exit();
}
