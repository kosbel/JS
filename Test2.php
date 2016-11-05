<?php

//    $f = fopen('test.txt', 'w');
//
//    for ($i = 1; $i < 11; $i++)
//    {
//        for ($j = 0; $j < $i; $j++)
//        {
//            fwrite($f, $i);
//        }
//
//        fwrite($f, PHP_EOL);
//    }
//
//    fclose($f);
//
//    $h = fopen('test.txt', 'r');
//
//    $text = fread($h, filesize('test.txt'));
//
//    echo $text;

//Создать функцию, которая принимает один аргумент в виде массива и
//дописывает в него последним элементом количество значений массива

    function printArray(array $arr, $module = 'p_r')
    {
        switch ($module)
        {
            case 'p_r':
                echo "<pre>";
                print_r($arr);
                echo "</pre>";
                break;
            case 'v_d':
                echo "<pre>";
                var_dump($arr);
                echo "</pre>";
                break;
        }
    }

    function addAmountArr (array & $arr)
    {
        $n = count($arr);

        array_push($arr, $n);
    }

    $a = array(1, 2, 3, 4, 5);

    addAmountArr($a);

    printArray($a);