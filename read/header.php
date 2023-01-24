<?php
session_start();
include "../lim/DB.php";
include "../lim/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quran</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <style>
        @font-face {
            font-family: costomfont;

            src: url('../bootstrap/fonts/IRANSansWeb.ttf') format("ttf"), url('../bootstrap/fonts/IRANSansWeb.woff') format("woff");
        }

        *{
            font-family: costomfont;
        }
    </style>
</head>
<body style="background: url('../img/mmmm.jpg')  fixed">

<div class="container">