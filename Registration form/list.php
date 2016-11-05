<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 05.11.2016
 * Time: 12:47
 */

$arr = file('users.txt');
echo "List of participants: <br> --------------- <br>";
foreach ($arr as $v)
{
    $v = unserialize($v);
    echo 'Name: ' . $v['name'] . '<br>';
    echo 'Email: ' . $v['email'] . '<br>';
    echo 'Phone: ' . $v['phone'] . '<br>';
    echo '--------------- <br>';
}