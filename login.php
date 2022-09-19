<?php

$user = $_POST ["user"];
$pass = $_POST ["pass"];

$validUser = "admin";
$validPass = "1234";

if($user == $validUser && $pass == $validPass){
   header("location:https://www.potrerodigital.org/");
} else {
    header("location:error.html");
}
?>