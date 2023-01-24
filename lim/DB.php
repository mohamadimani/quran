<?php

function connect_db()
{

    $db_name = 'quran';
    $username = 'root';
    $oassword = 'secret';

    $utf = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    $conn = new PDO("mysql:host=localhost;dbname=" . $db_name, $username, $oassword, $utf);

}

