<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if(username == 'admin' && $password == '1234'){
    echo "Welcome to Dashboard";
    $_SESSION['username']= $username;
    echo "Hello $_SESSION[username]";
}else{
    echo "Username or Password ผิดพลาด";
}
?>