<?php

//    $sum = 0;
//    for ($i = 1; $i <= 112; $i += 3)
//    {
//        $sum += $i;
//    }
//    echo "Sum = $sum";

echo "<table border='1'>";
    for ($i = 1; $i < 10; $i++)
    {
        echo "<tr>";
        for ($j = 1; $j < 10; $j++)
        {
            echo "<td>".$i * $j."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

//$arr = array('PHP', 'One', 'Two');
//
//foreach ($arr as $k => $value)
//{
//    echo $k." = ".$value."<br>";
//}