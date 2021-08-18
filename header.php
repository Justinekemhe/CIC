<?php
session_start();
include_once 'connection.php';
// date_default_timezone_set('Asia/Dhaka');
if (!isset($_SESSION['login'])) {
    header('location: login.php');
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>RESEARCHER DISSEMINATION</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>