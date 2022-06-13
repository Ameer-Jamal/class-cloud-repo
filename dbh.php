<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "usbw";
$dbName = "classclouddb";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    echo("Connection Failed");
}