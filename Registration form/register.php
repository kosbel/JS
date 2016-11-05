<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 05.11.2016
 * Time: 12:47
 */

if ($_POST)
{
    $string = serialize($_POST);
    $f = fopen('users.txt', 'a');
    fwrite($f, $string . PHP_EOL);
    fclose($f);
}