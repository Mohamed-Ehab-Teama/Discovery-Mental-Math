<?php

$path = 'localhost\PHP\Discovery-Mental-Math\\';

session_start();

$db_type = 'mysql';
$host = 'localhost';
$db_name = 'discovery_mental_math';
$db_username = 'root';
$db_password = '';


$connection = new PDO("$db_type:host=$host;dbname=$db_name",$db_username, $db_password);