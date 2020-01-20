<?php

session_start();

if (!isset($_SESSION['password']) || (trim($_SESSION['password']) == '')) {
    header("location: index.php");
    exit();
}
$session_id=$_SESSION['password'];

?>