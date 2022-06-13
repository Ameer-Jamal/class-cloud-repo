<?php

$conn = mysqli_connect('localhost', 'root', 'usbw', 'classclouddb');



$username = isset($_POST['username']) ? $_POST['username'] : '';

$password = isset($_POST['password']) ? $_POST['password'] : '';

//$dbPass =  mysql_fetch_row(mysql_query("SELECT password FROM Students WHERE email = '$username'"));


//echo = $dbpass[0];

function loginUser($conn,$username,$password){
      $query="SELECT * from Students where email'".$username."' AND password='".$password."' limit 1";
      $result =  mysqli_query($query);
      echo $result;

      if(mysqli_num_rows($result)==1){
        echo "you have successfully logged in ";
      }
      
      else{
              $ok = false;
              $messages[] = 'Incorrect username/password combination';
      }
}



$ok = true;

$messages = array();

if (!isset($username) || empty($username)) {
    $ok = false;
    $messages[] = 'Username cannot be empty';
}



if (!isset($password) || empty($password)) {
    $ok = false;
    $messages[] = 'Password cannot be empty';
}


if ($ok) {
        $ok = true;
        $messages = 'Successful Login';
        loginUser($conn,$username,$password);
}

echo json_encode(
    array(
        'ok' => $ok,
        'messages' => $messages
    )

)
?>
