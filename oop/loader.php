<?php

$hostname = 'mysql:host = localhost; dbname = test';
$username = 'root';
$password = '1';

    $dbh = new PDO($hostname, $username, $password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    spl_autoload_register(function ($class_name) {
        include 'models/' . $class_name . '.php';
    });


