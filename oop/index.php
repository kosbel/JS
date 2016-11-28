<?php
//include ('loader.php');

$hostname = 'mysql:host = localhost; dbname = test';
$username = 'root';
$password = '1';

$dbh = new PDO($hostname, $username, $password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

spl_autoload_register(function ($class_name) {
    include 'models/' . $class_name . '.php';
});

$obj = new GameClass();
$obj2 = new GameClassPro();

if (isset($_GET['red'])) $obj = $obj2;

$obj->init($dbh);
$obj->log();

$x = $obj->get_x();
$y = $obj->get_y();
$speed = $obj->get_speed();

if (isset($_GET['action'])) {

    if ($_GET['action'] == 'right') {
        $obj->set_x(($x+$speed));
        $obj->save();
    }
    if ($_GET['action'] == 'left') {
        $obj->set_x(($x-$speed));
        $obj->save();
    }
    if ($_GET['action'] == 'up') {
        $obj->set_y(($y-$speed));
        $obj->save();
    }
    if ($_GET['action'] == 'down') {
        $obj->set_y(($y+$speed));
        $obj->save();
    }


    // header("Location: http://localhost/oop/");
}


// ====================================================  =======

include('view.php');
