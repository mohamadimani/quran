<?php
session_start();
include "lim/DB.php";
include "lim/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>قرآن</title>
    <meta name="description" content="طرح قرائت هرروز یک صفحه قرآن">
    <link rel="shortcut icon" href="../img/logo.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        @font-face {
            font-family: costomfont;

            src: url('bootstrap/fonts/IRANSansWeb.ttf') format("ttf"), url('bootstrap/fonts/IRANSansWeb.woff') format("woff");
        }

        * {
            font-family: costomfont;
        }


        .navbar1 a {
            color: #1f1f1f !important;
            text-shadow: 1px 1px 3px #4e4e4e;
        }

        .navbar1 {
            margin: 0;
            padding: 0;
            font-family: B Yekan;
            font-size: 16px;
        }

        .background {
            background: rgba(203, 231, 255, 0.80);
        }

        .username {
            float: right;
            margin: auto 3%;
            line-height: 50px;
            font-size: 16px;
            font-weight: bold;;
        }

        .username2 {
            float: left;
            margin: auto 250px;
        }
    </style>

</head>
<body style="background: url('img/mmmm.jpg')  fixed">

<div class="container">

    <div class="row">
        <div class="col-xs-12">

            <nav class="navbar navbar-default navbar-fixed-top background">
                <div class="container-fluid">
                    <div class="navbar-header">

                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1"
                                aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php if (isset($_COOKIE['user_name'])) { ?>
                            <span class="username   hidden-sm  hidden-md hidden-lg"> <span> <?= $_COOKIE['user_name'] ?></span>
                            </span>
                        <?php } ?>
                    </div>

                    <div class="collapse navbar-collapse  " id="navbar1">
                        <ul class="nav navbar-nav navbar1 " aria-labelledby="navbarScrollingDropdown">
                            <!--                            <li><a>صفحه اصلی</a></li>-->

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="joz_list.php" id="navbarScrollingDropdown"
                                   role="button"
                                   data-bs-toggle="dropdown" aria-expanded="false">جزها</a>
                            </li>
                            <?php
                            if (isset($_COOKIE['user_name'])) { ?>
                                <!--<li><a href="login.php?exit=exit">خروج</a></li>-->
                            <?php } else { ?>
                                <!--<li><a href="login.php">ثبت نام</a></li>-->
                            <?php } ?>
                            <?php if (isset($_COOKIE['user_name'])) { ?>
                                <li class="username2 hidden-xs  "><a>
                                        <span> <?= $_COOKIE['user_name'] ?></span></a>
                                </li>
                            <?php } ?>

                        </ul>

                    </div>
                </div>
            </nav>

        </div>
    </div>

