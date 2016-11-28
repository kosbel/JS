<?php

$dsn = 'mysql:host=localhost; dbname=practice_bd';
$user = 'root';
$password = '1';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $coh = $dbh->query('SELECT * FROM country');

    $country = $coh->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($country);
    echo "</pre>";
} catch (PDOException $e) {
    echo $e->getMessage();
}